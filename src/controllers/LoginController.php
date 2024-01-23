<?php


namespace Dsw\Ifriend\Controllers;
use Dsw\Ifriend\Models\User;


require_once('../src/connection.php');

class LoginController extends Controller{
  public function validate() {
    $user = User::where([
      ['name', $_POST['name']],
      ['password', $_POST['password']]
    ])->first();

    if($user){
      $_SESSION['id'] = $user->id;
      $_SESSION['name'] = $user->name;
    }
    header("Location: /");
  }

  public function logout(){
    session_destroy();
    header("Location: /");
  }
}
