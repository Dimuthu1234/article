<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MetaKeyword extends Model
{

    protected $fillable = ['keyword'];

    public function articles()
    {
        return $this->belongsToMany('App\Article')
            ->withTimestamps();
    }

    public function getArticleListAttribute()
    {
        return $this->articles->pluck('id')->all();
    }
}
