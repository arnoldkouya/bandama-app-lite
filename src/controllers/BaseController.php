<?php

namespace App\Controller;

use Bandama\Foundation\Controller\Controller;


class BaseController extends Controller {
    // Fields
    protected $app;
    protected $config;
    protected $router;

    // Constructor
    /**
     * Default constructor
     *
     * @return void
     */
    public function __construct() {
        $this->app = \App\App::getInstance();
        $this->config = $this->app->get('config');
        $this->router = $this->app->get('router');
        $this->viewPath = __DIR__.'/../..'.$this->config->get('view_path');
    }

    // Protected Methods
    /**
     * @see \App\Foundation\Controller\Controller::url
     */
    protected function generateUrl($name, $params = array()) {
        return $this->config->baseUrl.'/'.$this->router->url($name, $params);
    }
}