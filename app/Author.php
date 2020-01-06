<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Author extends Model
{
    protected $fillable=[
        'author_name', 'age', 'address'
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id');
    }

    public function matchAuthor($name, $age)
    {
        return DB::table('authors')
            ->where('author_name', $name)->get()
            ->where('age', $age)->first();
    }

}
