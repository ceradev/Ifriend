<?php

$router->map('GET', '/', 'DefaultController#index', 'default.index');
$router->map('GET', '/user', 'UserController#index', 'user.index');