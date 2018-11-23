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

mix.mix.extract([
    'lodash',
    'jquery',
    'bootstrap-sass',
    'axios',
    'vue'
])
    .autoload({ jquery: ['$', 'window.jQuery', 'jQuery'] })
    .js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/employee/create-employee.js', 'public/js')
    .js('resources/assets/js/employee/test-component.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css');
