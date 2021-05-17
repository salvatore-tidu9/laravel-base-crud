@extends('layouts.app')

@section('title', 'Aggiornamento Database')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            @if ($errors->any())
                <div class="alrt alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
</div>

<form class="form" action="{{route('articles.store')}}" method="post">

    @csrf
    @method('POST')

    <div class="form-group">
        <label for="modello">Modello:</label>
        <input type="text" class="form-control" name="modello" id="modello">
    </div>

    <div class="form-group">
        <label for="marca">Marca:</label>
        <input type="text" class="form-control" name="marca" id="marca">
    </div>

    <div class="form-group">
        <label for="img">Img:</label>
        <input type="text" class="form-control" name="img" id="img">
    </div>

    <div class="form-group">
        <label for="info">Info:</label>
        <textarea type="text" class="form-control" name="info" id="info"></textarea>
    </div>

    <button type="submit" class="bt btn btn-default">Submit</button>
</form>

@endsection