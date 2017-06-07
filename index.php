<?php

require(__DIR__.'/vendor/autoload.php');

$app = App\App::getInstance(__DIR__.'/app/config/settings.php', App\App::APP_MODE_DEV);
$app->run();