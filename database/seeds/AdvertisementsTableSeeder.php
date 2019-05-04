<?php

use Illuminate\Database\Seeder;
use App\Models\Advertisement;

class AdvertisementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advertisement::truncate();

        factory(Advertisement::class, 10)->create();
    }
}
