<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i = 0; $i < 10; $i ++) {
//            $post = new \App\Post();
//            $post->name = \Illuminate\Support\Str::random();
//            $post->content = 'random content';
//            $post->save();
//        }

        factory(App\Post::class, 50)->create();

    }
}
