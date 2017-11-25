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
        // return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        return trim(substr($_SERVER['REQUEST_URI'], strlen(SITE_ROOT) + 1), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
