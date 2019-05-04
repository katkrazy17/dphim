<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Episode;

class HistoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('histories')->truncate();

        $user = User::all();

        Episode::all()->each(function ($episode) use ($user) {
            $episode->users()->attach($user->random(rand(1, 3))->pluck('id')->toArray());
        });
    }
}
