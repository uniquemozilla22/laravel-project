@extends('Layout.app')


@section('content')
<h1>This is the post</h1>
<a href="./posts/create">Create a post</a>

    @if (count($posts)>0)
      @foreach($posts as $post)
      <div class="well">
      <h3><a href="./posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on {{$post->created_at}}</small>
      </div>
      @endforeach
      <hr/>
      {{$posts->links()}}
    @else 
    <p>No Posts here Though</p>
    @endif 


@endsection