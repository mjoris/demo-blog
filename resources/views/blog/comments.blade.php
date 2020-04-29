{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Blogposts » Comments')

@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">My Blog</a> &raquo; <a href="{{ url('blog') }}">Blogposts</a> &raquo; <a href="{{ url('blogposts/' . $blogpost->id)}}">{{ $blogpost->title }}</a> &raquo; Comments</p>

<section class="comments">
    <h1>Comments on &ldquo;{{ $blogpost->title }}&rdquo;</h1>
    @if ($comments)
        @forelse ($comments as $comment)
            <article>
                <p>On <em>{{ $comment->created_at }}</em>, <em><a href="mailto:{{ $comment->email }}">{{ $comment->author }}</a></em> wrote:</p>
                <blockquote>{!! $comment->content !!}</blockquote>
            </article>
        @empty
            <p>No comments to show!</p>
        @endforelse
    @endif
</section>

<p><a href="{{ url('/blogposts')}}/{{ $blogpost->id }}">&larr; Back to blogpost</a></p>
@endsection
