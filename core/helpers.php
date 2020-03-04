<?php

use Philo\Blade\Blade;

function view($view, $data = [])
{
    $views = APP_PATH . '/views';
    $cache = APP_PATH . '/cache';

    $blade = new Blade($views, $cache);
    echo $blade->view()->make($view, $data)->render();
}
/**
 * [viewHtml description]
 * @param  [type] $name of the html page
 * @return [type] page
 */
function viewHtml($name)
{
    return require APP_PATH."/views/html/{$name}.html";
}
/**
 * use TPL kind of templating
 * @param  [type] $name [description]
 * @return [type]       [description]
 */
function inc($name)
{
    return require APP_PATH."/views/tpl/{$name}.tpl.php";
}

function view1($view, $data = [], $yield = 'content', $template = 'app')
{
    extract($data);
    ob_start();
    include(APP_PATH."/views/tpl/$view.tpl.php");
    $GLOBALS[$yield] = ob_get_contents();
    @ob_end_clean();
    return include(APP_PATH."/views/tpl/layouts/$template.tpl.php");
}

function output($var="")
{
    if(isset($GLOBALS[$var])){
        print $GLOBALS[$var];
    }elseif(empty($var) && isset($GLOBALS['output'])){
        print $GLOBALS['output'];
    }
}

function redirect($path = '')
{
    header("Location: /{$path}");
}

//already in vendor/illuminate/support/helpers.php

// function env($var, $default = null)
// {
//     if (!isset($var) && isset($default)) {
//         return $default;
//     }
//     return $_ENV[$var];
// }

// function dd($var)
// {
//     echo '<pre>';
//     die(print_r($var));
//     echo '</pre>';
// }
