@extends('layouts.app')
@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Welcome to Laravel blog</h1>
        @guest
          <p>
            <a class="btn btn-primary btn-lg" href='/login' role="button">Login</a>
            <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
          </p>
        @endguest
    </div>
</div>
@endsection
