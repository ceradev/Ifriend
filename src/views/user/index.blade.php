@extends('layouts.master')

@section('title', 'Default Title')

@section('subtitle', 'Default Subtitle')

@section('container')


<h2>Bienvenido usuarios</h2>

<ul>

@foreach ($users as $user)

  <li>{{ $user->name }}</li>
    
@endforeach

</ul>

@endsection