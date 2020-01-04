<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function author()
    {
        return $this->belongsTo(Authors::class);
    }
}
