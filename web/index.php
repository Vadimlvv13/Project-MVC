<?php

namespace Web;
require __DIR__ . '/../lib/dev.php';

use \Core\Router;

spl_autoload_register(function($class) {
    echo $path.'<br>';
    $path = str_replace('\\', '/', "/../" . $class . '.php');
    echo $path;
    if (file_exists($path)) {
        require $path;
    }
});

$router = new Router;

//debug();

//echo 'Hello!';

?>