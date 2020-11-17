@extends('header')
@section('content')
    <div class="container">
        <div class="jumbotron dot">
            <h1 class="display-4">Hello data!</h1>
            <p class="lead">{{$title}}</p>
            <hr class="my-4">
            <p>{{$content}}</p>
        </div>
    </div>
@endsection
@extends('footer')
