<?php

use Illuminate\Database\Seeder;
use App\Models\Tracker;

class TrackersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tracker::truncate();

        factory(Tracker::class, 20)->create();
    }
}
