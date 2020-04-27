<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['content', 'author', 'email'];

    public function blogpost()
    {
        return $this->belongsTo('App\Blogpost');
    }
}
