const mix = require('laravel-mix');

mix.js('resources/js/app.jsx', 'public/js') // Compile React (JSX)
   .react() // Active le support React
   .postCss('resources/css/app.css', 'public/css', [
       require('@tailwindcss/postcss'), // Utilise le nouveau package
       require('autoprefixer'), // Ajoute les préfixes CSS
   ])
   .options({
       processCssUrls: false, // Désactive le traitement des URLs dans les fichiers CSS
   });