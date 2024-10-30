@extends('layouts.app')

@section('title', 'Modifica il Fumetto')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Modifica il Fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label fw-bold">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label fw-bold">Anno</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $comic->year }}" required>
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label fw-bold">Casa Editrice</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $comic->publisher }}" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label fw-bold">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $comic->genre }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data di Vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">URL Immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ $comic->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-dark">Aggiorna Fumetto</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla Lista</a>
    </form>
</div>
@endsection
