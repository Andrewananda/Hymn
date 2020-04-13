<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function song() {
       return $this->hasMany(Song::class);
    }
}
