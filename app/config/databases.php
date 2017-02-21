<?php

return array(
    'default' => array(
        'database_driver' => 'pdo_mysql',
        'database_host' => '127.0.0.1',
        'database_port' => 3306,
        'database_name' => 'bandama',
        'database_user' => 'root',
        'database_password' => '',
        'attributes' => array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
        )
    )
);