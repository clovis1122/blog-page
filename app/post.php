<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $guarded = [];

    public function comments()
    {
      return $this->hasMany(comment::class);
    }
}
