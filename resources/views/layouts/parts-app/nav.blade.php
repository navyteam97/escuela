<nav class="main-header navbar navbar-expand-md navbar-dark navbar-black border border-dark">
    <div class="container-fluid">
        <a href="{{ route('bienvenido') }}" class="navbar-brand merryweather">
            <img src="{{asset('images/logo-CSPL.png')}}" alt="Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            Colegio Secundario
            <span class="texto-nav brand-text font-weight-light niconne">Paso de los
                Libres</span>
        </a>
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            @include('layouts.parts.auth-links')
        </div>
    </div>
</nav>