<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'Escuela') }}</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <script src="{{ asset('/js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    <!-- dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

    <!-- <link rel="stylesheet" href="{{ asset('css/datatable.css') }}"> -->
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('layouts.parts-administracion.nav')
        @include('layouts.parts-administracion.main-sidebar')
        <main class="fondo-02">
            <div class="content-wrapper efecto-difuminacion"> @yield('contenido') </div>
        </main>
        @include('layouts.parts-administracion.control-sidebar')
        @include('layouts.parts-administracion.footer')
    </div>
    @yield('script')
</body>

</html>