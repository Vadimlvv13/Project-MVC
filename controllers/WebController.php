<?php

namespace controllers;

use core\Controller;

class WebController extends Controller {
    
    public function indexAction() {
        $this->view->render('Головна сторінка');
        //echo 'Домашня сторінка';
    }

}

?>