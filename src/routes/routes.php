<?php

use Dsw\Ifriend\Controllers\LoginController;

$router->map('GET', '/', 'DefaultController#index', 'index');
$router->map('POST', '/login', 'LoginController#validate', 'login');
$router->map('GET', '/logout', 'LoginController#logout', 'logout');


if (isset($_SESSION['id'])) {
  $router->map('GET', '/users/list', 'UserController#list', 'user_list');
  $router->map('GET', '/users/[i:id]/delete', 'UserController#delete', 'user_delete');
  $router->map('GET', '/users/create', 'UserController#create', 'user_create');
  $router->map('POST', '/users', 'UserController#post', 'user_post');
  $router->map('GET', '/users/[i:id]', 'UserController#edit', 'user_edit');
  $router->map('POST', '/users/[i:id]', 'UserController#update', 'user_update');

  $router->map('GET', '/game', 'GameController#index', 'game_index');
  $router->map('POST', '/game', 'GameController#post', 'game_post');

  $router->map('GET', '/usergame', 'UserGameController#index', 'usergame_index');
}
