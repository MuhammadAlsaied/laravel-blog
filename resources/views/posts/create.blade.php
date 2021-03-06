@extends('layouts.app')

@section('content')
  <h1>Create Post</h1>
  {!! Form::open(['action'=>'PostsController@store', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="form-group">
      {{Form::label('body','Body')}}
      {{Form::textArea('body','',['id'=>'article-ckeditor','class'=>'form-control'])}}
    </div>
    <div class="form-group">
    {{Form::file('image')}}
    </div>
    {{form::submit("Add post",['class'=>'btn btn-primary'])}}

  {!! Form::close() !!}
@endsection
