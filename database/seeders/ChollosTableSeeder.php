<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
                'imagen' => Storage::url('/img/1-chollo-ofertas.jpg'),
            ],
            [
                'titulo' => 'Chollo 2',
                'descripcion' => 'Descripción del Chollo 2.',
                'url' => 'https://example.com/chollo-2',
                'categoria' => 'Mecanica',
                'puntuacion' => 5,
                'precio' => 100.00,
                'precio_descuento' => 80.00,
                'disponible' => true,
                'imagen' => Storage::url('img/2-chollo-ofertas.jpg'),
            ]
        ]);
    }
}
