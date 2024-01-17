<?php

$router->map('GET', '/', 'DefaultController#index', 'index');
$router->map('GET', '/users/list', 'UserController#list', 'user_list');
$router->map('GET', '/users/[i:id]/delete', 'UserController#delete', 'user_delete');
$router->map('GET', '/users/create', 'UserController#create', 'user_create');
$router->map('POST', '/users', 'UserController#post', 'user_post');