<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();

        // //DB Builder
        // DB::table('posts')->insert([
        //     'title' => $faker->text(),
        //     'description' => $faker->paragraph(),
        //     'content' => $faker->paragraph(),
        //     'thumbnail' => $faker->imageUrl()
        // ]);

        // ORM (Model)
        // Post::create([
        //     'title' => $faker->text(),
        //     'description' => $faker->paragraph(),
        //     'content' => $faker->paragraph(),
        //     'thumbnail' => $faker->imageUrl()
        // ]);

        // Factory
        Post::factory(10)->create();
    }
}
