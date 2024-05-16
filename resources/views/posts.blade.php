@extends('layouts.main')

{{-- @dd($posts) --}}
{{-- @dd($posts) --}}
@section('container')
     
        @foreach($posts as $post)
          <article class="mb-10">
                <h2> 
                  <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }} </a>
                </h2>
                
                </h2>

                <h2> {{ $post["author"] }}</h2>
                <h5> {{ $post["author"] }}</h5>
                <p> {{ $post["body"] }}</p>

          </article>
        @endforeach


@endsection



