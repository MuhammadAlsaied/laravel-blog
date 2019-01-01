@extends('layouts.app')

@section('content')
<h1>Posts</h1>
  @if(count($posts)>0)
    @foreach($posts as $post)
      <div class="card card-body bg-light">
        <a href="/posts/{{$post->id}}"<h3>{{$post->title}}</h3></a>
        <small>Published on {{$post->created_at}}</small>
      </div>
    @endforeach
    {{$posts->links()}}
  @else
    <h3>No posts</h3>
  @endif
@endsection
