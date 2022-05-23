@extends('layouts.plantilla')

@section('title','PanelEstudiante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/panelMenu.css') }}">   
@endsection
    
@section('content')
    <ul class="menu">
        <p><strong>Usuario: {{auth()->user()->usuario}}</strong></p>
        <li class="navegacion"><a href="{{route('login.destroy')}}">Cerrar sesion</a></li>
        <li class="navegacion"><a href="{{route('panelE.edit')}}">Editar Usuario</a></li>
        <li><a href="{{route('panelE.reporte')}}">Reportes Alumnos</a></li>
        <li><a href="{{route('examen.create')}}">Agregar Pregunta</a></li>
    </ul>
    <h1>Examen</h1>
    <ul>
       @foreach ($examenes as $examen)
        <li class="preguntas"><a href="{{route('examen.gestionar', $examen->id)}}">{{$examen->pregunta}}</a></li><br>
       @endforeach 
    </ul>
    

@endsection