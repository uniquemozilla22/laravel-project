<!DOCTYPE html>
<html lang='{{config("app.locale")}}'>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name'),'Laravel'}}</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body >
    @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>