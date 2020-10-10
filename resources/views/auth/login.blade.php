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
                        {{ __('Iniciar sesión') }}
                    </h3>
                    <div class="card-body login-card-body text-white bg-dark mb-3">

                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input id="email" type="email" placeholder="Correo electrónico"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <small class="form-text text-white">Nunca compartiremos su correo electrónico
                                con nadie más.
                            </small><br>


                            <div class="input-group">
                                <input id="password" type="password" placeholder="Contraseña"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">
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

                            <br>

                            <div class="form-row justify-content-center align-items-center">
                                <div class="col-auto my-1 float-left">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Recuérdame
                                        </label>
                                    </div>

                                    <div class="col-auto float-right">
                                        @if (Route::has('password.request'))
                                        <a class="text-decoration-none" href="{{ route('password.request') }}">
                                            ¿Se te olvidó tu contraseña?
                                        </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <hr class="my-4">

                            <div>
                                <button type="submit" class="btn btn-success float-left">
                                    Iniciar sesión
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