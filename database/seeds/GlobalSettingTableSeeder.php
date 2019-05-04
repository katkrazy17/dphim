<?php

use Illuminate\Database\Seeder;
use App\Models\GlobalSetting;

class GlobalSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GlobalSetting::truncate();

        factory(GlobalSetting::class, 1)->create();
    }
}
