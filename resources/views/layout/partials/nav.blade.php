<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>
                <li class="submenu">
                    <a href="{{ route('home') }}"><span class="menu-side"><img src="{{asset('/assets/img/icons/menu-icon-01.svg')}}"
                                alt=""></span> <span> Dashboard </span></a>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{asset('/assets/img/icons/call-icon-02.svg')}}"
                                alt=""></span> <span> Usuarios </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="{{ route('usuarios') }}">Lista de Usuarios</a></li>
                        <li><a href="{{ route('usuarionuevo') }}">Nuevo Usuario</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{asset('/assets/img/icons/menu-icon-03.svg')}}"
                                alt=""></span> <span> Roles </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Vista General</a></li>
                        <li><a href="#">Nuevo Rol</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#"><span class="menu-side"><img src="{{asset('/assets/img/icons/call-icon-03.svg')}}"
                                alt=""></span> <span> Sucursales </span> <span class="menu-arrow"></span></a>
                    <ul style="display: none;">
                        <li><a href="#">Vista General</a></li>
                        <li><a href="#">Nueva Sucursal</a></li>
                    </ul>
                </li>
            </ul>
            <div class="logout-btn">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><span
                        class="menu-side"><img src="{{asset('/assets/img/icons/logout.svg')}}" alt=""></span>
                    <span>Cerar Sesi&oacute;n</span></a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</div>
