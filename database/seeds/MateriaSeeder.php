<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MateriaSeeder extends Seeder
{
    public function run()
    {
        $materias = [
            'Lengua y Literatura',
            'Matemática',
            'Biología',
            'Geografía',
            'Historia',
            'Formación Ética y Ciudadana',
            'Educación Artística',
            'Educación Tecnológica',
            'Lengua Extranjera',
            'Educación Física',
            'Proyecto de Fortalecimiento de las Trayectorias Escolares',
            'Físico - Química',
            'Química',
            'Tecnología de la Información y la Comunicación',
            'Física',
            'Taller: Lenguajes Artísticos',
            'Ciencias de la Tierra',
            'Filosofía de la Ciencia',
            'Física y Astronomía',
            'Ecología',
            'Seminario de Integración: Salud',
            'Seminario de Integracíón: Ambiente y Sociedad',
            'Espacio de Definición Institucional',
            'Historia Latinoamericana y Argentina',
            'Geografía Mundial y Latinoamericana',
            'Comunicación Social',
            'Geografía Argentina',
            'Psicología',
            'Economía Política',
            'Sociología',
            'Seminario: de los procesos políticos, sociales, ambientales y culturales del Territorio Correntino',
            'Ciencia Política',
            'Introducción a la Administración',
            'Economía',
            'Teoría y Gestión de las Organizaciones',
            'Sistemas de Información Contable',
            'Derecho Comercial y Laboral',
            'Administración de Empresas',
            'Gestión Financiera e Impositiva',
            'Filosofía',
        ];

        foreach ($materias as $key => $value) {
            DB::table('materias')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
