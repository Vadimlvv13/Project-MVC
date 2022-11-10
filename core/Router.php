<?php

namespace core;

class Router {
    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }
        //debug($this->routes);
    }

    public function add($route, $params) {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = trim($_SERVER['REQUEST_URI'], '/');
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
                //var_dump($matches);
            }
        }
        return false;
    }

    public function run() {
        if ($this->match()) {
            echo '<p>controller: <b>' . $this->params['controller'] . '</b></p>';
            echo '<p>action: <b>' . $this->params['action'] . '</b></p>';
        } else {
            echo '<H1>ERROR 404: Page not found!</H1>';
        }
        //echo 'start';
    }

}

?>