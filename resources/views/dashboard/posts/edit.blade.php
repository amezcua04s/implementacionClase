@extends('layouts.master')

@section('content')

<form method="POST" action="{{route('post.update'), $post->id}}">

  @include('partials._form');

@endsection