const mix = require('laravel-mix');

   // Compilazione del JS vanilla
mix.js('./resources/js/app.js', 'public/js');

   // Compilazione del CSS vanilla
mix.postCss('./resources/css/app.css', 'public/css');

   // Compilazione del SASS
// mix.sass('./resources/sass/app.scss', 'public/css');

