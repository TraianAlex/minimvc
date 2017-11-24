<?php
use App\Core\Route;
use App\Core\Request;

require '../vendor/autoload.php';
include '../core/bootstrap.php';

Route::load(APP_PATH.'/router.php')->submit(Request::uri());

