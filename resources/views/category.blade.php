@extends('layouts.main')
@section('container')
    <h1 class="mb-5">Post category : {{ $category }} </h1>
    @foreach ($posts as $post)
        <article class="mb-10">
            <h3> <a href="/posts/{{ $post->slug }}">{{ $post->title }} </a></h3>
            <p> {{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection