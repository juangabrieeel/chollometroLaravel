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
                'titulo' => 'Ratón óptico inalámbrico',
                'descripcion' => 'El Ratón óptico inalámbrico NGS SNOOP-RB sobresale por su capacidad de conexión tri-modal, permitiendo trabajar con hasta tres dispositivos simultáneamente y facilitando la reconexión automática.',
                'url' => 'https://example.com/chollo-1',
                'categoria' => 'Electrónica',
                'puntuacion' => 5,
                'precio' => 12.00,
                'precio_descuento' => 9.00,
                'disponible' => true,
            ],
            [
                'titulo' => 'Frigorífico americano Midea',
                'descripcion' => 'El frigorífico americano Midea modelo MDRS619FGF46 se destaca por su diseño en acero inoxidable y tecnología Total No Frost, que previene la formación de hielo.',
                'url' => 'https://example.com/chollo-2',
                'categoria' => 'Electrodomesticos',
                'puntuacion' => 10,
                'precio' => 1185.00,
                'precio_descuento' => 500.00,
                'disponible' => true,
            ],
            [
                'titulo' => 'Samsung Horno Pirolítico 76L',
                'descripcion' => 'El Samsung Dual Cook ofrece flexibilidad culinaria mediante zonas de cocción independientes para preparar múltiples recetas a la vez, con temperaturas y tiempos diferentes.',
                'url' => 'https://example.com/chollo-2',
                'categoria' => 'Electrodomesticos',
                'puntuacion' => 8,
                'precio' => 600.00,
                'precio_descuento' => 300.00,
                'disponible' => true,
            ]
        ]);
    }
}
