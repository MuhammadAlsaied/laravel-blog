@extends('layouts.app')

@section('content')
<h1>Posts</h1>
  @if(count($posts)>0)
    @foreach($posts as $post)
      <div class="card card-body bg-light">
        <div class="row">
          <div class="col-sm-2 col-xs-2">
            <img class="img-fluid" style="width:100%" src="/storage/images/{{$post->image}}"  />
          </div>
          <div class="col-sm-10 col-xs-10">
            <a href="/posts/{{$post->id}}"<h3>{{$post->title}}</h3></a><br />
            <small>Published on {{$post->created_at ." By ".$post->user->name}}</small>
          </div>
      </div>
    </div>
            @endforeach
    {{$posts->links()}}
  @else
    <h3>No posts</h3>
  @endif
@endsection
