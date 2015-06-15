var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy('bower_components/normalize.css/normalize.css', 'resources/assets/css/normalize.css');
    mix.sass('app.scss', 'resources/assets/css');
    mix.styles(['normalize.css', 'app.css']);
});
