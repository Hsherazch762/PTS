<?php

namespace Database\Seeders;
use App\Models\Course;
use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $chapters = [
            ['title' => 'Chapter 1', 'body' => [['Chapter 1 Content']]],
            ['title' => 'Chapter 2', 'body' => [['Chapter 2 Content']]],
            ['title' => 'Chapter 3', 'body' => [['Chapter 3 Content']]],
            ['title' => 'Chapter 4', 'body' => [['Chapter 4 Content']]],
            ['title' => 'Chapter 5', 'body' => [['Chapter 5 Content']]],
        ];

        $courses = Course::all();


        foreach ($courses as $course) {
            foreach ($chapters as $chapter) {
                $course->chapters()->create([
                    'title' => $chapter['title'],
                    'slug' => str()->slug($chapter['title']),
                    'body' => json_encode($chapter['body']),
                    'board_id' => $course->board_id,
                    'level_id' => $course->level_id
                ]);
            }
        }
    }
}
