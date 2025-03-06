@extends('layouts/main')
@section('titulo_pagina', 'Caja')
@section('css')
    @vite('resources/css/sidebar.css')
@section('sidebar')
    @include('modules.partial.sidebar')

@endsection

@section('contenido')
<div class="container">
    <div class="main-content">
        <h1>Hola</h1>
        <h1>caja</h1>
        <a href="{{route('logout')}}" class="btn btn-dark my-4 mx-4">Cerrar Sesion</a> 

    </div>
</div>
@endsection