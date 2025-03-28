<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\District;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            [
                'name' => 'Ahuachapán Norte',
                'municipality_id' => 1
            ],
            [
                'name' => 'Ahuachapán Centro',
                'municipality_id' => 1
            ],
            [
                'name' => 'Ahuachapán Sur',
                'municipality_id' => 1
            ],
            [
                'name' => 'Cabañas Este',
                'municipality_id' => 2
            ],
            [
                'name' => 'Cabañas Oeste',
                'municipality_id' => 2
            ],
            [
                'name' => 'Chalatenango Norte',
                'municipality_id' => 3
            ],
            [
                'name' => 'Chalatenango Centro',
                'municipality_id' => 3
            ],
            [
                'name' => 'Chalatenango Sur',
                'municipality_id' => 3
            ],
            [
                'name' => 'Cuscatlán Norte',
                'municipality_id' => 4
            ],
            [
                'name' => 'Cuscatlán Sur',
                'municipality_id' => 4
            ],
            [
                'name' => 'La Libertad Norte',
                'municipality_id' => 5
            ],
            [
                'name' => 'La Libertad Centro',
                'municipality_id' => 5
            ],
            [
                'name' => 'La Libertad Oeste',
                'municipality_id' => 5
            ],
            [
                'name' => 'La Libertad Este',
                'municipality_id' => 5
            ],
            [
                'name' => 'La Libertad Costa',
                'municipality_id' => 5
            ],
            [
                'name' => 'La Libertad Sur',
                'municipality_id' => 5
            ],
            [
                'name' => '	La Paz Oeste',
                'municipality_id' => 6
            ],
            [
                'name' => 'La Paz Centro',
                'municipality_id' => 6
            ],
            [
                'name' => 'La Paz Este',
                'municipality_id' => 6
            ],
            [
                'name' => 'La Unión Norte',
                'municipality_id' => 7
            ],
            [
                'name' => 'La Unión Sur',
                'municipality_id' => 7
            ],
            [
                'name' => 'Morazán Norte',
                'municipality_id' => 8
            ],
            [
                'name' => 'Morazán Sur',
                'municipality_id' => 8
            ],
            [
                'name' => 'San Miguel Norte',
                'municipality_id' => 9
            ],
            [
                'name' => 'San Miguel Centro',
                'municipality_id' => 9
            ],
            [
                'name' => 'San Miguel Oeste',
                'municipality_id' => 9
            ],
            [
                'name' => 'San Salvador Norte',
                'municipality_id' => 10
            ],
            [
                'name' => 'San Salvador Oeste',
                'municipality_id' => 10
            ],
            [
                'name' => 'San Salvador Este',
                'municipality_id' => 10
            ],
            [
                'name' => 'San Salvador Centro',
                'municipality_id' => 10
            ],
            [
                'name' => 'San Salvador Sur',
                'municipality_id' => 10
            ],
            [
                'name' => 'San Vicente Norte',
                'municipality_id' => 11
            ],
            [
                'name' => 'San Vicente Sur',
                'municipality_id' => 11
            ],
            [
                'name' => 'Santa Ana Norte',
                'municipality_id' => 12
            ],
            [
                'name' => 'Santa Ana Centro',
                'municipality_id' => 12
            ],
            [
                'name' => 'Santa Ana Este',
                'municipality_id' => 12
            ],
            [
                'name' => 'Santa Ana Oeste',
                'municipality_id' => 12
            ],
            [
                'name' => 'Sonsonate Norte',
                'municipality_id' => 13
            ],
            [
                'name' => 'Sonsonate Centro',
                'municipality_id' => 13
            ],
            [
                'name' => 'Sonsonate Este',
                'municipality_id' => 13
            ],
            [
                'name' => 'Sonsonate Oeste',
                'municipality_id' => 13
            ],
            [
                'name' => 'Usulután Norte',
                'municipality_id' => 14
            ],
            [
                'name' => 'Usulután Este',
                'municipality_id' => 14
            ],
            [
                'name' => 'Usulután Oeste',
                'municipality_id' => 14
            ]
        ];

        foreach ($districts as $district) {
            District::create($district);
        }
    }
}
