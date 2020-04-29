{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Authors » Detail » Blogposts')


@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}">My Blog</a> &raquo;
    <a href="{{ url('authors') }}">Authors</a> &raquo; <a href="{{ url('authors/' . $author->id) }}">{{ $author->firstname }} {{ $author->lastname }}</a> &raquo; Blogposts</p>

<section class="authorblogposts">
    <h1>Blogposts by &ldquo;{{ $author->firstname }} {{ $author->lastname }}&rdquo;</h1>
    @if ($blogposts)
    <ul>
        @foreach ($blogposts as $blogpost)
        <li><a href="{{ url('blogposts/' . $blogpost->id) }}">{{ $blogpost->title }}</a></li>
        @endforeach
    </ul>
    @else
        <p>No blogposts to show!</p>
    @endif
</section>

<p><a href="{{ url('authors/' . $author->id) }}">&larr; Back to author detail</a></p>
@endsection
