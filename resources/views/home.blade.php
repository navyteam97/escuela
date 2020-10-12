@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
<link rel="stylesheet" href="{{ asset('bootnavbar-master/css/bootnavbar.css')}}">
@endsection

@section('contenido')

<nav class="navbar navbar-expand lg navbar-light bg-dark" id="navbar">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarcoll">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarcoll">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item text-white">
                <a class="nav-link active text-white" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown text-white" href="#">INSTITUCIÓN</a>
                <ul class="dropdown-menu bg-dark">
                    <li><a class="dropdown-item text-white" href="#">Datos institucionales</a></li>
                    <li><a class="dropdown-item text-white" href="#">Historia</a></li>
                    <div class="dropdown-divider"></div>
                    <li><a class="dropdown-item text-white" href="#">Something else here</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>


<br>
@endsection



@section('script')
<script src="{{ asset('bootnavbar-master/js/bootnavbar.js') }}"></script>
<script>
$('#navbar').bootnavbar();
</script>
@endsection