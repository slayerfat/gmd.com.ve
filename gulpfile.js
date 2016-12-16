const elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.styles([
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/font-awesome/css/font-awesome.css',
        './node_modules/animate.css/animate.css',
        'main.css',
        'responsive.css'
    ], elixir.config.publicPath + '/css/styles.css')
        .webpack('main.js')
        .copy('./node_modules/font-awesome/fonts', elixir.config.publicPath + '/fonts')
        .scripts([
            './node_modules/html5shiv/dist/html5shiv.min.js',
            './node_modules/respond.js/dest/respond.min.js'
        ], elixir.config.publicPath + '/js/polyfills.js');
});