@extends('layouts.app')

@section('content')

<h1>Create your post</h1>

<div class="container">
<div class="jumbotron">
<form action="" method="POST" enctype="multipart/form-data">
@csrf
<div class="form-group">
<label>Title:</label>
<input type="text" name="title" class="form-control" placeholder="Enter the Title">
</div>
<div class="form-group">
<label>Content:</label>
<input type="text" name="content" class="form-control" placeholder="Enter the content">
</div>
<label>Image:</label>
<div class="input-group">
    <div class="custom-file">
    <input type="file" name="image" class="custom-file-input">
    <label class="custom-file-label">Choose file:</label>
    </div>
</div>

<br><br>

<button type="submit" name="submit" class="btn btn-primart btn-lg"> Send: </button>

</form>
</div>

</div>
@endsection