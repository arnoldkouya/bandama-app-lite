<?php

namespace App\Controller;


class HomeController extends \App\Controller {

    public function indexAction() {
        $this->render('home:index.php');
    }

    public function helloAction($name) {
        $this->render('home:hello.php', array('name' => $name));
    }
}