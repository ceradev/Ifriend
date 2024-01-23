<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">IFriend</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{$router->generate('index')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{$router->generate('user_list')}}">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      @if(isset($_SESSION['id']))
      <span class="m-2">{{$_SESSION['name']}}</span>
      <a class="nav-link" href="{{$router->generate('logout')}}">Log out</a>
      @else
      <form class="d-flex" role="login" method="post" action="{{$router->generate('login')}}">
        <input class="form-control me-2" type="search" placeholder="User" name="name">  
        <input class="form-control me-2" type="password" placeholder="Password" name="password">  
        <button class="btn btn-outline-success" type="submit">Login</button>
      </form>
      @endif
    </div>
  </div>
</nav>