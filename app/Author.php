<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable=['author_name', 'age', 'address'];

    public function books()
    {
        return $this->hasMany(Book::class, 'author_id'); // assign foreign key id. (default is authors_id)
    }
}
