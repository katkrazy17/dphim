<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Film;

class StoragesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('storages')->truncate();

        $user = User::all();

        Film::all()->each(function ($film) use ($user) {
            $film->storages()->attach($user->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}
