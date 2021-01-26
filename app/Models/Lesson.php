<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    //NOTE relacion uno a uno
    public function description()
    {
        return $this->hasOne('App\Models\Description');
    }

    //NOTE relacion uno a muchos inversa
    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function platform()
    {
        return $this->belongsTo('App\Models\Platform');
    }

    //NOTE relacion muchos a muchos
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
