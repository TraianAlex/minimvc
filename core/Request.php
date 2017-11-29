<?php

namespace App\Core;

class Request
{
    /**
     * development different than production on some servers
     * @return the first line on production server
     */
    public static function uri()
    {
      if(env(APP_ENV) === 'production'){
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
      }
      return trim(substr($_SERVER['REQUEST_URI'], strlen(SITE_ROOT) + 1), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public function get()
    {
      $num_args = func_num_args();
      $vars = [];

       if ($num_args >= 1) {
           $method = self::method();

           if (($method != 'SESSION') && ($method != 'GET') && ($method != 'POST') && ($method != 'SERVER') && ($method != 'COOKIE') && ($method != 'ENV')) {
               throw new Exception('The first argument of pt_register must be one of the following: GET, POST, SESSION, SERVER, COOKIE, or ENV');
           }
           switch ($method) {
             case 'POST':
               $vars = $_POST;
               break;
             case 'GET':
               $vars = $_GET;
               break;
             case 'SESSION':
               $vars = $_SESSION;
               break;
             case 'SERVER':
               $vars = $_SERVER;
               break;
             case 'COOKIE':
               $vars = $_COOKIE;
               break;
             case 'ENV':
               $vars = $_ENV;
               break;
             default:
               $vars = $_POST;
               break;
           }

           for ($i = 0; $i < $num_args; $i++) {
               $parameter = func_get_arg($i);
               $items[] = $vars[$parameter];
           }
           return $items;
       } else {
          throw new Exception('You must specify at least one arguments');
       }
    }
}
