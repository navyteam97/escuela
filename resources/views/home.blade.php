@extends('layouts.app')

@section('contenido')

<section class="content-header">
    <!-- <h1 class="montserrat">
        Iniciar Sesión
    </h1> -->
</section>

<section>
    <div class="container roboto">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card text-white bg-dark mb-3 rounded-lg">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="text-center font-weight-bold">Reserva tu habitación</h3>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>

<section>
    <div class="container">
        <a href="{{route('administracion.index')}}" class="btn btn-danger rounded-lg">Panel de administración
        </a>
    </div>
</section>

<br>
@endsection