<?php

namespace Database\Seeders;

use App\Models\Machine;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::insert([
            [
                'production_line_id' => 1,
                'code' => 'MAQ-001',
                'name' => 'Cortadora industrial',
                'type' => 'Corte',
                'status' => 'operativa',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 1,
                'code' => 'MAQ-002',
                'name' => 'Prensa hidráulica',
                'type' => 'Prensado',
                'status' => 'mantenimiento',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 2,
                'code' => 'MAQ-003',
                'name' => 'Soldadora automática',
                'type' => 'Soldadura',
                'status' => 'operativa',
                'criticality' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 2,
                'code' => 'MAQ-004',
                'name' => 'Compresor industrial',
                'type' => 'Compresión',
                'status' => 'operativa',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 3,
                'code' => 'MAQ-005',
                'name' => 'Equipo de ensamblaje',
                'type' => 'Ensamblaje',
                'status' => 'operativa',
                'criticality' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 4,
                'code' => 'MAQ-006',
                'name' => 'Cabina de pintura',
                'type' => 'Pintura',
                'status' => 'fuera_servicio',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 3,
                'code' => 'MAQ-007',
                'name' => 'Robot de montaje',
                'type' => 'Montaje',
                'status' => 'operativa',
                'criticality' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 3,
                'code' => 'MAQ-008',
                'name' => 'Taladro CNC',
                'type' => 'Mecanizado',
                'status' => 'mantenimiento',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 4,
                'code' => 'MAQ-009',
                'name' => 'Tanque de pintura',
                'type' => 'Pintura',
                'status' => 'operativa',
                'criticality' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 2,
                'code' => 'MAQ-010',
                'name' => 'Transportador automático',
                'type' => 'Transporte',
                'status' => 'operativa',
                'criticality' => 'baja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 1,
                'code' => 'MAQ-011',
                'name' => 'Sierra circular',
                'type' => 'Corte',
                'status' => 'fuera_servicio',
                'criticality' => 'media',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'production_line_id' => 4,
                'code' => 'MAQ-012',
                'name' => 'Sistema de secado',
                'type' => 'Secado',
                'status' => 'mantenimiento',
                'criticality' => 'alta',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
