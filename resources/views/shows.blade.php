@extends('layout.layouts')
@section('content')
        {{ $user->name }} - {{ $user->post->title }}
@endsection