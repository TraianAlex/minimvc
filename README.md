# minimvc
A custom framework with routing, php-mysql wrapper, view, validation, url caching, pagination.
It's just a small "weekend project" but to be a full framework must have more features like upload images, Email(use mail()), Middleware, Sessions, tokens, etc. The Model, Controller, router and env() looks like those from Laravel and the view is the same: Blade template engine. How to use blade here (https://laravel.com/docs/5.1/blade).

#Installation

Cloning or download from this repository or:

	mkdir install-dir

	cd install-dir

	composer require minimvc/minimvc dev-master

	cd ..

	mv install-dir/vendor/minimvc/minimvc .

	rm -rf install-dir

	cd minimvc

	composer update

	cp .env.example .env (Write a .env file like .env.example and put your mysql database credentials if you use mysql).

	chmod -R 777 cache

	chmod -R 777 cache_url

Modify line RewriteBase /sitedir/public/ in public/.htaccess put your sitedir for local development if you are using xampp, wampp. Ex. for localhost/minimvc in .htaccess RewriteBase /minimvc/public/

In Core/Request@url method use line 13 or 14, depend on your development environment

Check the router.php, controllers and models for examples.
