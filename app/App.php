<?php

namespace App;

/**
 * Implements Bandama application logic
 *
 * @package App
 * @author Jean-François YOBOUE <yoboue.kouamej@live.fr>
 * @version 1.0.0
 * @since 1.0.0 Class creation
 */
class App extends \Bandama\App {
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
    }


    // Public Methods
    /**
     * Initialize and return App uniq instance
     *
     * @param array $configFile Application configuration file
     *
     * @return App
     */
    public static function getInstance($configFile = null, $mode = self::PROD) {
        if (is_null(self::$_instance)) {
            self::$_instance = new self($configFile, $mode);
        }

        return self::$_instance;
    }
}