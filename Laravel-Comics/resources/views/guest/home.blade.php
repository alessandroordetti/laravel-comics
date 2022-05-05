@extends('layout.base')

@section('content')

<div class="contents">
    <div class="comics-content">
        @foreach ($comics as $element)
            <div class="comics-card">
                <img src="{{$element['thumb']}}" alt="{{$element['title']}}">
                <h3> {{$element['title']}} </h3>

                @dump($comics)
            </div>
        @endforeach
    </div>
</div>
@endsection