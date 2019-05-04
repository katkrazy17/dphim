<?php

use Illuminate\Database\Seeder;
use App\Models\Trailer;

class TrailersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trailer::truncate();

        $faker = Faker\Factory::create();
        $date = $faker->dateTimeBetween($startDate = '-5 days', $endDate = '+0 days');
        for ($i = 0; $i < 50; $i++) {
            Trailer::insert([
                'film_id' => $i + 1,
                'link' => $faker->url,
                'created_at' => $date,
                'updated_at' => $date,
            ]);
        }
    }
}
