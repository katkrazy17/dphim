<?php

use Illuminate\Database\Seeder;
use App\Models\Episode;

class EpisodesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Episode::truncate();

        factory(Episode::class, 30)->create();
    }
}
