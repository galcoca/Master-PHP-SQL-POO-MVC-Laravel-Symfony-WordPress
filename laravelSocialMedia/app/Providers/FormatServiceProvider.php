<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
        require_once app_path() . '/Helpers/FormatTime.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
