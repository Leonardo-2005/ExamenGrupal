<?php

namespace Database\Seeders;

use App\Models\ProductionLine;
use Illuminate\Database\Seeder;

class ProductionLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductionLine::insert([
            [
                'name' => 'Corte y preparación',
                'location' => 'Nave A',
                'status' => 'activa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Soldadura',
                'location' => 'Nave B',
                'status' => 'activa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ensamblaje',
                'location' => 'Nave C',
                'status' => 'activa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Pintura',
                'location' => 'Nave D',
                'status' => 'inactiva',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
