const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/main.js', 'public/assets/js')
   .less('resources/assets/less/styles.less', 'public/assets/css')
    .less('resources/assets/less/laravel-modules.styles.less', 'public/assets/css')
    .less('resources/assets/less/laravel-menus.styles.less', 'public/assets/css');
