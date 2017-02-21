<?php

$settings = array(
    'databases' => require(__DIR__.'/databases.php'),
    'routes' => __DIR__.'/routes.php',
    'services' => require(__DIR__.'/services.php')
);

return array_merge(require(__DIR__.'/parameters.php'), $settings);