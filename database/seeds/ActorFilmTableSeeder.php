<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Actor;
use App\Models\Film;

class ActorFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('film_actor')->truncate();

        $actor = Actor::all();

        Film::all()->each(function ($film) use ($actor) {
            $film->actors()->attach($actor->random(rand(1, 4))->pluck('id')->toArray());
        });
    }
}
