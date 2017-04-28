<?php

namespace App;

use \Bandama\Foundation\Router\Router;
use \Bandama\Foundation\Session\PDOSessionHandler;
use \Bandama\Foundation\Session\Session;
use \Bandama\Foundation\Database\Connection;


/**
 * Implements Bandama application logic
 *
 * @package App
 * @version 1.1.0
 * @since 1.1.0 Moving application setup method of App class from constructor to getInstance method
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


    // Constants
    const SESSION_HANDLER_DEFAULT = 'default';
    const SESSION_HANDLER_PDO = 'pdo';

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
    }


    // Overrides
    /**
     * Set application parameters
     *
     * @return void
     */
    protected function setParameters() {
        // Setting baseUri
        if ($this->config->get('app_base_uri')) {
            $this->baseUri = $this->config->get('app_base_uri');
        }
    }
    
    /**
     * Create and add config object to container
     *
     * @return void
     */
    protected function registerConfig() {
        $this->config = new Configuration($this->configFile);
        $config = $this->config;

        $this->container->set('config', function() use ($config) {
            return $config;
        });
    }

    /**
     * Create and add router component to container
     *
     * @return void
     */
    protected function registerRouter() {
        $config = $this->get('config');
        
        $this->container->set('router', function () use ($config) {
            $router = new Router();
            include($config->get('routes'));

            return $router;
        });
        
    }

    /**
     * Create and add services to container
     *
     * @return void
     */
    protected function registerServices() {
        // Injecting services container
        $services = $this->config->get('services');
        if (count($services) > 0) {
            foreach($services as $key => $value) {
                $this->container->set($key, function() use ($value) {
                    return $value;
                });
            }
        }
    }

    /**
     * Create and add logger object to container
     *
     * @return void
     */
    protected function registerLogger() {
        // Create the logger
        $logger = new \Monolog\Logger('app_logger');
        // Now add some handlers (StreamHandler)
        $logger->pushHandler(new \Monolog\Handler\StreamHandler(__DIR__.'/..'.$this->config->get('app_log'), \Monolog\Logger::DEBUG));

        $this->container->set('logger', function() use($logger) {
            return $logger;
        });
    }

    /**
     * Create and add session to container
     *
     * @return void
     */
    protected function registerSession() {
        $sessionParams = $this->config->get('sessions');
        $session = new Session();

        if (strcmp($sessionParams['handler'], self::SESSION_HANDLER_DEFAULT) == 0) {
            $this->container->set('session', function() use ($session) {
                $session->start();

                return $session;
            });
        } elseif (strcmp($sessionParams['handler'], self::SESSION_HANDLER_PDO) == 0) {
            $databases = $this->config->get('databases');

            $this->container->set('session', function() use ($session, $sessionParams, $databases) {
                
                $connection = new Connection($databases[$sessionParams['parameters']['database']]);
                $handler = new PDOSessionHandler($connection, $sessionParams['parameters']);
                $session = new Session();
                $session->start(null, null, $handler);

                return $session;
            });
        } else {
            throw new Exception("Session handler not defined", 1);
        }
    }


    // Public Methods
    /**
     * Initialize and return App uniq instance
     *
     * @param array $configFile Application configuration file
     * @param string $mode Application running mode (dev, preprod, prod, etc.)
     *
     * @return App
     */
    public static function getInstance($configFile = null, $mode = self::APP_MODE_PROD) {
        if (is_null(self::$_instance)) {
            self::$_instance = new self($configFile, $mode);
            self::$_instance->setup();
            self::$_instance->setParameters();
            self::$_instance->registerServices();
            self::$_instance->registerLogger();  
        }

        return self::$_instance;
    }
}