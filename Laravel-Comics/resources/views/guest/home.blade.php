@extends('layout.base')

@section('content')

<div class="contents">
    <div class="comics-content">
        @foreach ($comics as $index => $element)
            <a href="{{route ('guest-comic',['id' => $index])}}">
                <div class="comics-card">
                    <img src="{{$element['thumb']}}" alt="{{$element['title']}}">
                    <h3> {{$element['title']}} </h3>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection