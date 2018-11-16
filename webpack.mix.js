let mix = require('laravel-mix');
mix.webpackConfig({ node: { fs: 'empty' }})

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

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
<<<<<<< HEAD
mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
mix.js('resources/assets/js/companydashboard.js', 'public/js');
=======
// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
mix.js('resources/assets/js/candidateDashboard.js', 'public/js');
>>>>>>> 649b538bff352a49d841b7fc30d08d0731929910
