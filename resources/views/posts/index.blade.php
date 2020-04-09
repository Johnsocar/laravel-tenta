@extends('layouts.app')

@section('content')

<div class="container">


@foreach ($user->posts as $post)

    <div class="jumbotron">
    
    
    <div class="card" style="width: 30rem;">
    

  <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" width="auto;" height="auto;" alt="Image">
  <div class="card-body">
  <h4><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></h4>
    
    <p class="card-text">{{ $post->content }}</p>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete</button>
  </form>
  </div>
  

</div>
@endforeach

    </div>
</div>

@endsection