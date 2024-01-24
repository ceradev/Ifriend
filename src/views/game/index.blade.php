@extends('layouts.master')

@section('title', 'Lista de partidas')


@section('container')

    <h5>Bienvenido usuarios</h5>

    <form action="{{$router->generate('game_post')}}" method="post">
    <input type="text" name="name" placeholder="Nombre de partida..">
    <input type="submit" value="Crear nueva partida" class="btn btn-suscess">
    </form>

    <table class="w- table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Administrador</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <th scope="row">{{ $game->id }}</th>
                    <td scope="row">{{ $game->name }}</td>
                    <td scope="row">{{ $game->id_admin }}</td>
                    <td>
                        <a href="{{ $router->generate('user_edit', ['id' => $game->id]) }}">
                            <button type="button" class="btn btn-warning">Editar</button>
                        </a>
                            <a href="{{ $router->generate('user_delete', ['id' => $game->id]) }}">
                                <button type="button" class="btn btn-danger">Borrar</button>
                            </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection