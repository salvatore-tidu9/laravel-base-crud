@extends('layouts.app')

@section('title', 'Modifica Database')

@section('content')

<form class="form" action="{{route('articles.update', $article -> id )}}" method="post">

    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="modello">Modello:</label>
        <input type="text" class="form-control" name="modello" id="modello" value="{{$article -> modello}}">
    </div>

    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" name="marca" id="marca" value="{{$article -> marca}}">
    </div>

    <div class="form-group">
        <label for="img">Img:</label>
        <input type="text" class="form-control" name="img" id="img" value="{{$article -> img}}">
    </div>

    <div class="form-group">
        <label for="info">Info:</label>
        <textarea type="text" class="form-control" name="info" id="info" value="{{$article -> info}}"></textarea>
    </div>

    <button type="submit" class="bt btn btn-default">Submit</button>
</form>

@endsection