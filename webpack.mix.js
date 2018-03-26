const mix = require('laravel-mix');

mix.setPublicPath('./dist');

mix.js('resources/assets/js/admin.js', 'admin.js');
mix.sass('resources/assets/scss/admin.scss', 'admin.css');

mix.sourceMaps();