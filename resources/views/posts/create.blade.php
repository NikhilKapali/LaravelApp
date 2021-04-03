@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
{!! Form::open(["action" => "App\Http\Controllers\PostController@store", "method" => "POST", 'enctype'=>'multipart/form-data',"class" => "form"]) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title','',['class'=>'form-control', 'placeholder'=>'Title'])}}
</div>
<div class="form-group">
    {{Form::label('body', 'Body')}}
    {{Form::textarea('body','',['class'=>'ckeditor form-control', 'placeholder'=>'Body Text'])}}
    {{-- <textarea class="ckeditor form-control" name="wysiwyg-editor"></textarea> --}}
</div>
<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{Form::submit('Submit',['class' => 'btn btn-primary'])}}
{!! Form::close() !!}
@endsection  