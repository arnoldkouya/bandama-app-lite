<?php 

namespace App;

/**
 * Implements Base Bandama application logic
 *
 * @package App
 * @version 1.1.0
 * @since 1.0.0 Class creation
 */
class App extends \App\Core\App {
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
}