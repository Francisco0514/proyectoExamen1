@extends('layouts.plantilla')

@section('title','PanelEstudiante')

@section('estilos')
    <link rel="stylesheet" href="{{ asset('css/panelMenu.css') }}">   
@endsection
    
@section('content')
    <ul class="menu">
        <p><strong>Usuario: {{auth()->user()->usuario}}</strong></p>
        <li class="navegacion"><a href="{{route('login.destroy')}}">Cerrar sesion</a></li>
        <li class="navegacion"><a href="{{route('panel.docente')}}">Inicio</a></li>
    </ul>
    <h1>REPORTE DE ALUMNOS</h1>
    <ul>
       @foreach ($reportes as $reporte)
        <p class="reportes">Usuario: {{$reporte->usuario}}</p><br>
        <p class="reportes">Intentos: {{$reporte->intentos}}</p><br>
        <p class="reportes">Promedio General: {{$reporte->promedioGeneral}}</p><br>
        <p>**********************************************</p><br>
       @endforeach 
    </ul>
    
@endsection