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

mix.js('resources/assets/js/app.js', 'public/js')
   .js('resources/assets/js/admin.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')

mix.copyDirectory('node_modules/tinymce/icons', 'public/tinymce/icons');
mix.copyDirectory('node_modules/tinymce/plugins', 'public/tinymce/plugins');
mix.copyDirectory('node_modules/tinymce/skins', 'public/tinymce/skins');
mix.copyDirectory('node_modules/tinymce/themes', 'public/tinymce/themes');
mix.copy('node_modules/tinymce/jquery.tinymce.js', 'public/tinymce/jquery.tinymce.js');
mix.copy('node_modules/tinymce/jquery.tinymce.min.js', 'public/tinymce/jquery.tinymce.min.js');
mix.copy('node_modules/tinymce/tinymce.js', 'public/tinymce/tinymce.js');
mix.copy('node_modules/tinymce/tinymce.min.js', 'public/tinymce/tinymce.min.js');
