@extends('layouts.app')

@section('content')
<h1>YAPP</h1>
     @if(count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card p-3 mt-3 mb-3">
                <div class="row">
                    <div class="col-md-4 col-sm4">
                        <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm8">
                        
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</h3>
                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                </div>
        @endforeach
        {{-- {!! $posts->render() !!} --}}
        {{$posts->links()}}
     @else 
     <p>No Posts Found</p>
     @endif
@endsection  