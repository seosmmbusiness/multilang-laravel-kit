const mix = require("laravel-mix");
require("laravel-mix-compress");
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.js("resources/js/app.js", "public/js")
    .js("resources/js/ga.js", "public/js/ga.js")
    .postCss("resources/css/app.css", "public/css", [require("tailwindcss")])
    .sourceMaps();
if (mix.inProduction()) {
    mix.version();
}

mix.compress();
require("laravel-mix-extract-media-queries");

//...

mix.extractMediaQueries({
    //breakpoints: [640, 768, 1024, 1280, 1536], // default Tailwind breakpoints
    breakpoints: [640, 768, 1024],
    combined: true,
    verbose: false,
    minify: true,
    filename: "css/extracted-[breakpoint].[ext]",
});
