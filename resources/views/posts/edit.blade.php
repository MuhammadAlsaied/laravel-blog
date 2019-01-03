@extends('layouts.app')

@section('content')
  <h1>Edit Post</h1>
  {!! Form::open(['action'=>['PostsController@update',$post->id], 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textArea('body',$post->body,['id'=>'article-ckeditor','class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::file('image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{form::submit("Edit post",['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection
