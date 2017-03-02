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

mix.js('resources/assets/js/app.js', 'public/js/').extract(['vue', 'jquery']);

// mix.copy('resources/assets/js/app.js', 'public/js/app.js');
// mix.copy('resources/assets/js/list.js', 'public/js/list.js');
// mix.copy('node_modules/socket.io-client/socket.io.js', 'public/js/socket.io.js');
// mix.copy('resources/assets/js/bootstrap.js', 'public/js/bootstrap.js');

mix.sass('resources/assets/sass/app.sass', 'public/css').sourceMaps();

mix.browserSync('tools');