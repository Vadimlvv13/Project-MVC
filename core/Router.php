<?php

namespace core;

class Router {
    protected $routes = [];
    protected $params = [];

    public function __construct() {
        $arr = require 'config/routes.php';
        debug($arr);
    }

    public function add() {
        //
    }

    public function match() {
        //
    }

    public function run() {
        echo 'start';
    }

}

?>