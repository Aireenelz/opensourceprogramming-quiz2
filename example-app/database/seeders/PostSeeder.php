<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        Post::create(['title' => 'First Post', 'content' => 'This is the content of the first post.']);
        Post::create(['title' => 'Second Post', 'content' => 'This is the content of the second post.']);
        Post::create(['title' => 'Another Post', 'content' => 'Content related to digital privacy.']);
    }
}
