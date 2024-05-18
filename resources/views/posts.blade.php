@extends('layouts.main')

{{-- @dd($posts) --}}
@section('container')
    <h1 class="mb-5">Halaman Blog Post</h1>

    @foreach ($posts as $post)
        <article class="mb-5 border-bottom">
            <h3> <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }} </a></h3>
            <p>by.
                <a href="">{{ $post->user->name }}</a>
                <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none">{{ $post->category->name }}</a>
            </p>

            <p> {{ $post->excerpt }}</p>

            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">Read more...</a>
        </article>
    @endforeach
@endsection
