<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('vite', function ($expression) {
            return "<?php 
                if (file_exists(public_path('hot'))) {
                    echo '<script type=\"module\" src=\"http://localhost:5173/@vite/client\"></script>';
                    echo '<script type=\"module\" src=\"http://localhost:5173/resources/js/app.js\"></script>';
                    echo '<link rel=\"stylesheet\" href=\"http://localhost:5173/resources/css/app.css\">';
                } else {
                    \$manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
                    echo '<link rel=\"stylesheet\" href=\"' . asset('build/' . \$manifest['resources/css/app.css']['file']) . '\">';
                    echo '<script type=\"module\" src=\"' . asset('build/' . \$manifest['resources/js/app.js']['file']) . '\"></script>';
                }
            ?>";
        });
    }
}
