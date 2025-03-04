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
        @if(Auth::check() && Auth::user()->rol === 'administrador')
        <li><a href="{{ route('home') }}"><i class="fa-solid fa-hotel"></i> <span>Inicio</span></a></li>
            <li><a href="../admin/check.php"><i class="fa-regular fa-pen-to-square"></i> <span>Check-In<br>Check-Out</span></a></li>
            <li><a href="../admin/caja.php"><i class="fa-solid fa-coins"></i> <span>Caja Diaria</span></a></li>

        @endif

        <!-- Menú exclusivo para caja -->
        @if(Auth::check() && Auth::user()->rol === 'caja')
        <li><a href="{{ route('home') }}"><i class="fa-solid fa-hotel"></i> <span>Inicio</span></a></li>
            <li><a href="../admin/caja.php"><i class="fa-solid fa-coins"></i> <span>Caja Diaria</span></a></li>
            <li><a href="../admin/reservas.php"><i class="fa-solid fa-calendar-check"></i> <span>Reservas</span></a></li>
            
        @endif

        <!-- Menú exclusivo para contador -->
        @if(Auth::check() && Auth::user()->rol === 'contador')
        <li><a href="{{ route('home') }}"><i class="fa-solid fa-hotel"></i> <span>Inicio</span></a></li>
            <li><a href="../admin/caja.php"><i class="fa-solid fa-coins"></i> <span>Caja Diaria</span></a></li>
            <li><a href="../admin/empleados.php"><i class="fa-solid fa-user-tie"></i> <span>Empleados</span></a></li>
        @endif

        <!-- Línea divisoria -->
            
            <!-- Opción de cerrar sesión visible para todos -->
    </ul>
    <li class="cerrarsesion" id="cerrarsesion">
        <hr class="separate-line">

        <a href="">
            <i class="fa-solid fa-right-to-bracket"></i><span>Cerrar Sesión</span>
        </a>
    </li>
</div>
