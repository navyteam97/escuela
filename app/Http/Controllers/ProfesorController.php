<?php

namespace App\Http\Controllers;

use App\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function buscar_cursos()
    {

       // AJAX
        //me trae los datos en el cual el profesor dicta clases, nombre del curso, materia e imagen de la cual dicta en ese curso y el turno de ese curso.
        $datos =   [
          (object) [  'id' => '1',
          'name' => '1° "C"',
          'materia' => 'Matematica',
          'turno' => 'Turno Mañana',
          'turno_id' => '1',
          'imagen' => 'url'],

          (object) [  'id' => '2',
          'name' => '1° "D"',
          'materia' => 'Matematica',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],

          (object) [  'id' => '3',
          'name' => '2° "C"',
          'materia' => 'Matematica',
          'turno' => 'Turno Mañana',
          'turno_id' => '1',
          'imagen' => 'url'],

         

        /*  (object) [  'id' => '4',
          'name' => '2° "D"',
          'materia' => 'Matematica',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],

          (object) [  'id' => '4',
          'name' => '2° "D"',
          'materia' => 'Fisica',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],
        */

        ];


    return response()->json(['datos'=>$datos]);

        //dd($cursos);

    }

    public function axios(){
      //me trae los datos en el cual el profesor dicta clases, nombre del curso, materia e imagen de la cual dicta en ese curso y el turno de ese curso.
      $datos =   [
        (object) [  'id' => '1',
        'name' => '1° "C"',
        'materia' => 'Matematica eeee',
        'turno' => 'Turno Mañana',
        'turno_id' => '1',
        'imagen' => 'url'],

        (object) [  'id' => '2',
        'name' => '1° "D"',
        'materia' => 'Matematicaeee ee',
        'turno' => 'Turno Tarde',
        'turno_id' => '2',
        'imagen' => 'url'],

        (object) [  'id' => '3',
        'name' => '2° "C"',
        'materia' => 'Matematic  eeee a',
        'turno' => 'Turno Mañana',
        'turno_id' => '1',
        'imagen' => 'url'],

          (object) [  'id' => '4',
        'name' => '2° "D"',
        'materia' => 'Matematica',
        'turno' => 'Turno Tarde',
        'turno_id' => '2',
        'imagen' => 'url'],

        (object) [  'id' => '4',
        'name' => '2° "D"',
        'materia' => 'Fisica',
        'turno' => 'Turno Tarde',
        'turno_id' => '2',
        'imagen' => 'url'],
      

      ];

      //estos 2 resultados vendran de los turnos en el cual el profesor tendra clases.
      $turnos = [
               (object) [  'id' => '1',
        'name' => 'Turno Mañana'],
        (object) [  'id' => '2',
        'name' => 'Turno Tarde'],
      ];

      $cursos = [
          (object) ['id'=>'1',
          'name'=>'1° C'],
          (object) ['id'=>'2',
          'name'=>'1° D'],
          (object) ['id'=>'3',
          'name'=>'2° C'],
      ];
      return view("pages.app.profesor.axios")->with('datos', $datos)->with('turnos', $turnos)->with('cursos', $cursos);
    }

    public function index()
    {


        //me trae los datos en el cual el profesor dicta clases, nombre del curso, materia e imagen de la cual dicta en ese curso y el turno de ese curso.
        $datos =   [
          (object) [  'id' => '1',
          'name' => '1° "C"',
          'materia' => 'Matematica eeee',
          'turno' => 'Turno Mañana',
          'turno_id' => '1',
          'imagen' => 'url'],

          (object) [  'id' => '2',
          'name' => '1° "D"',
          'materia' => 'Matematicaeee ee',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],

          (object) [  'id' => '3',
          'name' => '2° "C"',
          'materia' => 'Matematic  eeee a',
          'turno' => 'Turno Mañana',
          'turno_id' => '1',
          'imagen' => 'url'],

            (object) [  'id' => '4',
          'name' => '2° "D"',
          'materia' => 'Matematica',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],

          (object) [  'id' => '4',
          'name' => '2° "D"',
          'materia' => 'Fisica',
          'turno' => 'Turno Tarde',
          'turno_id' => '2',
          'imagen' => 'url'],
        

        ];

        //estos 2 resultados vendran de los turnos en el cual el profesor tendra clases.
        $turnos = [
                 (object) [  'id' => '1',
          'name' => 'Turno Mañana'],
          (object) [  'id' => '2',
          'name' => 'Turno Tarde'],
        ];

        $cursos = [
            (object) ['id'=>'1',
            'name'=>'1° C'],
            (object) ['id'=>'2',
            'name'=>'1° D'],
            (object) ['id'=>'3',
            'name'=>'2° C'],
        ];

        return view("pages.app.profesor.index")->with('datos', $datos)->with('turnos', $turnos)->with('cursos', $cursos);
    }

    public function aula(){
      $datos =   [
        (object) [  'id' => '1',
        'nombre' => 'Juan Perez',
        'nota_1' => '10',
        'nota_2' => '10',
        'nota_3' => '10',
        'promedio' => '10',
        'nota_final'=> '10'],

        (object) [  'id' => '2',
        'nombre' => 'Victor Moreyra',
        'nota_1' => '8',
        'nota_2' => '8',
        'nota_3' => '8',
        'promedio' => '8',
        'nota_final'=> '8'],

        (object) [  'id' => '3',
        'nombre' => 'Wayne Rooney',
        'nota_1' => '6',
        'nota_2' => '6',
        'nota_3' => '6',
        'promedio' => '6',
        'nota_final'=> '6'],

        (object) [  'id' => '4',
        'nombre' => 'Florencia Flores',
        'nota_1' => '8',
        'nota_2' => '7',
        'nota_3' => '6',
        'promedio' => '7',
        'nota_final'=> '7'],

        (object) [  'id' => '5',
        'nombre' => 'Ramon Valdes',
        'nota_1' => '10',
        'nota_2' => '7',
        'nota_3' => '4',
        'promedio' => '7',
        'nota_final'=> '7'],
      

      ];
        return view("pages.app.aula.index")->with('datos', $datos);
    }

    public function datatable(){
        return view("pages.app.aula.datatable");
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view("pages.app.profesor.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function show(Profesor $profesor)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function edit(Profesor $profesor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profesor $profesor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profesor  $profesor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profesor $profesor)
    {
        //
    }
}
