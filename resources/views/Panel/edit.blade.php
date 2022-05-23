@extends('layouts.plantilla')

@section('title','EditarUsuario')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">   
@endsection
    
@section('content')
<div class="contenedor">
    <h1>Editar Usuario</h1>
    <form action="{{route('panelE.editar', auth()->user()->id )}}" method="POST">
        
        @csrf
        @method('put')
        <input type="text" name="nombre" placeholder="Nombre" value="{{auth()->user()->nombre}}"><br>
        <input type="text" name="usuario" placeholder="Usuario" value="{{auth()->user()->usuario}}"><br>
        <input type="email" name="email" placeholder="Email" value="{{auth()->user()->email}}"><br>
        <input type="text" name="tipoUsuario" placeholder="Tipo de Usuario" value="{{auth()->user()->tipoUsuario}}"><br>
        <input type="text" name="sexo" placeholder="Sexo" value="{{auth()->user()->sexo}}"><br>
        @if (auth()->user()->tipoUsuario == 'docente' || auth()->user()->tipoUsuario == 'Docente' || auth()->user()->tipoUsuario == 'DOCENTE')
            <button><a href="{{route('panel.docente')}}" class="cancelar">Cancelar</a></button>       
        @endif
        @if (auth()->user()->tipoUsuario == 'estudiante' || auth()->user()->tipoUsuario == 'Estudiante' || auth()->user()->tipoUsuario == 'ESTUDIANTE')
            <button><a href="{{route('panel.estudiante')}}" class="cancelar">Cancelar</a></button>
        @endif
        
        <button type="submit">Actualizar</button>
    </form>
</div>
    
@endsection