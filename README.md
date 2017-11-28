# minimvc
A custom framework with routing, php-mysql wrapper, view, validation, url caching, pagination.
It's just a small "weekend project" but to be a full framework must have more features like upload images, Email(use mail()), Request input, Middleware, Sessions, tokens, etc. The Model, Controller, router and env() looks like those from Laravel and the view is the same: Blade template engine. How to use blade here (https://laravel.com/docs/5.1/blade).

#Install

Cloning or download from this repository or:

1. composer require minimvc/minimvc

2. Rename de vendor folder

3. Grab everything from vendor/minimvc/minimvc folder and put direct in your root folder and delete the rest.

4. composer update

5. Write a .env file like .env.example and put your mysql database credentials

6. Modify the line RewriteBase /sitedir/public from public/.htaccess with your sitedir for local development if you are using xampp, wampp.

Check the router.php, controllers and models for examples.
