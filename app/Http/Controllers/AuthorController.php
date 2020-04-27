<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Author;
use App\Comment;

class AuthorController extends Controller
{
    public function overview()
    {
        $authors = Author::orderBy('id', 'asc')->get();

        return view('authors.overview', [
            'authors' => $authors
        ]);
    }

    public function detail($id)
    {
        $author = Author::findorfail($id);

        return view('authors.detail', [
            'author' => $author
        ]);
    }

    public function blogposts($id)
    {
        $author = Author::findorfail($id);
        $blogposts = $author->blogposts;

        return view('authors.blogposts', [
            'author' => $author,
            'blogposts' => $blogposts
        ]);
    }
}
