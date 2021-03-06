<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        factory(\App\User::class, 10)->create()->each(function ($user) {
            $user->posts()->saveMany(factory(\App\Post::class, 3)->make());
        });
    }
}
