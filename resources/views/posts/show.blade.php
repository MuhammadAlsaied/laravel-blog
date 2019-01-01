@extends('layouts.app')

@section('content')
<h1>{{$post->title}}</h1>
<small>Published on {{$post->created_at}}</small><hr />
<p>
  {!!$post->body!!}
</p>
<a href='/posts/{{$post->id}}/edit' class="btn btn-primary">Edit</a>
{!! Form::open(['action'=>['PostsController@destroy',$post->id],'class'=>'float-right']) !!}
{{Form::hidden('_method','DELETE')}}
{{form::submit("delete",['class'=>'btn btn-danger'])}}
{!! Form::close() !!}
@endsection
