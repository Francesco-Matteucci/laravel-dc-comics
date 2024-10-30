@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<div class="container my-4">
    <h1 class="mb-4">{{ $comic->title }}</h1>

    <div class="row">

        <div class="col-md-4">
            <img src="{{ $comic->thumb }}" alt="Thumbnail" class="img-fluid rounded shadow">
        </div>

        <div class="col-md-8">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Serie:</strong> {{ $comic->series }}</li>
                <li class="list-group-item"><strong>Autore:</strong> {{ $comic->author }}</li>
                <li class="list-group-item"><strong>Anno:</strong> {{ $comic->year }}</li>
                <li class="list-group-item"><strong>Casa Editrice:</strong> {{ $comic->publisher }}</li>
                <li class="list-group-item"><strong>Genere:</strong> {{ $comic->genre }}</li>
                <li class="list-group-item"><strong>Prezzo:</strong> ${{ $comic->price }}</li>
                <li class="list-group-item"><strong>Data di Vendita:</strong> {{ $comic->sale_date }}</li>
            </ul>
        </div>
    </div>

    <div class="my-4">
        <h5 class="fw-bold">Descrizione:</h5>
        <p>{{ $comic->description }}</p>
    </div>

    <a href="{{ route('comics.index') }}" class="btn btn-dark mt-3">Torna alla Lista</a>
</div>
@endsection
