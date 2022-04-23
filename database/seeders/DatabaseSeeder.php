<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Enums\PostStatus;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Luis Parrado',
            'email' => 'luisprmat@gmail.com'
        ]);

        Post::factory()->create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'status' => PostStatus::DRAFT,
            'user_id' => $user->id
        ]);

        Post::factory()->create([
            'title' => 'Second Post',
            'slug' => 'second-post',
            'status' => PostStatus::PUBLISH,
            'user_id' => $user->id
        ]);

        Post::factory()->create([
            'title' => 'Third Post',
            'slug' => 'third-post',
            'status' => PostStatus::FUTURE,
            'user_id' => $user->id
        ]);
    }
}
