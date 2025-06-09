<?php

namespace Database\Seeders;

use App\Models\Apprentice;
use Illuminate\Database\Seeder;

class ApprenticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $apprentices = [
            [
                'name' => 'Ana García',
                'email' => 'ana@example.com',
                'cell_number' => '3001234567',
                'course_id' => 1,
                'computer_id' => 1
            ],
            [
                'name' => 'Pedro Martínez',
                'email' => 'pedro@example.com',
                'cell_number' => '3001234568',
                'course_id' => 1,
                'computer_id' => 2
            ],
            [
                'name' => 'Laura Sánchez',
                'email' => 'laura@example.com',
                'cell_number' => '3001234569',
                'course_id' => 2,
                'computer_id' => 3
            ],
        ];

        foreach ($apprentices as $apprentice) {
            Apprentice::create($apprentice);
        }
    }
}
