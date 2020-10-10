@extends('layouts.app')

@section('contenido')
@include('layouts.parts-app.menu-docente')
<br>
<div class="container">
<form>
    <div class="row">
        <div class="col">
          <div class="form-group">
                      <label>Turnos</label>
                      <select  id="select-turnos" name="select-turnos" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                           <option value="" selected="selected" data-select2-id="3">Seleccione...</option>
                        @foreach($turnos as $turno)
                        <option value="{{ $turno->id  }}" data-select2-id="30">{{ $turno->name  }}</option>
                        @endforeach
                      </select>
            </div>
        </div>
        <div class="col">
          <div class="form-group">
                      <label>Cursos</label>
                      <select name="select-cursos" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                        <option selected="selected" data-select2-id="3">Seleccione...</option>
                        @foreach($cursos as $curso)
                        <option data-select2-id="30">{{ $curso->name  }}</option>
                        @endforeach
                      </select>
            </div>
        </div>
    </div>
</form>
<hr>

  <div class="row">
    @foreach($datos as $dato)
    <div class="col md-4">
      <div class="card" style="width: 20rem;">
        <img src="{{asset('images/math.jpg')}}" class="card-img-top" alt="..." style="height: 18rem">
        <div class="card-body">
          <h4 class="card-title"><b>{{ $dato->name}}</b></h4>
          <p class="card-text">{{ $dato->materia}}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">{{ $dato->turno}}</li>
        </ul>
        <div class="card-body">
         <a class="btn btn-success btn-block" href="{{ route('profesor.aula') }}">Entrar</a>
        </div>
      </div>
    </div>
    @endforeach
   
    <div id="destino"> </div>

  </div>



</div>


  <div class="row">
     
     <div id='card-container'></div>



  </div>


          <table id="mitabla"
              data-toggle="table"
              data-height="460"
              data-card-view="true"
              data-pagination="false"
           >
          <thead>
          <tr> 
            <th data-field="name"> Nombre </th>
            <th data-field="materia">Materia </th>

          </tr>
          </thead>
       </table>



@endsection

@section('script')


    <link rel="stylesheet" href="{{ asset('plugins/bootstrap-table/bootstrap-table.min.css') }}">

  

  <script src="{{ asset('plugins/bootstrap-table/bootstrap-table.min.js') }}"></script>




<script>



  let cardContainer;
  var  htm_card = "";

  function createTaskCard (elemento)  {

    /// ejemplo 1

    let col = document.createElement('div');
    col.className = 'col md-4';
  

    let card = document.createElement('div');
    card.className = 'card';
    card.style='width: 20rem;';

    let cardBody = document.createElement('div');
    cardBody.className = 'card-body';

    let title = document.createElement('h4');
    title.innerText =   elemento.name;
    title.className = 'card-title';

    let color = document.createElement('div');
    color.innerText = elemento.materia;
    color.className = 'card-color';

    cardBody.appendChild(title);
    cardBody.appendChild(color);
 //   cardBody.appendChild('<a class="btn btn-success btn-block" href="{{ route('profesor.aula') }}">Entrar</a>');
    card.appendChild(cardBody);
  
    col.appendChild(card);

    cardContainer.appendChild(col);

}



 function createCard (elemento)  {

   // ejemplo 2
    htm_card =  htm_card + `
    <div class="col md-4">
      <div class="card" style="width: 20rem;">
        <img src="{{asset('img/math.jpg')}}" class="card-img-top" alt="..." style="height: 18rem">
        <div class="card-body">
          <h4 class="card-title"><b>${elemento.name}</b></h4>
          <p class="card-text">${elemento.materia}</p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">${elemento.turno}</li>
        </ul>
        <div class="card-body">
         <a class="btn btn-success btn-block" href="">Entrar</a>
        </div>
      </div>
    </div>

        `;

console.log(htm_card )

};

function consultar2()  {

  $(".card").each(function(){
    //En cada uno ponemos el texto en negrita
      console.log($(this) )

      $(this).hide();
  });

};

function consultar1()  {
  // Simple de programar recargue la pagina con los valores de filtro elegido
  // ** pero menos efectivo, porque recarga todo  
 
  // $anio = ...
  $turnos = $("#select-turnos").val();
  $cursos = $("#select-cursos").val();
  document.location = '{{ route('profesor.index') }}' + '?turnos=' + $turnos

};


function consultar()  {

  // Mas Complejo de programar recargue la pagina con los valores de filtro elegido por AJAX
  //  Y actualiza pantalla con JS

  // ** Mas efectivo, pero Complejo  



            $.ajax({
              dataType: "json",
              data: { id: 1 },
              url:   'profesor/buscar_cursos',
              type:  'get',
              success: function(data){
                 console.log('Ok Re dibujar ');

                 $table = $('#mitabla'); // Tabla principal
                 $table.bootstrapTable('load', data.datos);



             //    document.getElementById('card-container').remove();
               // if (cardContainer) {
               //   document.getElementById('card-container').replaceWith(cardContainer);
              //    return;
              //  }
                cardContainer = document.getElementById('card-container');
                data.datos.forEach((elemento) => {
                      createTaskCard(elemento);  // ejemplo 1
                      createCard(elemento);  // ejemplo 2
                });

                $('#destino').html( htm_card)


              },
              error: function(xhr,err){ 
                if (xhr.readyState == 401) { // Si se desconecto
                   document.location.reload(); // Para que recargue y pida login
                }else{
                   msgerror( xhr.responseText);
                }    
              } // Fin si hay error
            }); // Fin llamado Ajax

  };

  $(document).ready(function(){
      // Cuando entra a la vista
    //  $('#mitabla').bootstrapTable()
 //     consultar();
  });      

    // Cambio algun Select de Filtro
    $(function () {            
        $('select[name="select-turnos"]').change(function () {
           consultar1();
           console.log("hola mundo");
        });    
    });

    $(function () {            
        $('select[name="select-cursos"]').change(function () {
           consultar();
           console.log("hola mundo");
        });    
    });

</script>
@endsection
