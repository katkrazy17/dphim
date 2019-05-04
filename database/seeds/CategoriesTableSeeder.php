<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        factory(Category::class, 'parentCategory')->times(8)->create();

        factory(Category::class, 'category')->times(20)->create();
    }
}
