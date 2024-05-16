@extends('layouts.main')

{{-- @dd($post) --}}
@section('container')

<article class="mb-10">
      
              <h2> {{ $post["author"] }}</h2>
              <h5> {{ $post["author"] }}</h5>
              <p> {{ $post["body"] }}</p>
</article>
        
     
@endsection