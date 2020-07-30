<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Blog::class, function (Faker $faker) {
    $title = rtrim($faker->sentence(rand(5, 10)), ".");
    $slug  = Str::slug($title);
    return [
        'title' => $title,
        'image' => $faker->image('public/storage/',640,480, null, false),
        'slug'  => $slug,
        'body' => $faker->paragraph,
    ];
});
