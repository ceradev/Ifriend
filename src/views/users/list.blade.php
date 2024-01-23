@extends('layouts.master')

@section('title', 'IFriend - Amigo Invisible')

@section('subtitle', 'Listado de Usuarios')

@section('container')


    <h5>Bienvenido usuarios</h5>

    <a href="{{ $router->generate('user_create') }}" class="btn btn-primary">Crear nuevo usuario</a>

    <table class="w- table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Fecha de Creacion</th>
                <th scope="col">Fecha de actualización</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td scope="row">{{ $user->name }}</td>
                    <td scope="row">{{ $user->email }}</td>
                    <td scope="row">{{ $user->password }}</td>
                    <td scope="row">{{ $user->created_at }}</td>
                    <td scope="row">{{ $user->updated_at }}</td>
                    <td>
                        <a href="{{ $router->generate('user_edit', ['id' => $user->id]) }}">
                            <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                            <a href="{{ $router->generate('user_delete', ['id' => $user->id]) }}">
                                <button type="button" class="btn btn-danger">Borrar</button>
                            </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
