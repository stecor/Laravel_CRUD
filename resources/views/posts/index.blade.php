<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title')
  All my posts
@endsection


@section('sidebar')
  This is the side menu  
@endsection


@section('content')
  
  @foreach ($posts as $post)
    
    <a href="/posts/title">
      <h1>Title of posts</h1>
    </a>
    <p>Title of posts</p>
    <hr>
    
  @endforeach 
   
@endsection