@extends('layouts.app')

@section('title', 'Catalogo')

@section('content')

    <div class="title text-center">
        <h2>La Nostra Collezione</h2>
    </div>
    <div class="container-fluid main_card_container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="card_container">
                    <div class="card_container_wrapper">
                        <h5>{{$article['modello']}}</h5>
                        <h6>{{$article['marca']}}</h6>
                        <a href="{{ route('articles.show', ['article' => $article -> id]) }}" type="button" class="btn_i btn btn-info">Dettagli</a>
                    </div>
                    <img src="{{$article['img']}}" alt="">
                </div>
                <div class="row text-center">
                    <a href="{{ route('articles.edit', ['article' => $article -> id]) }}" type="button" class="btn_w btn btn-warning">Modifica</a>
                    <form action="{{ route('articles.destroy', ['article' => $article -> id]) }}" method="post" class="form_d">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn_d btn btn-danger">Cancella</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row text-center">
            <a href="{{ route('articles.create')}}" type="button" class="btn_p btn btn-primary">Aggiorna Catalogo</a>
        </div>
    </div>

@endsection
