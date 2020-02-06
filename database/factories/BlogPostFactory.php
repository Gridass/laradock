<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Article::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3,8), true);
    $txt = $faker->realText(rand(200,400));
    $isPublished = rand(1,0) > 0;
    $createdAt = $faker->dateTimeBetween('-3 months', '-2 days');

    $data = [
        'user_id' => (rand(1,5) == 5) ? 1 : 2,
        'title' => $title,
        'slug' => Str::slug($title,'-'),
        'description_short' => $txt,
        'description' => $txt,
        'image' => null,
        'image-show' =>null,
        'published' => $isPublished,
        'created_at' =>$createdAt,
        'updated_at' =>$createdAt,

    ];
    return $data;
});
