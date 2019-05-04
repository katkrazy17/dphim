<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    $name = $faker->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('123456'),
        'remember_token' => Str::random(10),
    ];
});

//create factory for Profile table
$factory->define(App\Models\Profile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->randomElement(App\Models\User::pluck('id')->toArray()),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
    ];
});

//create factory for Admin table
$factory->define(App\Models\Admin::class , function (Faker $faker) {
    return [
        'admin_name' => 'Admin',
        'first_name' => 'Dphim',
        'last_name' => 'Online',
        'slug' => 'dphim-online',
        'email' => 'dphim@gmail.com',
        'gender' => 1,
        'phone' => null,
        'avatar' => null,
        'password' => Hash::make('123456'),
    ];
});

//create factory for Category table
$factory->defineAs(App\Models\Category::class, 'parentCategory', function (Faker $faker) {
    $name = $faker->unique()->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'parent_id' => null,
    ];
});

$factory->defineAs(App\Models\Category::class, 'category', function (Faker $faker) {
    $name = $faker->unique()->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
        'parent_id' => $faker->randomElement(App\Models\Category::whereNull('parent_id')->pluck('id')->toArray()),
    ];
});

//create factory for Tag table
$factory->define(App\Models\Tag::class, function (Faker $faker) {
    $name = $faker->unique()->name;
    return [
        'name' => $name,
        'slug' => str_slug($name),
    ];
});

//create factory for Director table
$factory->define(App\Models\Director::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'slug' => str_slug($firstName . " " . $lastName),
        'job' => "director",
    ];
});

//create factory for Actor table
$factory->define(App\Models\Actor::class, function (Faker $faker) {
    $firstName = $faker->firstName;
    $lastName = $faker->lastName;
    return [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'slug' => str_slug($firstName . " " . $lastName),
        'job' => "actor",
    ];
});

//create factory for Film table
$factory->define(App\Models\Film::class, function (Faker $faker) {
    $title = $faker->catchPhrase;
    return [
        'title' => $title,
        'slug' => str_slug($title),
        'description' => $faker->text(200),
        'avatar' => $faker->imageUrl($width = 640, $height = 480),
        'content' => $faker->text(600),
        'release_date' => $faker->dateTime($max = 'now'),
        'run_time' => $faker->numberBetween($min = 120, $max = 360),
        'quality' => $faker->randomElement($array = array('HD', 'Full HD', 'Cam')),
        'resolution' => $faker->randomElement($array = array('HD', 'Full HD', 'Cam')),
        'language' => 'Phụ đề việt + Thuyết minh',
        'viewed' => $faker->numberBetween($min = 100, $max = 1000),
        'distributor' => 'Marvel Studios',
        'director_id' => $faker->randomElement(App\Models\Director::pluck('id')->toArray()),
    ];
});

//create factory for Episode table
$factory->define(App\Models\Episode::class, function (Faker $faker) {
    return [
        'film_id' => $faker->unique(true)->randomElement(App\Models\Film::pluck('id')->toArray()),
        'episode' => $faker->numberBetween($min = 1, $max = 25),
        'link' => $faker->url,
    ];
});

//create factory for Advertisement table
$factory->define(App\Models\Advertisement::class, function (Faker $faker) {
    return [
        'distributor' => $faker->name,
        'link' => $faker->url,
        'position' => $faker->unique()->numberBetween($min = 1, $max = 10),
    ];
});

//create factory for Comment table
$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(App\Models\User::pluck('id')->toArray()),
        'film_id' => $faker->randomElement(App\Models\Film::pluck('id')->toArray()),
        'content' => $faker->text(200),
    ];
});

//create factory for Global_setting table
$factory->define(App\Models\GlobalSetting::class, function (Faker $faker) {
    return [
        'company_name' => $faker->company,
        'company_phone' => $faker->phoneNumber,
        'company_email' => $faker->email,
        'company_facebook' => $faker->url,
        'company_youtube' => $faker->url,
        'company_googleplus' => $faker->url,
        'company_address' => $faker->address,
        'company_copyright' => $faker->address,
    ];
});

//create factory for Tracker table
$factory->define(App\Models\Tracker::class, function (Faker $faker) {
    $browser = ["Chrome" => "Chrome", "Safari" => "Safari", "FireFox" => "FireFox", "Opera" => "Opera"];
    $device = ['Điện thoại' => 'Điện thoại', 'Laptop' => 'Laptop', 'Máy tính' => 'Máy tính', 'NoteBook' => 'NoteBook'];
    return [
        'ip_add' => $faker->ipv4,
        'device' => array_rand($device),
        'browser_name' => array_rand($browser),
        'browser_vesion' => $faker->chrome,
        'browser_platform' => $faker->chrome,
        'film_id' => $faker->randomElement(App\Models\Film::pluck('id')->toArray()),
    ];
});



