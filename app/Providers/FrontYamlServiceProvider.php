<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Mni\FrontYAML\Bridge\CommonMark\CommonMarkParser;
use Mni\FrontYAML\Parser;

class FrontYamlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Mni\FrontYAML\Parser', function () {
            return new Parser(null, new CommonMarkParser());
        });
    }
}
