@extends('layouts.administracion')

@section('contenido')
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1> Panel de administración de Permisos </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @include('layouts.parts.breadcrumbs.portada')
                    @include('layouts.parts.breadcrumbs.inicio')
                    @include('layouts.parts.breadcrumbs.administracion')
                    <li class="breadcrumb-item active"> Permisos </li>
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
                @include('pages.administracion.permiso.create')
            </div>
            <div class="col-md-6">
            completar este espacio
            </div>
        </div>
        <div class="row">
       completar despues
        </div>
    </div>
</section>





<div class="modal-dialog fade" role="document" id="myModal">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLiveLabel">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Título modal</font>
                </font>
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">×</font>
                    </font>
                </span>
            </button>
        </div>
        <div class="modal-body">
            <p>
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">¡Woohoo, estás leyendo este texto en un modal!</font>
                </font>
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Cerrar</font>
                </font>
            </button>
            <button type="button" class="btn btn-primary">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Guardar cambios</font>
                </font>
            </button>
        </div>
    </div>
</div>
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
            sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
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
                sSortAscending: ": Activar para ordenar la columna de manera ascendente",
                sSortDescending: ": Activar para ordenar la columna de manera descendente"
            },
            buttons: {
                copy: "Copiar",
                colvis: "Visibilidad"
            }
        },
        responsive: "true",
        dom: "Bfrtilp",
        select: true,
        scrollY: 450,
        columns: [
            null,
            null,
            {
                searchable: false,
                orderable: false
            },
            {
                searchable: false,
                orderable: false
            },
            {
                searchable: false,
                orderable: false
            },
            {
                searchable: false,
                orderable: false
            }
        ],
    });
});

function edit(objeto) {
    console.log(objeto);
    $('#myModal').modal('show');
}

function edit2(objeto) {

    console.log(objeto);
    var id = document.getElementById("id");
    let name = document.getElementById("name");
    let email = document.getElementById("email");
    id.value = objeto.id;
    name.value = objeto.name;
    email.value = objeto.email;

    var form = $("#save-modify-form")[0];

    // Vaciar el formulario del modal.
    form.reset();

    $("#operation").val("store"); //Indica es un alta
    $("#modal-title").text("Nuevo");


    $("#msgErrModal").hide();

    //        $("#userModal").modal("show")

    //   $("#myModal").modal("show")
    //       // Cuando termina de mostrarse.
    //       .on("shown.bs.modal", function(e) {
    //       $("#name").select(); // Selecciona todo el texto del 1er campo.
    //   });


}


function eliminar(objeto) {

    //Pide Confirmacion
    Swal.fire({
        title: 'Eliminar Usuario ' + objeto.name + ' ?',
        text: "Esta Seguro de Eliminar Item !",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonText: 'Cancelar',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
    }).then((result) => {
        if (result.value) {
            $.ajax({
                dataType: "json",
                data: {
                    id: objeto.id
                },
                url: 'user-borra',
                type: 'get',
                success: function(data) {
                    console.log('Ok Recargar Tabla o elimirar Fila');
                    //       $table.bootstrapTable('load', data.results);
                    document.location.reload(); // Para que recargue y pida login
                },
                error: function(xhr, err) {
                    if (xhr.readyState == 401) { // Si se desconecto
                        document.location.reload(); // Para que recargue y pida login
                    } else {
                        msgerror(xhr.responseText);
                    }
                } // Fin si hay error
            }); // Fin llamado Ajax
        } // Confirmo
    }) // Fin Confirmación
} // Fin Borrar
</script>

@endsection