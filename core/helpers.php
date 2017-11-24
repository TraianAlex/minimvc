<?php
/**
 * [viewHtml description]
 * @param  [type] $name the name of the html page
 * @return [type] page
 */
function viewHtml($name)
{
    return require APP_PATH."/views/html/{$name}.html";
}

function inc($name)
{
    return require APP_PATH."/views/{$name}.tpl.php";
}

function view($view, $data = [], $yield = 'content', $template = 'app')
{
    extract($data);
    ob_start();
    include(APP_PATH."/views/$view.tpl.php");
    $GLOBALS[$yield] = ob_get_contents();
    @ob_end_clean();
    return include(APP_PATH."/views/layouts/$template.tpl.php");
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
    header("Location: ".SITE_ROOT."/{$path}");
}

function dd($var)
{
    echo '<pre>';
    die(print_r($var));
    echo '</pre>';
}
