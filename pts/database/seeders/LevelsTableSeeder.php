<?php

namespace Database\Seeders;

use App\Models\Board;
use App\Models\Level;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $levels = ['One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'First Year', 'Second Year'];
        $levels = ['Nine', 'Ten', 'First Year', 'Second Year'];

        $boards = Board::all();

        foreach($boards as $board) {
            foreach($levels as $level) {

                $board->levels()->create([
                    'title' => $level,
                    'slug'  => str()->slug($level)
                ]);
            }
        }
    }
}
