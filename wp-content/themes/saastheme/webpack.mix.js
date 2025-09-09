// webpack.mix.js

let mix = require('laravel-mix');

mix
.options({
    processCssUrls: false,
})
.js('src/app.js', 'dist')
.sass('src/app.scss', 'dist'); // Add this line to compile SCSS to dist
;