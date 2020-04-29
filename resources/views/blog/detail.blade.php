{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Blogposts » Detail')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">My Blog</a> &raquo; Blogposts</p> &raquo; <a href="{{ url('/') }}/blog">Blogposts</a> &raquo; {{ $blogpost->title }}</p>

<section class="blogpost">
    <article>
        <h1>{{ $blogpost->title }}</h1>
        <footer><p>Written by <em><a href="{{ url('/authors/' . $blogpost->author_id) }}">{{ $blogpost->author->firstname }} {{ $blogpost->author->lastname }}</a></em> on <em>{{ $blogpost->created_at }}</em></p></footer>
        <blockquote>{!! $blogpost->content !!}</blockquote>
        <p>Comments: <a href="{{ url('/blogposts/' . $blogpost->id . '/comments' ) }}">{{ $blogpost->comments->count() }}</a></p>
    </article>
</section>
<p><a href="{{ url('/blog') }}">&larr; Back to blog overview</a></p>
@endsection
