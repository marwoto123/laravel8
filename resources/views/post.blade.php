@extends('layouts.main')

{{-- @dd($post) --}}
@section('container')
    <article class="mb-10">
        <h2> {{ $post->title }}</h2>

        <p>by.
            <a href="/authors/{{ $post->author->username }}"class="text-decoration-none">{{ $post->author->name }}</a>in
            <a href="/categories/{{ $post->category->slug }}"class="text-decoration-none ">{{ $post->category->name }}</a>
        </p>

        {!! $post->body !!}
    </article>
@endsection
