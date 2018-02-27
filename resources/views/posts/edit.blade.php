<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title')
  All my posts
@endsection


@section('content')
  <form action="/posts/title" method="POST">
    {{ csrf_field() }}
    @method('PUT')
    <h1>Edit a post</h1>
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="content" placeholder="Content" name="content"></textarea>
    </div>

    <div >
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
@endsection