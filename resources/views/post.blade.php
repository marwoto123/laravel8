@extends('layouts.main')

{{-- @dd($post) --}}
@section('container')
    <article class="mb-10">

        <h2> {{ $post->title }}</h2>
        <p>by.sulhamzah <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

        {!! $post->body !!}
        {{-- {!! $post->body !!} --}}
    </article>
@endsection
