<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['firstname', 'lastname', 'email', 'website', 'location', 'password'];

    public function blogposts()
    {
        return $this->hasMany('App\Blogpost');
    }
}
