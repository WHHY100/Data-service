@extends('header')
@section('content')
<div class="container">
    <div class="jumbotron dot">
        <p class="lead">{{$title}}</p>
        <hr class="my-4">
        <p>{{$content}}</p>
        <a class="btn btn-primary" href="{{$post}}/reports">{{$reports}}</a>
        <a class="btn btn-primary" href="{{$downloadData}}">{{$data}}</a>
    </div>
</div>
@endsection
@extends('footer')
