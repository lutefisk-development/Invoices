// webpack.mix.js

let mix = require('laravel-mix');


mix.js('public/js/app.js', 'public/dist')
    .sass('public/scss/style.scss','')
    .setPublicPath('public/dist')
    .autoload({
        jquery: ['$', 'window.jQuery', 'jQuery']
    });
