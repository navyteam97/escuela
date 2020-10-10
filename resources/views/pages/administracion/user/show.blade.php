@extends('layouts.administracion')

@section('contenido')
<div class="card">
    <div class="card-header">
        <h3 class="mb-0">Detalles usuario</h3>
    </div>
    <div class="card-body">
        <div class="mb-2">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th> Id </th>
                        <td> {{ $item->id }} </td>
                    </tr>
                    <tr>
                        <th> Nombre </th>
                        <td> {{ $item->name }} </td>
                    </tr>
                    <tr>
                        <th> E-mail </th>
                        <td> {{ $item->email }} </td>
                    </tr>
                    <tr>
                        <th> Rol </th>
                        <td>
                            @foreach($roles as $rol)
                                {{ $rol }}
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th> Permisos </th>
                        <td>
                            @foreach($permisos as $permiso)
                                |- {{ $permiso->name }} -|
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a class="btn btn-sm btn-default" href="{{ route('user.index') }}">Volver</a>
    </div>
</div>
@endsection