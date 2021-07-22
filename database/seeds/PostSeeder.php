<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 15 ; $i++) { 
            $post = new Post();
            $post->title = $faker->sentence(3);
            $post->image = $faker->imageUrl(640, 480, 'Post', true, $post->title, true);
            $post->content = $faker->text();
            $post->save();
        }
    }
}
