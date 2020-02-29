<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable = ['title','image','content'];

    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    
}
