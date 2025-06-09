<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teachers = [
            [
                'name' => 'Juan Pérez',
                'email' => 'juan@sena.edu.co',
                'area_id' => 1,
                'training_center_id' => 1
            ],
            [
                'name' => 'María López',
                'email' => 'maria@sena.edu.co',
                'area_id' => 2,
                'training_center_id' => 1
            ],
            [
                'name' => 'Carlos Rodríguez',
                'email' => 'carlos@sena.edu.co',
                'area_id' => 3,
                'training_center_id' => 2
            ],
        ];

        foreach ($teachers as $teacher) {
            Teacher::create($teacher);
        }
    }
}
