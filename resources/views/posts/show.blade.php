@extends('Layout.app')


@section('content')
<a href="../posts" class="btn btn-default">Go Back</a>
<h1>{{$posts->title}}</h1>
<p>{{$posts->body}}</p>
<small>Written on {{$posts->created_at}}</small>


@endsection