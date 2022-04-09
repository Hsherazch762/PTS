<?php

namespace Database\Seeders;

use App\Models\Board;
use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $boards = [
            'Punjab Text Board',
            'Cambridge',
            'Afaq Publishers',
            'Single National Curriculum',
        ];

        foreach($boards as $board) {
            Board::factory()->create([
                'title' => $board,
                'slug' => str()->slug($board)
            ]);
        }
    }
}
