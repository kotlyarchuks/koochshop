let mix = require('laravel-mix');

require('laravel-mix-tailwind');

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

mix
    .styles(
        [
            'node_modules/bootstrap/dist/css/bootstrap.css',
            'node_modules/font-awesome/css/font-awesome.css',
            'node_modules/select2/dist/css/select2.css',
            'resources/assets/css/drift-basic.min.css',
            'resources/assets/css/front.css'
        ],
        'public/css/style.min.css'
    )
    .copyDirectory('node_modules/font-awesome/fonts', 'public/fonts')
    .copyDirectory('resources/assets/images', 'public/images')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .js('resources/assets/js/app.js', 'public/js')
    .tailwind();
