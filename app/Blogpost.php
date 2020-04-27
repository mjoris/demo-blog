<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $fillable = ['title', 'content'];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
