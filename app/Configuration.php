<?php

namespace App;

/**
 * Base Configuration class
 *
 * @package App
 * @version 1.0.0
 * @since 1.0.0 Class creation
 */
class Configuration extends \App\Core\Configuration {
    // Constructors
    /**
     * Constructor
     *
     * @param string $configFile Path of configuration file
     *
     * @return void
     */
    public function __construct($configFile) {
        parent::__construct($configFile);
    }
}