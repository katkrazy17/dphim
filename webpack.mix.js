let mix = require('laravel-mix');
const THEME_PATH = 'resources/assets/';
const FRONTEND_PATH = 'public/vendor/';
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

mix.js([
   THEME_PATH + 'js/app.js',
], FRONTEND_PATH + 'js')
   .styles([
      THEME_PATH + 'css/bootstrap.min.css'
   ], FRONTEND_PATH + 'css/bootstrap.min.css')
   .js([
      THEME_PATH + 'js/bootstrap.min.js'
   ], FRONTEND_PATH + 'js/bootstrap.min.js')

   .copyDirectory(THEME_PATH + 'js/jquery-3.2.1.slim.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/popper.min.js', FRONTEND_PATH + 'js')
