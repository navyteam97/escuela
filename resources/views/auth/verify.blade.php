@extends('layouts.app')

@section('contenido')
<section class="content-header">
    <!-- <h1 class="montserrat">
        Iniciar Sesión
    </h1> -->
</section>

<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-dark mb-3 rounded-lg roboto">
                    <h3 class="card-header login-box-msg font-weight-bold">
                        {{ __('Verifique su dirección de correo electrónico') }}
                    </h3>

                    <div class="card-body login-card-body text-white bg-dark mb-3">
                        @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Se ha enviado un nuevo enlace de verificación a su dirección de correo electrónico.') }}
                        </div>
                        @endif

                        {{ __('Antes de continuar, consulte su correo electrónico para ver si hay un enlace de verificación.') }}
                        {{ __('Si no recibió el correo electrónico') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="text-decoration-none">{{ __('haga clic aquí para solicitar otro') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection