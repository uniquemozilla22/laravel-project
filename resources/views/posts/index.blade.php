@extends('Layout.app')


@section('content')
<h1>This is the post</h1>

    @if (count($posts)>1)
      @foreach($posts as $post)
      <div class="well">
      <h3><a href="./posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on {{$post->created_at}}</small>
      </div>
      @endforeach
    @else 
    <p>No Posts here Though</p>
    @endif 


@endsection