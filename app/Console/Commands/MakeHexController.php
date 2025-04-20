<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeHexController extends Command
{
    // Cambia el nombre del comando aquí
    protected $signature = 'app:make-hex-c {module} {name}';
    protected $description = 'Crea un controlador en src/{module}/Infrastructure/Http/Controllers';

    public function handle()
    {
        $module = Str::studly($this->argument('module'));
        $name = Str::studly($this->argument('name'));

        $basePath = base_path("src/{$module}/Infrastructure/Http/Controllers");
        $filePath = "{$basePath}/{$name}.php";

        if (File::exists($filePath)) {
            $this->error("Ya existe: {$filePath}");
            return;
        }

        File::ensureDirectoryExists($basePath);

        $namespace = "Src\\{$module}\\Infrastructure\\Http\\Controllers";

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
