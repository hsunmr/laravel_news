<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = [];

    
    public function news()
    {
        return $this->belongsTo('App\models\News');
    }
    
}
