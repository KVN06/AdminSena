<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areas = [
            ['name' => 'Software Development'],
            ['name' => 'Networking'],
            ['name' => 'Multimedia'],
            ['name' => 'Electronics'],
        ];

        foreach ($areas as $area) {
            Area::create($area);
        }
    }
}
