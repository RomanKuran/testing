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
    .js('resources/js/homeScripts.js', 'public/js')
    .js('resources/js/admin/categories.js', 'public/js/admin')
    .js('resources/js/admin/testsGroups.js', 'public/js/admin')
    .js('resources/js/admin/tests.js', 'public/js/admin')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/homeStyles.scss', 'public/css')
    .sass('resources/sass/admin/admin.scss', 'public/css/admin');
