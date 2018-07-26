<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        $post = Post::create([
            'name' => 'Surabaya'
        ]);
        $post = Post::create([
            'name' => 'Malang'
        ]);
        $post = Post::create([
            'name' => 'Bali'
        ]);
        $post = Post::create([
            'name' => 'Jakarta'
        ]);
    }
}
    