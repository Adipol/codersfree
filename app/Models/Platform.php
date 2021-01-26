<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    //NOTE relacion uno a muchos    
    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
