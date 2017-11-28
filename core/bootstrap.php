<?php

define("APP_PATH", dirname(dirname(__FILE__)));
define("SITE_ROOT", dirname($_SERVER['PHP_SELF']));

$dotenv = new Dotenv\Dotenv(APP_PATH);
$dotenv->overload();

new MysqliDb (env(DB_HOST), env(DB_USERNAME), env(DB_PASSWORD), env(DB_DATABASE));

$cache = new App\Core\URI_Cache(5);//10 sec
