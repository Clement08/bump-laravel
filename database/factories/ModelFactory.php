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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(6, true),
        'content' => $faker->text,
        'user_id' => $faker->numberBetween(1, 20),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker) {
    return [
        'comment' => $faker->sentence(6, true),
        'user_id' => $faker->numberBetween(1, 20),
        'post_id' => $faker->numberBetween(1, 15),
    ];
});

$factory->define(App\Models\Project::class, function (Faker\Generator $faker) {
    return [
        'project_name' => $faker->name,
        'customer_infos' => $faker->sentence(6, true),
        'customer_adress' => $faker->address,
        'customer_email' => $faker->email,
        'customer_numberphone' => $faker->phoneNumber,
        'contact_infos' => $faker->sentence(10, true),
        'contact_adress' => $faker->address,
        'contact_email' => $faker->email,
        'contact_numberphone' => $faker->phoneNumber,
        'identity_sheet' => $faker->text(),
        'project_type' => $faker->sentence(6, true),
        'context' => $faker->text(),
        'request' => $faker->text(),
        'goals' => $faker->text(),
        'constraints' => $faker->text(),
        'user_id' => $faker->numberBetween(1, 20),
        'status' => "En attente"
    ];
});