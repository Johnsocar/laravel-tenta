@extends('welcome')

@section('content')

{{ $user->name }} - {{ $user->post->title }}

@endsection