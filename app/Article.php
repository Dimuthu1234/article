<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($article){
            $article->slug = str_slug($article->title);
        });
    }

    protected $fillable = [
        'title',
        'short_description',
        'meta_description',
        'description',
        'thumbnail',
        'image',
        'is_enable',
        'user_id',
        'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function metaKeywords()
    {
        return $this->belongsToMany('App\MetaKeyword')
            ->withTimestamps();
    }

    public function getMetaKeywordListAttribute()
    {
        return $this->metaKeywords->pluck('id')->all();
    }

}
