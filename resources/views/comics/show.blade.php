@extends('layouts.app')

@section('title', 'Comic List')

@section('content')
<div class="container">
    <h1>{{ $comic->title }}</h1>
    <p><strong>Serie:</strong> {{ $comic->series }}</p>
    <p><strong>Autore:</strong> {{ $comic->author }}</p>
    <p><strong>Anno:</strong> {{ $comic->year }}</p>
    <p><strong>Casa Editrice:</strong> {{ $comic->publisher }}</p>
    <p><strong>Genere:</strong> {{ $comic->genre }}</p>
    <p><strong>Prezzo:</strong> ${{ $comic->price }}</p>
    <p><strong>Data di Vendita:</strong> {{ $comic->sale_date }}</p>
    <p><strong>Descrizione:</strong> {{ $comic->description }}</p>
    <p><strong>Anteprima:</strong></p>
    <img id="thumb-img" src="{{ $comic->thumb }}" alt="Thumbnail">
    <br><br>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla Lista</a>
</div>
@endsection
