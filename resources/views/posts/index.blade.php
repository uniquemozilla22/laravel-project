@extends('Layout.app')


@section('content')
<h1>This is the post</h1>
<a href="./posts/create">
<div class="container" style=" text-align:center">
  <a href="./posts/create" style=" background:darkgreen; color:white;padding:10px; text-decoration:none;">Create a post</a>

</div>
</a>

    @if (count($posts)>0)
    <div class="container" style="padding: 50px">
      <div class="row">
        
        @foreach($posts as $post)
        <div class="col">
          <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Written on {{$post->created_at}}</div>
            <div class="card-body">
              <h5 class="card-title"><a href="./posts/{{$post->id}}">{{$post->title}}</a></h5>
              <p class="card-text">{{$post->body}}</p>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
      
      <hr/>
      {{$posts->links()}}
    @else 
    <p>No Posts here Though</p>
    @endif 


@endsection