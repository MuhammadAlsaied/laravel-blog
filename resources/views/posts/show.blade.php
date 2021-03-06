@extends('layouts.app')

@section('content')
<h1>{{$post->title}}</h1>
<small>Published on {{$post->created_at ." By ".$post->user->name}}</small><hr />
<div class="col-md-12">
  <img class="mx-auto d-block img-fluid" src="{{$post->image_url}}"  />
</div>
<p>
  {!!$post->body!!}
</p>
@auth
  @if(auth()->user()->id== $post->user_id)
    <a href='/posts/{{$post->id}}/edit' class="btn btn-primary">Edit</a>
    {!! Form::open(['action'=>['PostsController@destroy',$post->id],'class'=>'float-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{form::submit("Delete",['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
  @endif
@endauth()
@endsection
