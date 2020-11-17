@extends('header')
@section('content')

    <div class="container">
        <div class="jumbotron dot">
            <p class="lead">{{$title}}</p>
            <hr class="my-4">
            @php($i=0)
            @foreach($arrayFiles as $file)
                @if($i===0)
                    <div class="listCC">
                    <ul class="list-group list-group-horizontal-sm">
                @endif
                            <li class="list-group-item listItem">
                                <a href="{{$file['path']}}">
                                {{$file['name']}}
                                </a>
                            </li>

                @php($i++)
                @if($i>=4 or $loop -> last)
                    </ul>
                    </div>
                    @php($i=0)
                @endif
            @endforeach
        </div>
    </div>
@endsection
@extends('footer')
