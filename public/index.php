<?php
use App\Core\Route;
use App\Core\Request;
use App\Core\URI_Cache;

require '../vendor/autoload.php';
include '../core/bootstrap.php';

$cache = new URI_Cache(1);
Route::load(APP_PATH.'/router.php')->submit(Request::uri());

