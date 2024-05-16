@extends('layouts.main')

{{-- @dd($posts) --}}
{{-- @dd($posts) --}}
@section('container')
<h1 class="mb-5">Halaman Blog</h1>

    @foreach ($posts as $post)
        <article class="mb-10">
            <h3> <a href="/posts/{{ $post->id }}">{{ $post->title }} </a></h3>
            <p> {{ $post->body }}</p>
        </article>
    @endforeach

@endsection
