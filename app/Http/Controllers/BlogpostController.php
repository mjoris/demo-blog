<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Author;
use App\Comment;

class BlogpostController extends Controller
{
    public function overview()
    {
        $blogposts = Blogpost::orderBy('created_at', 'asc')->get();

        return view('blog.overview', [
            'blogposts' => $blogposts
        ]);
    }


    public function detail($id)
    {
        $blogpost = Blogpost::findOrFail($id);
        return view('blog.detail', [
            'blogpost' => $blogpost
        ]);
    }


    public function comments($id)
    {
        $blogpost = Blogpost::findOrFail($id);
        $comments = $blogpost->comments; // can be applied in Blade directly (!)

        return view('blog.comments', [
            'blogpost' => $blogpost,
            'comments' => $comments
        ]);
    }
}
