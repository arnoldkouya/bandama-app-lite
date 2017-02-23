<?php

namespace App;

use \Monolog\Logger;
use \Monolog\Handler\StreamHandler;


/**
 * Implements Bandama application logic
 *
 * @package App
 * @author Jean-François YOBOUE <yoboue.kouamej@live.fr>
 * @version 1.0.0
 * @since 1.0.0 Class creation
 */
class App extends \Bandama\App {
    // Fields
    /**
     * @var \Bandama\Configuration Application configuration parameters
     */
    protected $config;

    /**
     * @var \Bandama\Foundation\Router\Router Routing component
     */
    protected $router;

    /**
     * @var 
     */
    protected $logger;

    // Constructors
    /**
     * Constructor
     *
     * @param string $configFile Configuration file
     * @param string $mode Execution mode of application
     *
     * @return void
     */
    protected function __construct($configFile = null, $mode = self::APP_MODE_PROD) {
        parent::__construct($configFile, $mode);
        
        $config = $this->get('config');
        $router = $this->get('router');

        include($config->get('routes'));

        $this->config = $config;
        $this->router = $router;

        // Setting baseUri
        if ($config->get('app_base_uri')) {
            $this->baseUri = $config->get('app_base_uri');
        }

        // Injecting services container
        $services = $this->config->get('services');
        if (count($services) > 0) {
            foreach($services as $key => $value) {
                $this->container->set($key, function() use ($value) {
                    return $value;
                });
            }
        }

        // Create the logger
        $logger = new Logger('app_logger');
        // Now add some handlers (StreamHandler)
        $logger->pushHandler(new StreamHandler(__DIR__.'/..'.$this->config->get('app_log'), Logger::DEBUG));

        $this->container->set('logger', function() use($logger) {
            return $logger;
        });
    }


    // Public Methods
    /**
     * Initialize and return App uniq instance
     *
     * @param array $configFile Application configuration file
     *
     * @return App
     */
    public static function getInstance($configFile = null, $mode = self::APP_MODE_PROD) {
        if (is_null(self::$_instance)) {
            self::$_instance = new self($configFile, $mode);
        }

        return self::$_instance;
    }
}