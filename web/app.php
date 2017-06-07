<?php

// Timezone
date_default_timezone_set('UTC');

// Autoloading
require_once(__DIR__.'/../vendor/autoload.php');

// App Logic
$app = \App\App::getInstance(__DIR__.'/../app/config/settings.php', \App\App::APP_MODE_PROD);
$app->run();
