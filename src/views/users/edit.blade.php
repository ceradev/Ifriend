@extends('layouts.master')

@section('title', 'IFriend - Amigo Invisible')

@section('subtitle', 'Edicion del usuario')

@section('container')

    <form method="post" action="{{ $router->generate('user_update', ['id' => $user->id]) }}">
        <div class="mb-3">
            <label for="name" class="form-label">Username</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" value="{{ $user->password }}" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Modify</button>
    </form>
@endsection
