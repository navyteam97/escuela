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
                    <!-- <div class="card-header">{{ __('Reset Password') }}</div> -->
                    <h3 class="card-header login-box-msg font-weight-bold">Restablecer la contraseña</h3>
                    <!-- <p>¿Olvidaste tu contraseña? Aquí puede recuperar fácilmente una nueva contraseña.</p> -->

                    <div class="card-body login-card-body text-white bg-dark mb-3">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <!-- <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div> -->


                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="Correo electrónico"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <hr class="my-4">

                            <div>
                                <button type="submit" class="btn btn-success float-left">
                                    Enviar enlace de restablecimiento de contraseña
                                </button>
                                <a href="/login" class="btn btn-danger float-right">
                                    Volver
                                </a>
                            </div>


                            <!-- <br>
                            <div class="row">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Enviar enlace de restablevimiento de contraseña
                                    </button>
                                </div>
                            </div> -->

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection