<?php
namespace App\Core;

class Route
{
    private $_uri = [];
    private $_method = [];

    public static function load($file)
    {
        $route = new static;
        require $file;
        return $route;
    }

    public function add($uri, $method = null)
    {
        $this->_uri[] = trim($uri, "/");
        if ($method != null) {
            $this->_method[] = $method;
        }
    }

    public function submit($request)
    {
        $params = [];

        foreach ($this->_uri as $key => $value) {
            if(preg_match("#^$value$#", $request)){

                $realUri = explode('/', $request);
                $ourUri = explode('/', $value);

                foreach ($ourUri as $ourKey => $ourValue){
                    if ($ourValue == '.+'){
                        $params[] = $realUri[$ourKey];
                    }
                }

                if (is_string($this->_method[$key])) {
                    $call = explode('@', $this->_method[$key]);
                    return @call_user_func_array(["App\\Controllers\\{$call[0]}", $call[1]], $params);
                }

                return call_user_func_array($this->_method[$key], $params);
            }
        }
    }
    /**
     * @param  [type] $controller [description]
     * @param  [type] $action     [description]
     * @return return $this->callAction(...explode('@', $this->_method[$key]));
     */
    // private function callAction($controller, $action)
    // {
    //     $controller = "App\\Controllers\\{$controller}";
    //     $controller = new $controller;
    //     if(! method_exists($controller, $action)){
    //         throw new Exception("{$controller} does not respond to the {$action} action");
    //     }
    //     return $controller->$action();
    // }
}
