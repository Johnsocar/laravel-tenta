@extends('layouts.app')

@section('content')

<div class="container">


@foreach ($posts as $post)

    <div class="jumbotron">
    
    
    <div class="card" style="width: 30rem;">
    

  <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" width="auto;" height="auto;" alt="Image">
  <div class="card-body">
  <h4><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4>
    
    <p class="card-text">{{ $post->content }}</p>
    
  </div>
  

</div>
@endforeach

    </div>
</div>

@endsection