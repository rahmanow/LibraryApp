<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable=['book_name', 'release_date'];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
