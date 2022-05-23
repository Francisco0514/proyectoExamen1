@extends('layouts.plantilla')

@section('title','PanelEstudiante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/examen.css') }}">   
@endsection
    
@section('content')
    <ul class="menu">
        <p><strong>Usuario: {{auth()->user()->usuario}}</strong></p>
        <li class="navegacion"><a href="{{route('login.destroy')}}">Cerrar sesion</a></li>
        <li class="navegacion"><a href="{{route('panel.docente')}}">Inicio</a></li>
    </ul>
    <h3>Pregunta</h3>
    <form action="{{route('examen.store')}}" method="POST">
        @csrf
        <p class="textExamen">Pregunta</p><br>
        <input type="text" class="Pregunta" name="pregunta"><br>
        <p class="textExamen">Opcion 1</p><br>
        <input type="text" class="opciones" name="opcion1"><br>
        <p class="textExamen">Opcion 2</p><br>
        <input type="text" class="opciones" name="opcion2"><br>
        <p class="textExamen">Opcion 3</p><br>
        <input type="text" class="opciones" name="opcion3"><br>
        <p class="textExamen">Respuesta</p><br>
        <input type="text" class="opciones" name="respuesta"><br>
        <button type="submit">Guardar</button>
    </form>

@endsection