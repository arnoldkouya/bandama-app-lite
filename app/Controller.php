<?php

namespace App;

/**
 * Controller class
 *
 * @package App
 * @version 1.0.0
 * @since 1.0.0 Class creation
 */
class Controller extends \Bandama\Foundation\Controller\Controller {
    // Fields
    /**
     * @var \App\App Base App class
     */
    protected $app;

    /**
     * @var \App\Configuration Configuration management component
     */
    protected $config;

    /**
     * @var \Bandama\Foundation\Router\Router Routing management component
     */
    protected $router;

    /**
     * @var \Bandama\Foundation\Session\Session
     */
     protected $session;

    /**
     * @var \Monolog\Logger Logging component
     */
     protected $logger;

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
        $this->session = $this->app->get('session');
        $this->logger = $this->app->get('logger');
        $this->viewPath = __DIR__.'/..'.$this->config->get('view_path');
    }

    // Protected Methods
    /**
     * @see \App\Foundation\Controller\Controller::url
     */
    protected function generateUrl($name, $params = array()) {
        return $this->config->baseUrl.'/'.$this->router->url($name, $params);
    }
}