@extends('layouts.admin')

@section('content')

<h2>Edit {{$post->title}}</h2>
@include('partials.errors')

<form action="{{route('admin.posts.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="learn php article" aria-describedby="titleHelper" value="{{old('title',$post->title)}} ">
      <small id="titleHelper" class="text-muted">Type the post title, max: 150 carachters</small>
    </div>
    
    {{-- cambiare input type file --}}
    <div class="d-flex">
        <div class="media">
            <img class="shadow" width="150" src="{{$post->cover}}" alt="{{$post->title}}">
        </div>
        <div class="form-group px-3">
            <label for="cover">Cover img</label>
            <input type="text" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" placeholder="learn php article" aria-describedby="coverHelper" value="{{old('cover',$post->cover)}}">
          </div>
    </div>

    <div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="4">
        {{old('content',$post->content)}}
    </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit</button>
</form>

@endsection