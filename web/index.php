<?php

namespace app\web;
require __DIR__ . '/../lib/dev.php';

use app\core\Router;

spl_autoload_register(function($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router;

//debug();

//echo 'Hello!';

?>