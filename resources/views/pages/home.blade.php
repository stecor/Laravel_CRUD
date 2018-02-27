<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.main')

@section('title')
  All my posts
@endsection


@section('sidebar')
  This is the side menu  
@endsection


@section('content')
    Welcome back, {{$user_name}}
@endsection