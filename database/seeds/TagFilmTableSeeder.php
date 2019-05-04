<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Tag;
use App\Models\Film;

class TagFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tag_film')->truncate();

        $tag = Tag::all();

        Film::all()->each(function ($film) use ($tag) {
            $film->tags()->attach($tag->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}
