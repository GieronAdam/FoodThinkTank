<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */



$factory->define(FoodThinkTank\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role_id' => 1,
        'photo_id' => $faker->numberBetween(1,15),
        'is_active' => 1,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(FoodThinkTank\Post::class, function (Faker\Generator $faker) {
    return [
        'category_id' => $faker->numberBetween(1,7),
        'photo_id' => $faker->numberBetween(1,15),
        'title' => $faker->sentence(7,11),
        'body' => $faker->paragraphs(rand(10,15), true)
    ];
});

$factory->define(FoodThinkTank\Role::class, function (Faker\Generator $faker) {
    return [
        'name' => 'administrator',
    ];
});

$factory->define(FoodThinkTank\Photo::class, function (Faker\Generator $faker) {

    return [
        'file' => $faker->image('public/images', 400, 300,null, false)
    ];
});

$factory->define(FoodThinkTank\Category::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->word
    ];
});