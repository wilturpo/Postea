<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
/*
use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Storage;

$factory->define(Post::class, function (Faker $faker) {

    $users = User::all();
    $users_ids = array();

    foreach ($users as $user) {
        $users_ids[]=$user->id;
    }

    $user_id = $users_ids[array_rand($users_ids)];
    Storage::disk('public')->makeDirectory('posts/'.$user_id);
    return [
        'title' => $faker->sentence(5),
        'image' => $faker->imageUrl('public/storage/posts/'.$user_id,400,300),
        'email_verified_at' => now(),
        'content' => $faker->paragraph(3),
        'user_id'=>$user_id,
    ];
});

*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(5),
        'image' => $faker->imageUrl(400,300),
        'email_verified_at' => now(),
        'content' => $faker->paragraph(3),
    ];
});
