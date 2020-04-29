{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Blogposts')

@section('content')
    <p class="breadcrumb"><a href="{{ url('/')}}/">My Blog</a> &raquo; Blogposts</p>

    <section class="blogposts">
        @if ($blogposts)
            @forelse ($blogposts as $blogpost)
                <article>
                    <h1><a href="{{ url('/blogposts/' . $blogpost->id)}}" title="{{ $blogpost->title }}">{{ $blogpost->title }}</a></h1>
                    <footer><p>Written by <em><a href="{{url('/authors/' . $blogpost->author_id)}}">{{ $blogpost->author->firstname }} {{ $blogpost->author->lastname }}</a></em> on <em>{{ $blogpost->created_at }}</em></p></footer>
                </article>
            @empty
                <p>No blogposts to show!</p>
            @endforelse

        @endif
    </section>


@endsection
