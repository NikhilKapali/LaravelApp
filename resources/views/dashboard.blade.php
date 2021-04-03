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
                    <hr>
                    <h3>Your Blog Posts</h3>
                    <hr>
                    @if(count($posts)>0)
                    <table class="table table-striped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $posts)
                        <tr>
                            <td>{{$posts->title}}</td>
                            <td><a href="/posts/{{$posts->id}}/edit" class="btn btn-info">Edit</td>
                            <td>{!!Form::open(['action' => ['App\Http\Controllers\PostController@destroy', $posts->id], 'method'=>'POST', 'class'=>'float-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                {!! Form::close()!!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <h3>You have no post right now</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
