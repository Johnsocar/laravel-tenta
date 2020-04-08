@extends('layouts.app')

@section('content')
<div class="container">


    <div class="jumbotron">
    
    
    <div class="card" style="width: 30rem;">
    

  <img src="{{ asset('uploads/post/' . $post->image) }}" class="card-img-top" width="auto;" height="auto;" alt="Image">
  <div class="card-body">
    <h3 class="card-title"> {{ $post->title }}</h3>
    <p class="card-text">{{ $post->content }}</p>
    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Delete</button>
  </form>

  </div>
  <form method="POST" action='{{ url("/comment/{$post->id}") }}'></form>
  @csrf
  <div class="form-group">
  <textarea class="form-control" name="comment" id="comment" cols="30" rows="10"></textarea>
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-success btn-lg btn-block">Post comment </button>
  </div>

</div>


    </div>
</div>
@endsection