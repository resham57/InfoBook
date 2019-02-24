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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('node_modules/izitoast/dist/css/iziToast.min.css', 'public/css')
   .copy('node_modules/izitoast/dist/js/iziToast.min.js', 'public/js')
   .copy('node_modules/jquery-validation/dist/jquery.validate.min.js', 'public/js');
