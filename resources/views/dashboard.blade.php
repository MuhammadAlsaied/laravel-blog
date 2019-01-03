@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Add post</a><br /><br />
                    <h3>Your posts</h3>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>-</th>
                          <th>-</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($posts as $post)
                          <tr>
                            <td><a href='/posts/{{$post->id}}'>{{$post->title}}</a></td>
                            <td><a class="btn btn-primary" href='/posts/{{$post->id}}/edit'>Edit</a></td>
                            <td>
                            {!! Form::open(['action'=>['PostsController@destroy',$post->id],'class'=>'float-right']) !!}
                            {{Form::hidden('_method','DELETE')}}
                            {{form::submit("Delete",['class'=>'btn btn-danger'])}}
                            {!! Form::close() !!}
                          </td>
                          </tr>
                        @endforeach

                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
