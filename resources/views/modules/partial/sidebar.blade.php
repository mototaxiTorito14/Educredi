<header>
    <nav class="navbar">
        <div class="contenerdor-navbar">
            <i class="fa-solid fa-bars" id="menu-toggle"></i>
        </div>
    </nav>
</header>

<div class="sidebar">
    <img src="{{ asset('img/logoeducredi.jpeg') }}" alt="Logo" class="logo-img">


    <ul>
        <!-- Menú principal que aparece para todos los usuarios -->
   

        <!-- Menú exclusivo para el administrador -->
        @if(Auth::check())
        @switch(Auth::user()->rol)
            @case('administrador')
                <li><a href=""><i class="fa-solid fa-hotel"></i> <span>Inicio</span></a></li>
                <li><a href=""><i class="fa-regular fa-pen-to-square"></i> <span>Check-In<br>Check-Out</span></a></li>
                <li><a href=""><i class="fa-solid fa-coins"></i> <span>Caja Diaria</span></a></li>
                @break
    
            @case('caja')
                <li><a href=""><img src="{{ asset('img/icon-caja.svg') }}" alt=""> <span>Caja</span></a></li>
                <li><a href="{{ route('caja') }}"><i class="fa-solid fa-coins"></i> <span>Caja Diaria</span></a></li>
        
                @break
    
            @case('contador')
                <li><a href=""><i class="fa-solid fa-hotel"></i> <span>Inicio</span></a></li>

                @break
        @endswitch
    @endif

        <!-- Línea divisoria -->
            
            <!-- Opción de cerrar sesión visible para todos -->
    </ul>
    <li class="cerrarsesion" id="cerrarsesion">
        <hr class="separate-line">
        
        <a href="{{route('logout')}}">
            <i class="fa-solid fa-right-to-bracket"></i><span>Cerrar Sesión</span>
        </a>
    </li>
</div>
