<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Level;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            'English',
            'Urdu',
            'Mathematics',
            'Islamic Studies',
        ];

        $levels = Level::all();

        foreach($levels as $level) {
            foreach($courses as $course) {

                $level->courses()->create([
                    'title' => $course,
                    'slug' => str()->slug($course),
                    'board_id' => $level->board_id,
                ]);
            }
        }
    }
}
