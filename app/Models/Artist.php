<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;

    public function media()
    {
        return $this->hasMany('App\Models\Media');
    }

    public function album()
    {
        return $this->hasMany('App\Models\Album');
    }

}
