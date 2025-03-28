<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Municipality;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $municipalities = [
            ['name' => 'Atiquizaya', 'department_id' => 1],
            ['name' => 'El Refugio', 'department_id' => 1],
            ['name' => 'San Lorenzo', 'department_id' => 1],
            ['name' => 'Turín', 'department_id' => 1],
            ['name' => 'Ahuachapán', 'department_id' => 2],
            ['name' => 'Apaneca', 'department_id' => 2],
            ['name' => 'Concepción de Ataco', 'department_id' => 2],
            ['name' => 'Tacuba', 'department_id' => 2],
            ['name' => 'Guaymango', 'department_id' => 3],
            ['name' => 'Jujutla', 'department_id' => 3],
            ['name' => 'San Francisco Menéndez', 'department_id' => 3],
            ['name' => 'San Pedro Puxtla', 'department_id' => 3],

            // Cabañas
            ['name' => 'Guacotecti', 'department_id' => 4],
            ['name' => 'San Isidro', 'department_id' => 4],
            ['name' => 'Sensuntepeque', 'department_id' => 4],
            ['name' => 'Victoria', 'department_id' => 4],
            ['name' => 'Dolores', 'department_id' => 4],
            ['name' => 'Cinquera', 'department_id' => 5],
            ['name' => 'Ilobasco', 'department_id' => 5],
            ['name' => 'Jutiapa', 'department_id' => 5],
            ['name' => 'Tejutepeque', 'department_id' => 5],
            ['name' => 'San Ignacio', 'department_id' => 8],


            // Chalatenango
            ['name' => 'Citalá', 'department_id' => 6],
            ['name' => 'La Palma', 'department_id' => 6],
            ['name' => 'San Ignacio', 'department_id' => 6],

            ['name' => 'Agua Caliente', 'department_id' => 7],
            ['name' => 'Dulce Nombre de María', 'department_id' => 7],
            ['name' => 'El Paraíso', 'department_id' => 7],
            ['name' => 'La Reina', 'department_id' => 7],
            ['name' => 'Nueva Concepción', 'department_id' => 7],
            ['name' => 'San Fernando', 'department_id' => 7],
            ['name' => 'San Francisco Morazán', 'department_id' => 7],
            ['name' => 'San Rafael', 'department_id' => 7],
            ['name' => 'Santa Rita', 'department_id' => 7],
            ['name' => 'Tejutla', 'department_id' => 7],

            ['name' => 'Arcatao', 'department_id' => 8],
            ['name' => 'Azacualpa', 'department_id' => 8],
            ['name' => 'Chalatenango', 'department_id' => 8],
            ['name' => 'Cancasque', 'department_id' => 8],
            ['name' => 'Comalapa', 'department_id' => 8],
            ['name' => 'Concepción Quezaltepeque', 'department_id' => 8],
            ['name' => 'El Carrizal', 'department_id' => 8],
            ['name' => 'La Laguna', 'department_id' => 8],
            ['name' => 'Las Vueltas', 'department_id' => 8],
            ['name' => 'Nueva Trinidad', 'department_id' => 8],
            ['name' => 'Ojos de Agua', 'department_id' => 8],
            ['name' => 'Potonico', 'department_id' => 8],
            ['name' => 'San Antonio de la Cruz', 'department_id' => 8],
            ['name' => 'San Antonio Los Ranchos', 'department_id' => 8],
            ['name' => 'San Francisco Lempa', 'department_id' => 8],
            ['name' => 'San Isidro Labrador', 'department_id' => 8],
            ['name' => 'San Luis del Carmen', 'department_id' => 8],
            ['name' => 'San Miguel de Mercedes', 'department_id' => 8],
            ['name' => 'Las Flores', 'department_id' => 8],
            ['name' => 'Nombre de Jesús', 'department_id' => 8],


            // Cuscatlán
            ['name' => 'Suchitoto', 'department_id' => 9],
            ['name' => 'San José Guayabal', 'department_id' => 9],
            ['name' => 'Oratorio de Concepción', 'department_id' => 9],
            ['name' => 'San Bartolomé Perulapía', 'department_id' => 9],
            ['name' => 'San Pedro Perulapán', 'department_id' => 9],

            ['name' => 'Candelaria', 'department_id' => 10],
            ['name' => 'Cojutepeque', 'department_id' => 10],
            ['name' => 'El Carmen', 'department_id' => 10],
            ['name' => 'El Rosario', 'department_id' => 10],
            ['name' => 'Monte San Juan', 'department_id' => 10],
            ['name' => 'San Cristóbal', 'department_id' => 10],
            ['name' => 'San Rafael Cedros', 'department_id' => 10],
            ['name' => 'San Ramón', 'department_id' => 10],
            ['name' => 'Santa Cruz Analquito', 'department_id' => 10],
            ['name' => 'Santa Cruz Michapa', 'department_id' => 10],
            ['name' => 'Tenancingo', 'department_id' => 10],

            // La Libertad
            ['name' => 'Quezaltepeque', 'department_id' => 11],
            ['name' => 'San Matías', 'department_id' => 11],
            ['name' => 'San Pablo Tacachico', 'department_id' => 11],

            ['name' => 'San Juan Opico', 'department_id' => 12],
            ['name' => 'Ciudad Arce', 'department_id' => 12],

            ['name' => 'Colón', 'department_id' => 13],
            ['name' => 'Jayaque', 'department_id' => 13],
            ['name' => 'Sacacoyo', 'department_id' => 13],
            ['name' => 'Tepecoyo', 'department_id' => 13],
            ['name' => 'Talnique', 'department_id' => 13],

        ];

        foreach ($municipalities as $municipality) {
            Municipality::create($municipality);
        }
    }
}
