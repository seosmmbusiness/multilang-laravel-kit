## About Laravel 8 + Tailwind + Alpine JS Multilanguage Landing Page Starter Kit

version: 1.0

Uses:

-Laravel 8 - Basic Example-app

-Mcamara/laravel-localization https://github.com/mcamara/laravel-localization

-Alpine.js  https://github.com/alpinejs/alpine

-TailwindCss https://tailwindcss.com/

-Kitwind UI https://kitwind.io/products/kometa

-Laravel Mix Extract Media Queries https://github.com/elambro/laravel-mix-extract-media-queries



The main goal is to create a multilingual landing page starter kit with full SEO titles and headings and with Google Pagespeed close to 100.

Made just for me, but anyone can use and modify if needed =)

In this version, I got 80-100 points in desktop version and 90-100 points in mobile with Font-awesome CDN enabled and 100 score without fonts. The results vary due to the server.

## Installation for Development

-Download git repo "git clone https://github.com/seosmmbusiness/multilang-laravel-kit.git"

-Run "composer install"

-Run "npm i"

-Run "php artisan serve"

## Deployment Laravel 8 Starter Kit on Apache Server

-Download git repo "git clone https://github.com/seosmmbusiness/multilang-laravel-kit.git" to your home directory and open it

-Run "composer install"

-Make changes in .env file (APP NAME, URL and etc)

-Run "php artisan key:generate"

-Create a symlink to html directory (it can be puclic_html or  /var/www/html be or the one your apache server uses) from multilang-laravel-kit/public 
In my case "ln -s /home/user/multilang-laravel-kit/public /home/user/public_html"

-Run "php artisan optimize"

-Run "php artisan route:trans:cache"

## Todoo

-Add more SEO meta tags 

-Add AMP 

-Add PWA

-Increase mobile speed with additional fonts

## Additional info

-webpack.mix.js
In "mix.extractMediaQueries" specify "breakpoints: [640, 768, 1024]" according to used in css;
run "npm run prod" to generate new css files;
add to master.blade preload and links to new scripts.

-Cache routes
According to Mcamara use "php artisan route:trans:cache" to cache routes. Without it the error is possible!

## Troubleshooting
In case "npm run prod" shows error "TypeError: compiler.plugin is not a function" with "extract-css-media-queries" plugin possibly there is an case with a new webpack plugin system. 

Make sure that the file "src/index.js" in "extract-css-media-queries" in "node_modules" has "compiler.hooks.emit.tapAsync('emit', (compilation, callback) => {" instead of "compiler.plugin('emit', (compilation, callback) => {"

Hope the creator of the plugin will repair it soon.

## Contributing

Thank you for considering contributing to the Laravel 8 + Tailwind + Alpine JS Multilanguage Landing Page Starter Kit!

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

