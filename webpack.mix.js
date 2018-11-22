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
 //   .sass('resources/assets/sass/app.scss', 'public/css');
// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
mix.js('resources/assets/js/userdashboard.js', 'public/js');

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
// mix.js('resources/assets/js/companydashboard.js', 'public/js');
// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
// mix.js('resources/assets/js/candidateDashboard.js', 'public/js');
// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
// mix.js('resources/assets/js/candidateDashboard.js', 'public/js');

// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
// mix.js('resources/assets/js/userdashboard.js', 'public/js');

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');

// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
// mix.js('resources/assets/js/companydashboard.js', 'public/js');

// mix.js('resources/assets/js/vendorDashboard.js', 'public/js');
// mix.js('resources/assets/js/candidateDashboard.js', 'public/js');


