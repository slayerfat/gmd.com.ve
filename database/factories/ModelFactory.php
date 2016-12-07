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

$factory->define(App\Course::class, function (Faker\Generator $faker) {
    return [
        'title'           => $faker->words(3, true),
        'description'     => $faker->sentence(20),
        'image_big_url'   => 'http://placehold.it/512',
        'image_small_url' => 'http://placehold.it/1024',
    ];
});
