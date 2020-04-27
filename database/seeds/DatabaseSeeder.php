<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
        $this->call(BlogpostsTableSeeder::class); // foreign key depends on authors
        $this->call(CommentsTableSeeder::class); // foreign key depends on blogposts
    }
}
