@extends('layouts.admin')

@section('content')

<h2>Create a new Post</h2>

<form action="{{route('admin.posts.store')}}" method="post">
    @csrf

    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="learn php article" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type the post title, max: 150 carachters</small>
    </div>
    
    {{-- cambiare input type file --}}
    <div class="form-group">
        <label for="cover">Title</label>
        <input type="text" name="cover" id="cover" class="form-control" placeholder="learn php article" aria-describedby="coverHelper">
        <small id="coverHelper" class="text-muted">Type the post cover</small>
      </div>

      <div class="form-group">
        <label for="content">Content</label>
        <textarea class="form-control" name="content" id="content" rows="4"></textarea>
      </div>

      <button type="submit" class="btn btn-primary">Add Post</button>
</form>

@endsection