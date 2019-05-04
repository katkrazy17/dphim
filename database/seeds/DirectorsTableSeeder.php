<?php

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Director::truncate();

        factory(Director::class, 20)->create();
    }
}
