@extends('layouts.admin')

@section('content')

<h2 class="py-3">Create a new Post</h2>
@include('partials.errors')
<form action="{{route('admin.posts.store')}}" method="post">
    @csrf

    <div class="form-group mb-4">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="learn php article" aria-describedby="titleHelper" value="{{old('title')}}">
      <small id="titleHelper" class="text-muted">Type the post title, max: 150 carachters</small>
    </div>
    
    {{-- cambiare input type file --}}
    <div class="form-group mb-4">
        <label for="cover">Title</label>
        <input type="text" name="cover" id="cover" class="form-control @error('cover') is-invalid @enderror" placeholder="learn php article" aria-describedby="coverHelper" value="{{old('cover')}}">
        <small id="coverHelper" class="text-muted">Type the post cover</small>
      </div>

      <div class="form-group mb-4">
        <label for="content">Content</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="content" rows="4">
        {{old('content')}}
        </textarea>
      </div>

      <button type="submit" class="btn btn-primary">Add Post</button>
</form>

@endsection