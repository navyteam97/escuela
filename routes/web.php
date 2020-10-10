<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('bienvenido');

Auth::routes();

/* Para cambiar la URL de la ruta de inicio debe actualizar el valor que se encuentra en 
en 'App\Providers\RouteServiceProvider::HOME' */
Route::get('inicio', 'HomeController@index')->name('inicio');

Route::resource('user', 'UserController');
Route::post('user/{user}', 'UserController@status')->name('user-status');

Route::resource('administracion', 'AdministracionController');
Route::resource('alumno', 'AlumnoController');
Route::resource('barrio', 'BarrioController');
Route::resource('cajaCurricular', 'CajaCurricularController');
Route::resource('cajaCurricularProfesor', 'CajaCurricularProfesorController');
Route::resource('calificacion', 'CalificacionController');
Route::resource('calle', 'CalleController');
Route::resource('carrera', 'CarreraController');
Route::resource('carreraInscripcion', 'CarreraInscripcionController');
Route::resource('carreraInstitucion', 'CarreraInstitucionController');
Route::resource('componenteDeFormulario', 'ComponenteDeFormularioController');
Route::resource('condicion', 'CondicionController');
Route::resource('contacto', 'ContactoController');
Route::resource('coorte', 'CoorteController');
Route::resource('cuadra', 'CuadraController');
Route::resource('curso', 'CursoController');
Route::resource('departamento', 'DepartamentoController');
Route::resource('direccione', 'DireccionController');
Route::resource('directivo', 'DirectivoController');
Route::resource('division', 'DivisionController');
Route::resource('documento', 'DocumentoController');
Route::resource('entrada', 'EntradaController');
Route::resource('ficha', 'FichaController');
Route::resource('fichaFormulario', 'FichaFormularioController');
Route::resource('formulario', 'FormularioController');
Route::resource('genero', 'GeneroController');
Route::resource('horario', 'HorarioController');
Route::resource('imagen', 'ImagenController');
Route::resource('inscripcion', 'InscripcionController');
Route::resource('libroMatriz', 'LibroMatrizController');
Route::resource('materia', 'MateriaController');
Route::resource('materiaInscripcion', 'MateriaInscripcionController');
Route::resource('materiaNota', 'MateriaNotaController');
Route::resource('municipio', 'MunicipioController');
Route::resource('nota', 'NotaController');
Route::resource('pais', 'PaisController');
Route::resource('permiso', 'PermisoController');
Route::resource('persona', 'PersonaController');
Route::resource('preceptorCurso', 'PreceptorCursoController');
Route::resource('provincia', 'ProvinciaController');
Route::resource('responsable', 'ResponsableController');
Route::resource('rol', 'RolController');
Route::resource('tipoDeCorrelativa', 'TipoDeCorrelativaController');
Route::resource('tipoDeCurso', 'TipoDeCursoController');
Route::resource('tipoDeDireccion', 'TipoDeDireccionController');
Route::resource('tipoDeDocumento', 'TipoDeDocumentoController');
Route::resource('tipoDeImagen', 'TipoDeImagenController');
Route::resource('tipoDeInscripcion', 'TipoDeInscripcionController');
Route::resource('tipoDeNota', 'TipoDeNotaController');
Route::resource('tipoDeResponsable', 'TipoDeResponsableController');
Route::resource('turno', 'TurnoController');


//axel
//Route::resource('profesor', 'ProfesorController');
Route::get('profesor/index', 'ProfesorController@index')->name('profesor.index');
Route::get('profesor/axios', 'ProfesorController@axios')->name('profesor.axios');
Route::get('profesor/buscar_cursos', 'ProfesorController@buscar_cursos')->name('profesor.buscar_cursos');
Route::get('profesor/aula', 'ProfesorController@aula')->name('profesor.aula');


//maty
//Route::resource('preceptor', 'PreceptorController');

Route::get('preceptor/index', 'PreceptorController@index')->name('preceptor.index');