<?php

namespace App\Controller;


class HomeController extends \App\Controller {

    public function indexAction() {
        //$this->logger->info('Home page');
        $this->render('home:index.php');
    }

    public function helloAction($name) {
        //$this->logger->info("Hello page : name = $name");
        $this->render('home:hello.php', array('name' => $name));
    }
}