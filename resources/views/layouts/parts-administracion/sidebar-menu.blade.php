<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <!-- Modulo Usuarios -->
        <li class="nav-item has-treeview {{ request()->is('permiso*', 'rol*', 'user*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users"></i>
                <p>
                    Usuarios
                    <i class="nav-icon right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{route('permiso.index')}}"
                        class="nav-link {{ request()->is('permisos*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Permisos</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('rol.index')}}" class="nav-link {{ request()->is('rol*') ? 'active' : '' }}">
                        <i class="nav-icon fab fa-critical-role"></i>
                        <p>Roles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user.index')}}" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Modulo Organizaciones -->
        <!-- <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-sitemap"></i>
                <p>
                    Organizaciones
                    <span class="right badge badge-danger">Stand by</span>
                </p>
            </a>
        </li> -->
    </ul>
</nav>