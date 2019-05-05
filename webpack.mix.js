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
      THEME_PATH + 'js/bootadmin.js',
      THEME_PATH + 'js/jquery-status.js',
   ], FRONTEND_PATH + 'js/bootadmin.js')
   //css
   .copyDirectory(THEME_PATH + 'css/animate.css', FRONTEND_PATH + 'css')
   .copyDirectory(THEME_PATH + 'css/style.css', FRONTEND_PATH + 'css')
   .copyDirectory(THEME_PATH + 'css/fontawesome.min.css', FRONTEND_PATH + 'css')
   .copyDirectory(THEME_PATH + 'css/loginadmin.css', FRONTEND_PATH + 'css')
   .copyDirectory(THEME_PATH + 'css/notfound.css', FRONTEND_PATH + 'css')
   .copyDirectory(THEME_PATH + 'css/tree.css', FRONTEND_PATH + 'css')
   //js
   .copyDirectory(THEME_PATH + 'js/jquery-3.2.1.slim.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/popper.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/bootstrap.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/inspinia.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/jquery.metisMenu.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/jquery.slimscroll.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/pace.min.js', FRONTEND_PATH + 'js')
   .copyDirectory(THEME_PATH + 'js/jquery-3.1.1.min.js', FRONTEND_PATH + 'js')     
   // image
   .copyDirectory(THEME_PATH + 'images', FRONTEND_PATH + 'css/images')
   
