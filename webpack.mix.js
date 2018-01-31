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

mix.react('resources/assets/js/app.js', 'public/js');
mix.copy('resources/assets/css/star-rating.css', 'public/css');
mix.copy('resources/assets/bootstrap/css/bootstrap.min.css', 'public/css');
mix.js('resources/assets/js/chart.js', 'public/js');
mix.js('resources/assets/js/bootstrap-formhelpers-phone.js', 'public/js');
mix.js('resources/assets/js/bootstrap.js', 'public/js');
mix.js('resources/assets/js/bootstrap.min.js', 'public/js');
mix.js('resources/assets/js/style.js', 'public/js');
mix.js('resources/assets/js/analityc.js', 'public/js');