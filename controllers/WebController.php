<?php

namespace controllers;

use core\Controller;
use lib\db;

class WebController extends Controller {
    
    public function indexAction() {
        $db = new Db;
        $this->view->render('Головна сторінка');
        $data = $db->column('SELECT name FROM user WHERE id = 1');
        debug($data);
    }

}

?>