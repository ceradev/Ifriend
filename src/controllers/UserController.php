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

  public function edit($params) {

    $user = User::find($params['id']);

    echo $this->blade->make('users.edit', ["user" => $user, "router" => $this->router])->render();
  }

  public function update($params) {
    $user = User::find($params['id']);

    $user->name = $_POST['name'];

    $user->email = $_POST['email'];

    $user->password = $_POST['password'];

    $user->save();

     // Mensaje de depuración
     //echo "Usuario actualizado correctamente.";

    header("Location: /users/list");
  }

  public function post() {
    //var_dump($_POST);

    $user = new User(); 

    $user->name = $_POST['name'];

    $user->email = $_POST['email'];

    $user->password = $_POST['password'];

    $user->save();

    header("Location: /users/list");
  }
}
