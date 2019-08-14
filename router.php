<?php

use App\Controllers\About;

$route->add('/', 'Home@test');
$route->add('home/category', 'Home@pagination');
$route->add('home/category/.+', 'Home@pagination');
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

$route->add('/contact', 'Contact@index');
$route->add('contact/send', 'Contact@send');
$route->add('/contact/test', 'Contact@test');

/*----------------test------------------------------------*/

$route->add('/search', function(){
    echo '<form action="/search-results" method="POST">
        <input type="text" name="query" placeholder="Search for something...">
        <input type="submit" value="Search">
    </form>';
});
$route->add('search-results', function(){
    echo 'Search results for '.$_POST['query'];
});

/*-------------------ANONYMOUS-----------------------------------------*/

$route->add('/foo/.+/bar/.+', function($first, $second){
    view1('pages/foo', [$first, $second]);
});
$route->add('/foo/.+', function($foo){
    view1('pages/foo', [$foo]);
});
$route->add('/foo', function(){
    view1('pages/foo');
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
