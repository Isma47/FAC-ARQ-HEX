<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeHexController extends Command
{
    protected $signature = 'app:make-hex {module} {path} {name}';
    protected $description = 'Crea un controlador en src/{module}/{path}/{name}.php';

    public function handle()
    {
        $module = Str::studly($this->argument('module')); // Auth
        $path = trim($this->argument('path'), '/');       // Http/Login
        $name = Str::studly($this->argument('name'));     // LoginController

        $relativePath = str_replace('/', DIRECTORY_SEPARATOR, $path); // para carpeta
        $basePath = base_path("src/{$module}/{$relativePath}");
        $filePath = "{$basePath}/{$name}.php";

        if (File::exists($filePath)) {
            $this->error("Ya existe: {$filePath}");
            return;
        }

        File::ensureDirectoryExists($basePath);

        $namespacePath = str_replace('/', '\\', $path); 
        $namespace = "Src\\{$module}\\{$namespacePath}";

        $stub = <<<PHP
<?php

namespace {$namespace};

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class {$name} extends Controller
{
    public function __invoke(Request \$request)
    {
        //
    }
}
PHP;

        File::put($filePath, $stub);

        $this->info("Controlador creado: {$filePath}");
    }
}
