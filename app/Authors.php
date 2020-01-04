<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function books()
    {
        return $this->hasMany(Books::class, 'author_id'); // assign foreign key id. (default is authors_id)
    }
}
