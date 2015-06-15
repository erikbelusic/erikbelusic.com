<?php

namespace App\Providers;

use App\Services\YamlMarkdownParser;
use Illuminate\Support\ServiceProvider;
use Mni\FrontYAML\Bridge\CommonMark\CommonMarkParser;

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
        $this->app->singleton('FrontYaml', function ($app) {
            return new YamlMarkdownParser(null, new CommonMarkParser());
        });

        $this->app->bind('App\Contracts\YamlMarkdownParserContract', 'FrontYaml');
    }
}
