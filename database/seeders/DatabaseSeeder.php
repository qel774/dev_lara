<?php

namespace Database\Seeders;

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
        //\App\Models\User::factory(10)->create();
        //$this->call(PeopleTableSeeder::class);
        //$this->call(PostTableSeeder::class);
        //$this->call(TagTableSeeder::class);
        //$this->call(PostTagTableSeeder::class);

        //\App\Models\Test::factory(10)->create();
        \App\Models\Book::factory(3)->create();
    }
}
