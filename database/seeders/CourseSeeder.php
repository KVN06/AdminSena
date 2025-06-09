<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'course_number' => 'ADSO-001',
                'day' => 'Lunes',
                'area_id' => 1,
            ],
            [
                'course_number' => 'ADSO-002',
                'day' => 'Martes',
                'area_id' => 1,
            ],
            [
                'course_number' => 'RED-001',
                'day' => 'Miércoles',
                'area_id' => 2,
            ],
        ];

        foreach ($courses as $course) {
            $courseModel = Course::create($course);
            // Asignar profesores aleatoriamente
            $teachers = Teacher::inRandomOrder()->take(2)->get();
            $courseModel->teachers()->attach($teachers->pluck('id'));
        }
    }
}
