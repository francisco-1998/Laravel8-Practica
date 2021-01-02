<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course1 = new Course();
        $course1->name = 'Angular 11+';
        $course1->description = 'Es un framework muy completo en el mundo de Javascript';
        $course1->category = "Desarrollo fronted";
        $course1->save();

        $course2 = new Course();
        $course2->name = 'Laravel 8';
        $course2->description = 'Es un framework bacanisimo, me sentia bot hace unos meses y ahora ya le estoy agarrando la onda';
        $course2->category = "Desarrollo backend";
        $course2->save();

        Course::factory(20)->create();
    }
}
