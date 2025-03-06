@extends('layouts/main')

@section('titulo_pagina', 'Inicio')

@section('css')
    @vite('resources/css/sidebar.css')
@endsection

@section('sidebar')
    @include('modules.partial.sidebar')
@endsection

@section('contenido')
    @switch($rol)
        @case('contador')
            @include('modules.partial.prueba_contador')
            @break
        @case('administrador')
            @include('modules.partial.prueba_administrador')
            @break
        @case('caja')
            @include('modules.partial.prueba_caja')
            @break
        @default
    @endswitch
@endsection