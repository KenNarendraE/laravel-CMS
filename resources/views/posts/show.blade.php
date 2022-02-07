@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-primary">Back</a>

    <h1>{{$post->title}}</h1>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <hr>
    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-success">edit</a>

    {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
    @endsection