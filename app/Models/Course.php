<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'status'];
    protected $withCount = ['students', 'reviews'];

    // NOTE declaración de constantes
    const BORRADOR = 1;
    const REVISION = 2;
    const PUBLICADO = 3;

    public function getRatingAttribute()
    {
        if ($this->reviews_count) {
            return round($this->reviews->avg('rating'), 1);
        } else {
            return 5;
        }
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

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
    //se cambio el category por que en el repositorio estaba asi
    public function category()
    {
        return $this->belongsTo('App\Models\Level');
    }
    //se cambio el price por que en el repositorio estaba asi
    public function price()
    {
        return $this->belongsTo('App\Models\Level');
    }

    // NOTE relacion muchos a muchos
    //public function users()
    public function students()
    {
        return $this->belongsToMany('App\Models\User');
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
