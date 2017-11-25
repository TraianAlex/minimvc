# minimvc
A custom framework with routing, php-mysql wrapper, view, validation.
It's just a small "weekend project" but to be a full framework must have more features like caching, pagination (the php-mysql wrapper has something included but need a class to build the links, etc), email class, etc. The Model, Controller, router looks like those from Laravel and for the view I tried to reinvent the wheel.

#Install

Cloning or download from this repository or:

1. composer require minimvc/minimvc

2. Rename de vendor folder

3. Grab everything from vendor/minimvc/minimvc folder and put direct in your root folder and delete the rest.

4. composer update

5. In config.php write your mysql database credentials

6. Modify the line RewriteBase /sitedir/public from public/.htaccess with your sitedir for local development.
