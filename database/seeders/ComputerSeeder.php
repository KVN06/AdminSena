<?php

namespace Database\Seeders;

use App\Models\Computer;
use Illuminate\Database\Seeder;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $computers = [
            [
                'brand' => 'Dell',
                'number' => 'DELL001',
                'training_center_id' => 1
            ],
            [
                'brand' => 'HP',
                'number' => 'HP002',
                'training_center_id' => 1
            ],
            [
                'brand' => 'Lenovo',
                'number' => 'LEN003',
                'training_center_id' => 2
            ],
            [
                'brand' => 'Apple',
                'number' => 'APPLE004',
                'training_center_id' => 3
            ],
        ];

        foreach ($computers as $computer) {
            Computer::create($computer);
        }
    }
}