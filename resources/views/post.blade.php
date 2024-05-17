@extends('layouts.main')

{{-- @dd($post) --}}
@section('container')
    <article class="mb-10">

        <h2> {{ $post->title }}</h2>
        {!! $post->body !!}
      {{-- {!! $post->body !!} --}}
    </article>
@endsection
