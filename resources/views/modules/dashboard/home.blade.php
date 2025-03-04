@extends('layouts/main')
@section('titulo_pagina', 'Inicio')
@section('css')
    @vite('resources/css/sidebar.css')
@section('sidebar')
    @include('modules.partial.sidebar')

@endsection