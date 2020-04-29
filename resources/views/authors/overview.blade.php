{{-- extend the parent tpl --}}
@extends('master')
{{-- set the pagetitle in the parent tpl --}}
@section('title', 'My Blog » Blogposts » Authors')

@section('content')
<p class="breadcrumb"><a href="{{ url('/') }}/">My Blog</a> &raquo; Authors</p>

<section class="authors">
    <h1>Authors</h1>
        @if ($authors)
                @forelse ($authors as $author)
                <ul>
                    <li><a href="{{ url('/authors/' . $author->id) }}">{{ $author->firstname }} {{ $author->lastname }}</a></li>
                </ul>
                @empty
                <p>No authors to show!</p>
                @endforelse
    @endif
</section>
@endsection
