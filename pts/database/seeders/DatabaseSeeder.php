<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            BoardsTableSeeder::class,
            LevelsTableSeeder::class,
            CoursesTableSeeder::class,
            ChaptersTableSeeder::class
        ]);
    }
}
