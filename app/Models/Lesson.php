<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //NOTE definir un atributo
    public function getCompletedAttribute()
    {
        return $this->users->contains(auth()->user()->id);
    }

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

    //NOTE relacion uno a uno polimorfica
    public function resource()
    {
        return $this->morphOne('App\Models\Resource', 'resourceable');
    }

    //NOTE relacion uno a muchos polimorfica
    public function comments()
    {
        return $this->morphMany('App\Models\Comment', 'commentable');
    }

    public function reactions()
    {
        return $this->morphMany('App\Models\Reaction', 'reactionable');
    }
}
