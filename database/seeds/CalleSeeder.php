<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CalleSeeder extends Seeder
{
    public function run()
    {
        $calles = [
            'Gral. Roca', 'La Rioja', 'Catamarca', 'Ing. Issler', 'Esteban Alisio', 'Niveyro', 'Pje. Santa Fe', '25 de Mayo',
            'Sarmiento', 'Gral. Madariaga', 'Colon', 'Cnel. López', 'Cnel. Reguera', 'Amado Bonpland', 'Maestro Melogno',
            'Pje. España', 'Pje. Malvinas', 'Mercedes Franco', 'Pje. Itatí', 'P. Martínez', 'Leandro Nicéforo Alem',
            'Pje. Lourdes', 'Alfredo Palacios', 'Pje. Cortés', 'Tucumán', 'L. Rojas', 'Pje. Libreño', 'Santiago del Estero',
            'Maestro Llanes', 'Pje. Garavano', 'Pje. Meza', 'Salto', 'Av. Salvador di Tomaso', 'Cabral', 'Cairo', 'J. R. Vidal',
            'Gdor. Gómez', 'Monte Caceros', 'Av. 12 de Septiembre', 'Pje. Cambrum', 'Pje. La Torre', 'Las Rosas',
            'Av. 2 de Abril', 'José Insaurralde', 'Ex Combatientes', 'Av. Amado Freiche', 'Av. Arturo Frondizi',
            'Crucero Gral. Belgrano', 'Gustavo Martínez Zuviría', 'Independencia', 'Juan Maria Vianney', 'Santa Rita',
            'Pellegrini', 'Av. San Martín', 'Pago Largo', 'Yatay', 'Julio Amezaga', 'Los Ciento Ocho', 'Los Laureles',
            'Pje. Brítez', 'Bartolomé Mitre', 'Pje. Gral. Paz', 'Sitja Nin', 'Pje. silva', 'Pje. Lezcano', 'Pje. Libertad',
            '18 de Abril', 'Av. Juan Valle', 'Rivadavia', 'Adolfo Montaña', 'Pje. Saucedo', 'Pje. Brasil', 'Brasil', 'Uruguay',
            'Pje. Medina', 'Pje. Las Rosas', 'Velazco', 'Av. Belgrano', 'Pje. Tierra del Fuego', 'Hipólito Irigoyen',
            'Pje. Reconquista', 'Pje. Ugarte', 'Pje. Neuquén', 'Pje. Los Andes', 'Pje. Derechos del Niño', 'Pje. San Salvador',
            'Pje. vira Pita', 'El Rosedal', 'José de la Rosa Vallejos', 'Felix María Goméz', 'Pje. Iguazú', 'Pje. Santa Cruz',
            'Pje. Yatay', 'Entre Rios', 'Pje. Freiche', 'Montiel', 'Roca', 'Juan Cabral', 'José M. Paz', 'Fray de la Quintana',
            'Juan Pujol', 'Jorge Newbery', 'José Sánchez Guerrero', 'Restituto Ortiz', 'Los espinillos', 'El Ombú',
            'Los Alerces', 'Cap. Pedro Giaccino', 'El Nogal', 'Los Cedros', 'Pje. Irupe', 'Jorge Andrés amarilla','Pje. Velozo',
        ];

        foreach ($calles as $key => $value) {
            DB::table('calles')->insert([
                'descripcion' => $value,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
