<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $guarded =[];

    
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function comments()
    {
        return $this->hasMany('App\models\comment');
    }
    
    
    
}
