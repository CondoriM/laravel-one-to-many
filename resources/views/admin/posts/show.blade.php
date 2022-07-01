@extends('layouts.admin')

@section('content')
    <img src="{{$post->cover}}" alt="{{$post->title}}">
    <h1>{{$post->title}}</h1>
    <div class="content">
        {{$post->content}}
    </div>
@endsection