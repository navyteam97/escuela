<ul class="navbar-nav ml-auto">
    @guest
    <li class="nav-item">
        <a class="nav-link text-decoration-none text-uppercase" href="{{ route('login') }}">
            <i class="fas fa-sign-in-alt"></i>
            Iniciar sesión
        </a>
    </li> &nbsp;
    @if (Route::has('register'))
    <li class="nav-item">
        <a class="nav-link text-decoration-none text-uppercase" href="{{ route('register') }}">
            <i class="fas fa-user-plus"></i>
            Regístrate
        </a>
    </li>
    @endif
    @else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right bg-dark text-white" aria-labelledby="navbarDropdown">
        <a class="dropdown-item text-dark" href="#">
                <i class="fas fa-user-alt"></i>
                Mi Perfil
            </a>
            <a class="dropdown-item text-dark" href="{{route('administracion.index')}}">
                <i class="fas fa-users-cog"></i>
                Administracion
            </a>
            <a class="dropdown-item text-dark" href="{{route('profesor.index')}}">
                <i class="fas fa-chalkboard-teacher"></i>
                Aulas 
            </a>
            <a class="dropdown-item text-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i>
                Desconectar
            </a>
            

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
    @endguest
</ul>