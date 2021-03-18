<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    //relacion uno a muchos (inversa)
    public function user(){
        retunr $this->belongsTo('App\Models\User');
    }


    //Relacion  polimorfica
    public function commentable(){
        return $this->morphTo();
    }
}
