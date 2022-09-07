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

mix.js('resources/js/front/main.js', '/../js/front/main.js')
    .sass('resources/sass/front/main.scss', '/../css/front/main.css')
    .js('resources/js/admin/back.js', '/../js/admin/back.js')
    .sass('resources/sass/admin/back.scss', '/../css/admin/back.css');

// sass --watch resources/sass/front/main.scss:assets/css/front/main.css --style expanded
