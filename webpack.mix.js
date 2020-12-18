let mix = require('laravel-mix');

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

mix
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/vendors.js', 'public/js/vendors.js')
    .combine([
        'resources/assets/js/app.js',
        'resources/assets/js/appRoutes.js',
        'resources/assets/js/controllers/**/*.js'
    ], 'public/js/app.js');