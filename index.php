<?php

namespace web;
require __DIR__ . '/lib/dev.php';

use core\Router;

spl_autoload_register(function($class) {
    echo $path.'<br>';
    $path = str_replace('\\', '/', $class . '.php');
    echo $path;
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router;

//debug();

//echo 'Hello!';

?>