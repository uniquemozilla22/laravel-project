@extends('Layout.app')


@section('content')
<a href="../posts" class="btn btn-default">Go Back</a>
<h1>Edit Posts</h1>
{!! Form::open(['action'=>['PostController@update',$posts -> id],'method'=>'POST'])!!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$posts->title,['class'=>'form-control','placeholder'=>'Title','value'=>'123'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Description')}}
        {{Form::text('body',$posts->body,['class'=>'form-control','placeholder'=>'Description'])}}
    </div>

    {{Form::hidden ('_method','PUT')}}
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}

{!!Form::close()!!}
@endsection