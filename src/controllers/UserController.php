<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once ( '../src/connection.php');

class UserController{
  
  public function index(){
    global $blade;
    $users = User::all();
    // echo '<pre>';
    // print_r($users);
    // echo '</pre>';
    echo $blade->make('users.list', ['users' => $users])->render();
  }
}
