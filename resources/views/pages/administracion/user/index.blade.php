@extends('layouts.administracion')

@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1> Panel de administración de Usuarios </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @include('layouts.parts.breadcrumbs.portada')
                    @include('layouts.parts.breadcrumbs.inicio')
                    @include('layouts.parts.breadcrumbs.administracion')
                    <li class="breadcrumb-item active"> Usuarios </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="row">
        <div class="col font-weight-bold">
            @include('flash::message')
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                @include('pages.administracion.user.create')
                @include('pages.administracion.user.edit')
            </div>
            <div class="col-md-6">
                @include('pages.administracion.user.warning')
            </div>
        </div>
        <div class="row">
            @include('pages.administracion.user.data-table')
        </div>
    </div>
</section>
@endsection

@section('script')
<script>
    $(function() {
        $("#userTable").DataTable({
            language: {
                sProcessing: "Procesando...",
                sLengthMenu: "Mostrar _MENU_ registros",
                sZeroRecords: "No se encontraron resultados",
                sEmptyTable: "Ningún dato disponible en esta tabla",
                sInfo:
                    "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                sInfoEmpty:
                    "Mostrando registros del 0 al 0 de un total de 0 registros",
                sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
                sInfoPostFix: "",
                sSearch: "Buscar:",
                sUrl: "",
                sInfoThousands: ",",
                sLoadingRecords: "Cargando...",
                oPaginate: {
                    sFirst: "Primero",
                    sLast: "Último",
                    sNext: "Siguiente",
                    sPrevious: "Anterior"
                },
                oAria: {
                    sSortAscending:
                        ": Activar para ordenar la columna de manera ascendente",
                    sSortDescending:
                        ": Activar para ordenar la columna de manera descendente"
                },
                buttons: {
                    copy: "Copiar",
                    colvis: "Visibilidad"
                }
            },
            responsive: "true",
            dom: "Bfrtilp",
            buttons: ["print", "pdfHtml5", "copyHtml5", "excelHtml5", "csvHtml5"],
            //buttons: ["print", "copyHtml5", "excelHtml5", "csvHtml5", "pdfHtml5"],
            select: true,
            scrollY: 450,
            columns: [
                null,
                null,
                { searchable: false, orderable: false },
                { searchable: false, orderable: false },
                { searchable: false, orderable: false },
                { searchable: false, orderable: false }
            ], 
        });
    });

    function eliminar(objeto) {
        alert(
            "¿Esta seguro que desea eliminar este item?, por como esta configurado esto, se va a eliminar igual esto solo es un alert"
        );
    }

    function edit(objeto) {
        console.log(objeto);
        var id = document.getElementById("id");
        let name = document.getElementById("name");
        let email = document.getElementById("email");
        id.value = objeto.id;
        name.value = objeto.name;
        email.value = objeto.email;
    }
</script>

@endsection