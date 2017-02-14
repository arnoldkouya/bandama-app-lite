<?php

$router->get('/', 'App:Controller:Home#index', 'home');
$router->get('/hello/:name', 'App:Controller:Home#hello', 'hello');