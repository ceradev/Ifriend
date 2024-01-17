@extends('layouts.master')

@section('title', 'IFriend - Amigo Invisible')

@section('subtitle', 'Listado de Usuarios')

@section('container')


<h5>Bienvenido usuarios</h5>

<table class="w- table table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
    <th scope="col">Nombre</th>
    <th scope="col">Mail</th>
    <th scope="col">Fecha de Creacion</th>
    <th scope="col">Fecha de actualiazación</th>
    <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
  <tr>
    <th scope="row">{{ $user->id }}</th>
    <td scope="row">{{ $user->name }}</td>
    <td scope="row">{{ $user->mail  }}</td>
    <td scope="row">{{ $user->create_at}}</td>
    <td scope="row">{{ $user->update_at}}</td>
    <td>
    <a href="{{$router->generate('user_delete', ['id' => $user->id])}}">  
      <button type="button" class="btn btn-danger">Borrar</button>
    </a>
    </td>
  </tr>
  @endforeach
</tbody>
</table>


@endsection