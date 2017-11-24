<?php

use App\Controllers\About;

$route->add('/', 'Home@test');
$route->add('/home/store', 'Home@store');
$route->add('home/delete/.+', 'Home@delete');
$route->add('home/set/.+', 'Home@setUser');
$route->add('home/add', 'Home@addUser');

$route->add('/about', 'About@test');
$route->add('/about/users', 'About@getData');
$route->add('/about/.+/second/.+', function($param1, $param2){
    $about = new About();
    $about->testParam2($param1, $param2);
});
$route->add('/about/.+', 'About@testParam');

$route->add('/contact', 'Contact@test');

/*-------------------ANONIMUS-----------------------------------------*/

$route->add('/foo/.+/bar/.+', function($first, $second){
    view('pages/foo', [$first, $second]);
});
$route->add('/foo/.+', function($foo){
    view('pages/foo', [$foo]);
});
$route->add('/foo', function(){
    view('pages/foo');
});

/*-----------------STATIC PAGES-------------------------------------------*/

// $route->add('/', function(){
//     viewHtml('header');
//     viewHtml('index');
//     viewHtml('footer');
// });

$route->add('/.+', function($param){
    viewHtml('header');
    if(file_exists(APP_PATH.'/views/'.$param.'.html')){
        viewHtml($param);
    }else{
        viewHtml('404');
    }
    viewHtml('footer');
});

// echo '<pre>';
 //print_r($route);
