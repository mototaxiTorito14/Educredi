@extends('layouts/main')

@section('titulo_pagina', 'Iniciar Sesión')
@section('css')
    <!-- Cargar solo el CSS de la vista home -->
    @vite(['resources/css/login.css'])

@section('contenido')
    <div class="container">
      <h1 class="hola">EDUCREDI RURAL S.A DE C.V</h1>
    </div>

    <div class="container-login">
        <div class="login">
            <div class="login-image">
                <img src="{{asset('img/logoeducredi.jpeg')}}" alt="User Icon">
            </div>
            <div class="login-form">
                <h2>Iniciar Sesión</h2>
                <form id="loginForm">
                    <div class="user">
                        <div class="input-group">
                            <label for="email">
                                <span class="icon">📧</span>
                                <input type="email" id="email" placeholder="Email" required>
                                <span class="error-message" id="emailError">!</span>
                            </label>
                        </div>
                        <div class="input-group">
                            <label for="password">
                                <span class="icon">🔒</span>
                                <input type="password" id="password" placeholder="Password" required>
                                <span class="error-message" id="passwordError">!</span>
                            </label>
                        </div>
                        <button type="submit" class="login-button">LOGIN</button>
                    </div>
                    
                </form>
               
            </div>
        </div>
    </div>

    {{-- <div class="row">
            <div class="col">
                <div class="card mt-4">
                    <div class="card-body text-start">
                        <h2 class="text-center">Login</h2>
                        <form action="" method="post">
                            @csrf
                            
                            <!-- Campo de Correo -->
                            <label for="email">Correo</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}">

                            <!-- Mensaje de error para el correo -->
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            <!-- Campo de Contraseña -->
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">

                            <!-- Mensaje de error para la contraseña -->
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                       

                            <button class="btn btn-primary mt-4">Iniciar Sesión</button>
                            <a href="" class="btn btn-info mt-4">Regístrate aquí</a>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}



@endsection
