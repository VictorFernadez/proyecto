<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker ->randomElement(['PHP','JAVASCRIPT','JAVA','DISEÑO WEB','MYSQL','ANDROID','BIG DATA']),
        'description' => $faker->sentence
    ];
});
