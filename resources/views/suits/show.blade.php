@extends('layouts.app')

@section('title', 'Dettagli')

@section('content')

    <div class="title text-center">
        <h2>Dettagli</h2>
        {{-- @dump($article); --}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <img style="width: 100%; border-radius: 5px; margin-bottom: 70px"src="{{$article['img']}}" alt="">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="details_container">
                        <h5>{{$article['id']}}</h5>
                        <h5>{{$article['modello']}}</h5>
                        <h6>{{$article['marca']}}</h6>
                        <p>{{$article['info']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@endsection