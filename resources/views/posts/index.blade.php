@extends('layouts.app')

@section('content')
    <h1>post ni bos</h1>

    @if (count($posts)>0)
        @foreach ($posts as $isi)
            <div class="jumbotron">
                <div class="row">
                    <div class="col-md-8 col-sm-4">
                        <img width="100%" src="{{$isi->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$isi->id}}">{{$isi->title}}</a></h3>
                        <small>written on {{$isi->created_at}} by {{$isi->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links('pagination::bootstrap-4')}}
        
    @else
        <p>no post found</p>
    @endif
@endsection