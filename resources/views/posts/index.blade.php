@extends('layouts.app')

@section('content')

<div class="container">
@foreach ($posts as $post)

    <div class="jumbotron">
    
    
    <div class="card" style="width: 18rem;">
    

  <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" width="atuo;" height="auto;" alt="Image">
  <div class="card-body">
    <h3 class="card-title"> {{ $post->title }}</h3>
    <p class="card-text">{{ $post->content }}</p>
    
  </div>
  

</div>
@endforeach

    </div>
</div>

@endsection