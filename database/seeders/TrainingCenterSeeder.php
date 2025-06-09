<?php

namespace Database\Seeders;

use App\Models\TrainingCenter;
use Illuminate\Database\Seeder;

class TrainingCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $centers = [
            ['name' => 'SENA Centro de Software', 'location' => 'Bogotá'],
            ['name' => 'SENA Centro Industrial', 'location' => 'Medellín'],
            ['name' => 'SENA Centro Tecnológico', 'location' => 'Cali'],
        ];

        foreach ($centers as $center) {
            TrainingCenter::create($center);
        }
    }
}
