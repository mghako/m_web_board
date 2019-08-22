<?php

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
        factory(App\Board::class, 10)->create()->each(function($board){
            $board->user()->save(factory(App\User::class)->make());
        });
    }
}
