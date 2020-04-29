{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Blogposts » Authors - Detail')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/') }}/">My Blog</a> &raquo; <a href="{{ url('/') }}/authors">Authors</a> &raquo; {{ $author->firstname }} {{ $author->lastname }}</p>

    <section class="author">
        <article>
            <h1>{{ $author->firstname }} {{ $author->lastname }}</h1>
            <dl class="clearfix">
                <dt>E-mail address</dt>
                <dd><a href="mailto:{{ $author->email }}">{{ $author->email}}</a></dd>
                <dt>Website</dt>
                @if ($author->website)
                <dd><a href="http://{{ $author->website }}">{{ $author->website }}</a></dd>
                @else
                <dd><span class="mute">(no website)</span></dd>
                @endif
                <dt>Location</dt>
                <dd>{{ $author->location }}</dd>
                <dt>Blogposts</dt>
                <dd><a href="{{ url('/authors/' . $author->id . '/blogposts') }}">Show blogposts &rarr;</a></dd>
            </dl>
        </article>
    </section>
    <p><a href="{{ url('/') }}/authors">&larr; Back to author overview</a></p>
@endsection
