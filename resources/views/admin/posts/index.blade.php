@extends('layouts.admin')

@section('content')
<div class="container">
    
    <table class="table table-striped table-inverse table-responsive">
        <thead class="thead-inverse">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Cover Image</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td scope="row">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td><img width="150" src="{{$post->cover}}" alt="Cover Image {{$post->title}}"></td>
                    <td>View - Edit - Delete</td>
                </tr>
                @empty
                <tr>
                    <td>No Posts!! Create your first post <a href="#">Create post</a></td>
                </tr>
                @endforelse
            </tbody>
    </table>

</div>
@endsection
