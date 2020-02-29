<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function news()
    {
        return $this->belongsToMany('App\models\News', 'news_category');
    }
}

