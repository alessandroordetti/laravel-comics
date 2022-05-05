@extends('layout.base')

@section('content')
    <div class="blue-bar mb-5 position-relative">
        
        <img class="position-absolute comic-thumb" src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
    </div>

    <div class="white-bg">
        <div class="container">
            <div class="row mb-4">
                <div class="col-9">
                    <h1 class="text-uppercase fw-bold mb-4">
                        {{$comic['title']}}
                    </h1>

                    <div class="green-wrapper d-flex align-items-center justify-content-between text-white mb-4">
                        <div class="mx-5 fw-bold">
                            <p>U.S. Price: {{$comic['price']}}</p>
                        </div>


                        <div id="availability" class="mx-3">
                            <span class="text-uppercase text-white">available</span>

                            <select class="text-center">
                                <option value="available" class="">available</option>
                            </select>
                        </div>
                    </div>

                    <div class="description fs-5">
                        {{$comic['description']}}
                    </div>
                </div>
    
                <div class="col-3">
                    <img src="{{asset("images/adv.jpg")}}" alt="Advertisment">
                </div>
            </div>
        </div>
    </div>

    <div class="lightgray-bg">
        <div class="container py-3">
            <div class="row">
                    <div class="col-6">
                        <h5 class="mb-3">Talent</h5>
            
                        <div class="art-by d-flex justify-content-between">
                            <h6>Art by</h6>

                            <p class="font-artisti">
                                @foreach ($comic['artists'] as $artist)
                                {{$artist}}
                            @endforeach</p>
                        </div>
            
                        <div class="written-by d-flex justify-content-between">
                            <h6>Written by</h6>

                            <p class="font-artisti">
                                @foreach ($comic['writers'] as $writer)
                                    {{$writer}}
                                @endforeach
                            </p>
                        </div>
                    </div>
            
                    <div class="col-6">
                        <h5 class="mb-3">Specs</h5>

                        <div class="series d-flex justify-content-between">
                            <h6>Series:</h6>

                            <p class="width-specs">ACTION COMICS</p>
                        </div>

                        <div class="price d-flex justify-content-between">
                            <h6>U.S. Price:</h6>

                            <p class="width-specs">{{$comic['price']}}</p>
                        </div>

                        <div class="sale-date d-flex justify-content-between">
                            <h6>On Sale Date:</h6>

                            <p class="width-specs">{{$comic['sale_date']}}</p> 
                        </div>
                    </div>
            </div>
        </div>
    </div>


@endsection