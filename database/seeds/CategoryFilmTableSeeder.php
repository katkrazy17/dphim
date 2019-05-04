<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Film;

class CategoryFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_film')->truncate();

        $category = Category::all();

        Film::all()->each(function ($film) use ($category) {
            $film->categories()->attach($category->random(rand(1,4))->pluck('id')->toArray());
        });
    }
}
