<?php

namespace App\controllers;

use Framework\core\Controller;

class IndexController extends Controller {

    function __construct() {
        parent::__construct();
        $this->view->setActive('index');
        $this->view->setTheme('default');
    }

    function index() {
        $this->Redirect('index');
    }

}
