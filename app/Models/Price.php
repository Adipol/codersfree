<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //NOTE Relacion uno a mucho
    public function courses()
    {
        return $this->hasMany('App\MOdels\Course');
    }
}
