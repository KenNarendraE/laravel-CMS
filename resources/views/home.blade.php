@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Blog Anda</h3>

                    @if (count($posts)>0)
                        <table class="table table-stripped">
                        <tr>
                            <th colspan="4">Title</th>
                        </tr>
                        @foreach ($posts as $isi)
                            <tr>
                                <td>{{$isi->title}}</td>
                                <td colspan="2"><a href="/posts/{{$isi->id}}/edit" class="btn btn-success">Edit</a></td>
                                <td>
                                    {!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $isi->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    @else
                        <p>Postingan Anda Kosong</p>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
