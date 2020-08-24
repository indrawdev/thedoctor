const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/js/app.js', 'public/js').sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'public/css/plugins/icheck-bootstrap/icheck-bootstrap.min.css',
    'public/css/adminlte.min.css',
], 'public/css/all.css');

mix.scripts([
    'public/js/plugins/jquery/jquery.min.js',
    'public/js/plugins/bootstrap/js/bootstrap.bundle.min.js',
    'public/js/adminlte.min.js'
], 'public/js/all.js');