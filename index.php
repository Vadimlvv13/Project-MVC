<?php

namespace web;
require __DIR__ . '/lib/dev.php';

use core\Router;
use lib\db;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router;
$router = new Db;
//debug();

//echo 'Hello!';

?>