<header>
    <nav class="navbar">
        <div class="contenerdor-navbar">
            <i class="fa-solid fa-bars" id="menu-toggle"></i>
        </div>
    </nav>
</header>

<div class="sidebar">
    <img src="{{ asset('img/logoeducredi.jpeg') }}" alt="Logo" class="logo-img">
    <h3 class="logo-text">EDUCREDI RURAL
        S.A DE C.V</h3>
        <hr class="separate-line">


    <ul class="menu">
        <!-- Menú principal que aparece para todos los usuarios -->

        <!-- Menú exclusivo para el administrador -->
        @if (Auth::check())
            @switch(Auth::user()->rol)
                @case('administrador')
                    <li class="menu-item menu-item-static"><a href="" class="menu-link"><i class="fa-solid fa-hotel"></i>
                            <span>Inicio</span></a></li>
                    <li class="menu-item menu-item-static"> <a href="" class="menu-link"><i class="fa-regular fa-pen-to-square"></i>
                            <span>Check-In<br>Check-Out</span></a>
                    </li>
                    <li class="menu-item menu-item-static"><a href="" class="menu-link"><i class="fa-solid fa-coins"></i> <span>Caja
                                Diaria</span></a></li>
                @break

                @case('caja') 
                    <li class="menu-item menu-item-static"><a href="" class="menu-link"><img src="{{asset('img/icon-caja.svg')}}" alt=""><span>Caja</span></a>
                    </li>
                    <li class="menu-item menu-item-dropdown">
                        <a href="#" class="menu-link"><img src="{{asset('img/icon-prestamo.svg')}}" alt=""><span>Prestamos</span> <span class="arrow">></span></a>

                        <ul class="sub-menu">
                            <li><a href="#" class="sub-menu-link">klk</a></li>
                            <li><a href="#" class="sub-menu-link">klk</a></li>
                            <li><a href="#" class="sub-menu-link">klk</a></li>

                        </ul>
                    </li>

                    <li class="menu-item menu-item-static"><a href="" class="menu-link"> <span>Caja
                                diaria</span></a></li>
                @break
                @case('contador') 
                    <li class="menu-item menu-item-static"><a href="{{route('contador')}}" class="menu-link"><img src="{{asset('img/icon-clientes.svg')}}" alt=""><span>Clientes</span></a>
                    </li>
                    <li class="menu-item menu-item-dropdown">
                        <a href="javascript:void(0);" class="menu-link"><img src="{{asset('img/icon-prestamo.svg')}}" alt=""><span>Prestamos</span> <span class="arrow">></span></a>

                        <ul class="sub-menu">
                            <li><a href="" class="sub-menu-link">Grupos</a></li>
                            <li><a href="#" class="sub-menu-link">klk</a></li>
                            <li><a href="#" class="sub-menu-link">klk</a></li>

                        </ul>
                    </li>

                    <li class="menu-item menu-item-static"><a href="" class="menu-link"> <span>Caja
                                diaria</span></a></li>
                @break
            @endswitch
        @endif

        <!-- Línea divisoria -->

        <!-- Opción de cerrar sesión visible para todos -->
    </ul>
    <li class="menu-item menu-item-static" id="cerrarsesion">
        <hr class="separate-line">

        <a  class="menu-link" href="{{ route('logout') }}" >
            <img src="{{asset('img/icon-cerrarsesion.svg')}}" alt=""><span>Cerrar Sesión</span>
        </a>
    </li>
</div>
