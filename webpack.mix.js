let mix = require('laravel-mix');
const del = require('del');

mix.setResourceRoot('../');
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

 mix.js('resources/assets/js/bootstrap.js', 'public/js')
 .sass('resources/assets/sass/common.scss', 'public/css')
 .sass('resources/assets/sass/admin/common.scss', 'public/admin_assets/css')
 .copy('resources/assets/fonts', 'public/admin_assets/fonts');

 mix.js('resources/assets/js/bootstrap-select.js', 'public/js')
.minify('public/js/bootstrap-select.js').then(() => {
    del('public/js/bootstrap-select.js')
 })
