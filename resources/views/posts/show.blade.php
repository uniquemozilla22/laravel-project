@extends('Layout.app')


@section('content')
<a href="../posts" class="btn btn-default">Go Back</a>
<h1>{{$posts->title}}</h1>
<p>{{$posts->body}}</p>
<small>Written on {{$posts->created_at}}</small>
<hr>
<a  class="btn btn-primary"  href="{{$posts->id}}/edit">Edit Post</a>
<hr/>

{!!Form::open(['action'=>['PostController@destroy',$posts->id],'method'=>'POST','class'=>'pull-right']) !!}

{{Form::hidden ('_method','DELETE')}}

{{Form::submit('Delete',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}
@endsection