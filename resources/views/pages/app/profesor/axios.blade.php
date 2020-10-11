@extends('layouts.app')
@section('contenido')
@include('layouts.parts-app.menu-docente')

<br>
<style>
  #loading {
    display: none;
  }
</style>
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

                        <option data-select2-id="30"></option>

                      </select>
            </div>
        </div>
    </div>
</form>
<hr>
       <div class="form-group">
         		<button id="" class="btn btn-primary">filtro</button>
        </div>

<div class="alert alert-primary" role="alert" id="loading">Espere porfavor...</div>

  <div class="row">

    <div class="col md-4">
      <div class="card" style="width: 20rem;">
        <img src="{{asset('images/math.jpg')}}" class="card-img-top" alt="..." style="height: 18rem">
        <div class="card-body">
          <h4 class="card-title"><b id="curso"></b></h4>
          <p class="card-text" id="materia"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item" id="turno"></li>
        </ul>
        <div class="card-body">
         <button class="btn btn-success btn-block" id="json_get" >Entrar</button>
        </div>
      </div>
    </div>
   

    <div class="col md-4" id="">
      <div class="card" style="width: 20rem;">
        <img src="{{asset('images/math.jpg')}}" class="card-img-top" alt="..." style="height: 18rem">
        <div class="card-body">
          <h4 class="card-title"><b id="curso"></b></h4>
          <p class="card-text" id="materia"></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item" id="turno"></li>
        </ul>
        <div class="card-body">
         <button class="btn btn-success btn-block" id="json_get" >Entrar</button>
        </div>
      </div>
    </div>
   

    

  </div>






</div>

<script>
var loading = document.getElementById('loading');
var curso = document.getElementById('curso');
var materia = document.getElementById('materia');
var turno = document.getElementById('turno');

//var datos= ['1ero c'];
//var mensajeid=document.getElementById('mensajeid');


var boton = document.getElementById('json_get');
boton.addEventListener('click', function(){
	loading.style.display='block';
	axios.get('http://escuela.test/profesor/buscar_cursos', {
			responseType: 'json'
	})
	.then(function(res){
		if(res.status==200){
			//console.log(res.data);
      //this.datos=res.data;
			curso.innerHTML=res.data.datos[0].name;
			materia.innerHTML=res.data.datos[0].materia;
			turno.innerHTML=res.data.datos[0].turno;
			//mensajeid.innerHTML=res.datos.id;
		}
		console.log(res);
	})
	.catch(function(err){
		console.log(err);
	})
	.then(function(){
		loading.style.display='none';
	});
});



</script>


@endsection