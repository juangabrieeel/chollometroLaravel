<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChollosTableSeeder extends Seeder
{
    public function run()
    {
        // Eliminar registros existentes antes de insertar nuevos datos
        DB::table('chollos')->truncate();

        // Insertar datos de ejemplo
        DB::table('chollos')->insert([
            [
                'titulo' => 'Chollo 1',
                'descripcion' => 'Descripción del Chollo 1.',
                'url' => 'https://example.com/chollo-1',
                'categoria' => 'Electrónica',
                'puntuacion' => 5,
                'precio' => 100.00,
                'precio_descuento' => 80.00,
                'disponible' => true,
            ],
            [
                'titulo' => 'Chollo 2',
                'descripcion' => 'Descripción del Chollo 2.',
                'url' => 'https://example.com/chollo-2',
                'categoria' => 'Mecánica',
                'puntuacion' => 5,
                'precio' => 100.00,
                'precio_descuento' => 80.00,
                'disponible' => true,
            ]
        ]);
    }
}
