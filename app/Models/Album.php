<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    public function artist()
    {
        return $this->belongsTo('App\Models\Artist');
    }

    public function media()
    {
        return $this->hasMany('App\Models\Media');
    }
}
