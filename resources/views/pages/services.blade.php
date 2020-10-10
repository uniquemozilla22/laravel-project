@extends('Layout.app')

@section('content')
    <h1>{{$title}}</h1>
    <p>{{$description}}</p>
    @if (count($services)>0)
        <ul class="list-group">
            @foreach ($services as $service)
            <li class='list-group-item'><?php echo $service ?></li>               
            @endforeach
        </ul>
    
        
    @endif
@endsection
