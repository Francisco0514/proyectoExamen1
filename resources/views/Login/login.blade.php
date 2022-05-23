@extends('layouts.plantilla')

@section('title','Login')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">   
@endsection
    
@section('content')
    <div class="contenedor">
        <h1>LOGIN</h1>
        <form action="{{route('login.validar')}}" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Correo"><br>
            <input type="password" name="password" placeholder="Contraseña"><br>
            <br>
            <a href="{{route('registro')}}">Registrarse</a><br>
            <button type="submit">LOGIN</button>
        </form>
    </div>
    
   
@endsection