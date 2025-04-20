<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Domain\Auth\Contracts\AuthService;
use App\Infrastructure\Auth\LaravelAuthService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
        $this->app->bind(AuthService::class, LaravelAuthService::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
