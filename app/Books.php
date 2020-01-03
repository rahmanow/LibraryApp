<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    public function user()
    {
        return $this->belongsTo(Authors::class);
    }
}
