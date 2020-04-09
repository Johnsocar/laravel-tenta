@extends('layouts.app')

@section('content')

<h1 style="text-align: center;">Create your post</h1>

<div class="container">
<div class="jumbotron">
<form action="{{ route('addpost') }}" method="POST" enctype="multipart/form-data">
@csrf

<div class="form-group">
<label>Title:</label>
<input type="text" name="title" class="form-control" placeholder="Enter the Title">
</div>
<div class="form-group">
<label>Content:</label>
<!-- <input type="text" cols="40" rows="5" style="height: 60px;" name="content" class="form-control" placeholder="Enter the content"> -->
<textarea name="content" class="form-control" cols="40" rows="5"></textarea>
</div>
<label>Image:</label>
<div class="input-group">
    <div class="custom-file">
    <input type="file" name="image" class="custom-file-input">
    <label class="custom-file-label">Choose file:</label>
    </div>
        <div class="form-group">
        <fieldset>
        <input type="checkbox" name="tags[]" value="sport">Sport<br />
        <input type="checkbox" name="tags[]" value="funny">Funny things<br />
        <input type="checkbox" name="tags[]" value="animals">Animals<br />
        <input type="checkbox" name="tags[]" value="random">Random things<br />

        </fieldset>
    </div> 
</div>

<br><br>

<button type="submit" name="user_id" class="btn btn-primary btn-lg"> Send </button>

</form>
</div>

</div>
@endsection