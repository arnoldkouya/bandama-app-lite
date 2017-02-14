<?php

namespace App\Controller;


class HomeController extends BaseController {

    public function indexAction() {
        $this->render(__DIR__.'/../views/home/index.php');
    }

    public function helloAction($name) {
        $this->render(__DIR__.'/../views/home/hello.php');
    }
}
