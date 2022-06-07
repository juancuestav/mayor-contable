const mix = require("laravel-mix");
const path = require("path");
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
    .vue()
    .alias({
        "@": path.join(__dirname, "resources/js"),
        "@app": path.join(__dirname, "resources/js/Pages"),
        "@config": path.join(__dirname, "resources/js/config"),
        "@components": path.join(__dirname, "resources/js/components"),
    })
    .postCss("resources/css/app.css", "public/css", [
        //
    ]);
