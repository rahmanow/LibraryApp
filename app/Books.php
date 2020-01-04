<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $fillable=['book_name', 'release_date'];

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }
}
