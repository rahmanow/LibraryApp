<?php
use App\Author;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed 3 rows of random data for each author
        Author::all()->each(function($author){
            factory('App\Book', 3)->create(['author_id' => $author->id]);
        });
    }
}
