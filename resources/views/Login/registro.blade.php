@extends('layouts.plantilla')

@section('title','Registro')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">   
@endsection
    
@section('content')
<div class="contenedor">
    <h1>Registro</h1>
    <form action="{{route('registro.store')}}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Nombre"><br>
        <input type="text" name="usuario" placeholder="Usuario"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="password" name="password" placeholder="Contraseña"><br>
        <input type="text" name="tipoUsuario" placeholder="Tipo de Usuario"><br>
        <input type="text" name="sexo" placeholder="Sexo"><br>
        <br>
        <a href="{{route('login')}}">Volver al login</a>
        <button type="submit">Registrarse</button>
    </form>
</div>
    
@endsection