<?php

namespace App;


/**
 * Configuration class
 *
 * @package App
 * @version 1.0.0
 * @since 1.0.0 Class creation
 */
class Configuration extends \Bandama\Configuration {
    // Fields
    /**
     * @var string Application code
     */
    public $appCode;

    /**
     * @var string Application name
     */
    public $appName;

    /**
     * @var int Version code of application
     */
    public $versionCode;

    /**
     * @var string Version name of application
     */
    public $versionName;

    /**
     * @var string Assets directory
     */
    public $assets;

    /**
     * @var string Data directory
     */
    public $data;

    /**
     * @var string Plugins directory
     */
    public $plugins;

    /**
     * @var string Application base URL
     */
    public $baseUrl;


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

        $this->appCode = $this->get('app_code');
        $this->appName = $this->get('app_name');
        $this->versionCode = $this->get('app_version_code');
        $this->versionName = $this->get('app_version_name');
        $this->assets = $this->get('dir_assets');
        $this->data = $this->get('dir_data');
        $this->plugins = $this->get('dir_plugins');
        $this->baseUrl = $this->get('app_base_url');
    }
}