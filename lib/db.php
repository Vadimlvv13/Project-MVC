<?php

namespace lib;

class Db {
    public function __construct() {
        $config = require 'config/db.php';
        debug($config);
    }
}


?>