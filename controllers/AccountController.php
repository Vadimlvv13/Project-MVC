<?php

namespace controllers;

use core\Controller;

class AccountController extends Controller {
    
    public function loginAction() {
        $this->view->render('Вхід');
    }

    public function registerAction() {
        $this->view->render('Реєстрація');
    }
}

?>