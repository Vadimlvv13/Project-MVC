<?php

namespace lib;

use PDO;

class Db {
    public function __construct() {
        $config = require 'config/db.php';
        $this->db = new PDO('mysql:host='.$config[host].';dbname='.$config[name].'', $config[user], $config[password]);
    }
}


?>