@extends('layouts.app')

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.bootstrap4.min.css">
@endsection

@section('contenido')
<div class="container">
<br><br>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Alumno</th>
                <th>#1 Trimestre</th>
                <th>#2 Trimestre</th>
                <th>#3 Trimestre</th>
                <th>Promedio</th>
                <th>Nota Final</th>
            </tr>
        </thead>
        <tbody>
        @foreach($datos as $dato)
            <tr>
                <td>{{ $dato->nombre  }}</td>
                <td>{{ $dato->nota_1  }}</td>
                <td>{{ $dato->nota_2  }}</td>
                <td>{{ $dato->nota_3  }}</td>
                <td>{{ $dato->promedio }}</td>
                <td>{{ $dato->nota_final }}</td>
            </tr>
        @endforeach    
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre completo</th>
                <th colspan="3"> Notas trimestrales</th>
                <th>Promedio</th>
                <th>Final</th>
            </tr>
        </tfoot>
    </table>


</div>

@endsection


@section('script')

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.colVis.min.js"></script>





<script type="text/javascript">
$(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 
        {extend: 'copy',
        text: '<u>C</u>opiar',
    	key: {
    		key:'c',
    		altkey:true
    	}},
         'excel', 'pdf', 
         {extend:'colvis',
         text: '<u>M</u>ostrar',
         key: {
         	key:'m',
         	altkey:true
         } }]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );

</script>



@endsection