<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->truncateTablas([
            'users',
            'barrios',
            'calificaciones',
            'calles',
            'carreras',
            'componentes_de_formularios',
            'condiciones',
            'coortes',
            'cuadras',
            'divisiones',
            'entradas',
            'fichas',
            'generos',
            'materias',
            'paises',
            'tipos_de_correlativas',
            'tipos_de_cursos',
            'tipos_de_direcciones',
            'tipos_de_documentos',
            'tipos_de_imagenes',
            'tipos_de_inscripciones',
            'tipos_de_notas',
            'tipos_de_responsables',
            'turnos',
            'alumnos',
            'cursos',
            'cajas_curriculares',
            'profesores',
            'cajas_curriculares_profesores',
            'inscripciones',
            'carreras_inscripciones',
            'provincias',
            'departamentos',
            'municipios',
            'direcciones',
            'contactos',
            'instituciones',
            'directivos',
            'carreras_instituciones',
            'correlativas',
            'documentos',
            'formularios',
            'horarios',
            'personas',
            'imagenes',
            'libros_matrices',
            'materias_inscripciones',
            'notas',
            'materias_notas',
            'preceptores',
            'preceptores_cursos',
            'responsables',
            
            'roles',
            'permissions',
            'role_has_permissions',
            'model_has_roles',
        ]);
        $this->call(UserSeeder::class);
        $this->call(BarrioSeeder::class);
        $this->call(CalificacionSeeder::class);
        $this->call(CalleSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(ComponenteDeFormularioSeeder::class);
        $this->call(CondicionSeeder::class);
        $this->call(CoorteSeeder::class);
        $this->call(CuadraSeeder::class);
        $this->call(DivisionSeeder::class);
        $this->call(EntradaSeeder::class);
        $this->call(FichaSeeder::class);
        $this->call(GeneroSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(PaisSeeder::class);
        $this->call(TipoDeCorrelativaSeeder::class);
        $this->call(TipoDeCursoSeeder::class);
        $this->call(TipoDeDireccionSeeder::class);
        $this->call(TipoDeDocumentoSeeder::class);
        $this->call(TipoDeImagenSeeder::class);
        $this->call(TipoDeInscripcionSeeder::class);
        $this->call(TipoDeNotaSeeder::class);
        $this->call(TipoDeResponsableSeeder::class);
        $this->call(TurnoSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(CajaCurricularSeeder::class);
        $this->call(ProfesorSeeder::class);
        $this->call(CajaCurricularProfesorSeeder::class);
        $this->call(InscripcionSeeder::class);
        $this->call(CarreraInscripcionSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(MunicipioSeeder::class);
        $this->call(DireccionSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(InstitucionSeeder::class);
        $this->call(DirectivoSeeder::class);
        $this->call(CarreraInstitucionSeeder::class);
        $this->call(CorrelativaSeeder::class);
        $this->call(DocumentoSeeder::class);
        $this->call(FormularioSeeder::class);
        $this->call(HorarioSeeder::class);
        $this->call(PersonaSeeder::class);
        $this->call(ImagenSeeder::class);
        $this->call(LibroMatrizSeeder::class);
        $this->call(MateriaInscripcionSeeder::class);
        $this->call(NotaSeeder::class);
        $this->call(MateriaNotaSeeder::class);
        $this->call(PreceptorSeeder::class);
        $this->call(PreceptorCursoSeeder::class);
        $this->call(ResponsableSeeder::class);

        
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleHasPermissionSeeder::class);
        $this->call(ModelHasRoleSeeder::class);
    }

    protected function truncateTablas(array $tablas)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $key => $value) {
            DB::table($value)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
