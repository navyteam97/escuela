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
                <div class="card text-white bg-dark mb-3 rounded-lg roboto">
                    <!-- <div class="card-header">{{ __('Register') }}</div> -->
                    <h3 class="card-header login-box-msg font-weight-bold">
                        {{ __('Regístrate') }}
                    </h3>

                    <div class="card-body register-card-body text-white bg-dark mb-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input id="name" type="text" placeholder="Nombre"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <input id="email" type="email" placeholder="Correo electrónico"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="input-group">
                                <input id="password" type="password" placeholder="Contraseña"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="new-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <small class="form-text text-white">
                                Debe tener entre 8 y 20 caracteres.
                            </small><br>


                            <div class="input-group mb-3">
                                <input id="password-confirm" type="password" placeholder="Confirmar contraseña"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-auto my-1">
                                    <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" id="agreeTerms" name="terms"
                                            value="agree" required>
                                        <label for="agreeTerms" class="my-1">
                                            Estoy de acuerdo con los <a
                                                href="{{asset('pdf/terminos_y_condiciones_para_usuarios.pdf')}}"
                                                target="_blank" class="text-decoration-none" required>
                                                términos y condiciones</a>.
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div>
                                <button type="submit" class="btn btn-success float-left">
                                    Regístrate
                                </button>

                                <a href="/" class="btn btn-danger float-right">
                                    Volver
                                </a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection