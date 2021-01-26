<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // NOTE declaración de constantes
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    // NOTE relacion uno a muchos
    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function requirements()
    {
        return $this->hasMany('App\Models\Requirement');
    }

    public function goals()
    {
        return $this->hasMany('App\Models\Goal');
    }

    public function audiences()
    {
        return $this->hasMany('App\Models\Audience');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    // NOTE relacion uno a muchos inversa

    //public function user()
    public function teacher()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function level()
    {
        return $this->belongsTo('App\Models\Level');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }

    // NOTE relacion muchos a muchos
    //public function users()
    public function students()
    {
        return $this->belongsToMany('App\Models\User', 'user_id');
    }

    //NOTE relacion uno a uno polimorfica
    public function image()
    {
        return $this->morphOne('App\Models\Image', 'imageable');
    }

    //NOTE relacion de curso con lecciones
    public function lessons()
    {
        return $this->hasManyThrough('App\Models\Lesson', 'App\Models\Section');
    }
}
