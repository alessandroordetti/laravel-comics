@extends('layout.base')

@section('content')
    <div class="blue-bar">

    </div>

    <div class="white-bg">
        <div class="container">
            <div class="row">
                <div class="col-9">
                    <h1 class="text-uppercase fw-bold">
                        {{$comic['title']}}
                    </h1>

                    <div class="green-wrapper d-flex align-items-center justify-content-between text-white">
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
                </div>
    
                <div class="col-3">
    
                </div>
            </div>
        </div>
    
    </div>

    <div class="lightgray-bg">
        <div class="col-6">

        </div>

        <div class="col-6">

        </div>
    </div>
@endsection