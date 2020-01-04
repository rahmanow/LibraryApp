<?php

use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Authors::all()->each(function($author){ factory('App\Books', 3)->create(['author_id' => $author->id]);});
    }
}
