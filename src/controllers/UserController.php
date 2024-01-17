<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once ( '../src/connection.php');

class UserController extends Controller{
  

  public function delete($params) {
    $id = $params["id"];
    $user = User::find($id);
    $user->delete();
    $this->list();
  }

  public function list(){
    // global $router;
    // global $blade;
    $users = User::all();
    
    echo $this->blade->make('users.list', ['users' => $users,"router" => $this->router])->render();
  }

  public function create() {
    
    echo $this->blade->make('users.create', ["router" => $this->router])->render();
  }
}
