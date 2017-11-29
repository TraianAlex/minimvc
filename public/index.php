<?php
use App\Core\Route;
use App\Core\Request;

require '../vendor/autoload.php';
include '../core/bootstrap.php';

if(env(APP_ENV) === 'production'){
    header("Cache-Control: public, max-age=8640");
    header("Accept-Encoding: deflate, gzip;q=1.0, *;q=0.5");
}

Route::load(APP_PATH.'/router.php')->submit(Request::uri());

