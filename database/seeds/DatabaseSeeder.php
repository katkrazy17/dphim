<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //disable foreign key check for this connection before running seeders
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call([
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            AdminsTableSeeder::class,
            CategoriesTableSeeder::class,
            TagsTableSeeder::class,
            DirectorsTableSeeder::class,
            ActorsTableSeeder::class,
            FilmsTableSeeder::class,
            TrailersTableSeeder::class,
            EpisodesTableSeeder::class,
            AdvertisementsTableSeeder::class,
            CategoryFilmTableSeeder::class,
            TagFilmTableSeeder::class,
            CommentsTableSeeder::class,
            ActorFilmTableSeeder::class,
            GlobalSettingTableSeeder::class,
            HistoriesTableSeeder::class,
            StoragesTableSeeder::class,
            TrackersTableSeeder::class,
        ]);

        // supposed to only apply to a single connection and reset it's self
        // but I like to explicitly undo what I've done for clarity
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
