const mix = require('laravel-mix');
mix.setPublicPath('/');
//
// /*
//  |--------------------------------------------------------------------------
//  | Mix Asset Management
//  |--------------------------------------------------------------------------
//  |
//  | Mix provides a clean, fluent API for defining some Webpack build steps
//  | for your Laravel application. By default, we are compiling the Sass
//  | file for the application as well as bundling up all the JS files.
//  |
//  */
//
let applications = [
    'applications/backoffice/frontend/',
    'applications/shop/frontend/',
];
applications.forEach(function (appRoot) {
    mix.js(appRoot + '/resources/js/app.js', appRoot + 'public/js')
        .sass(appRoot + '/resources/sass/app.scss', appRoot + 'public/css');
});

