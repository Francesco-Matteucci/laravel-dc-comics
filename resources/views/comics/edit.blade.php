@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica il Fumetto</h1>
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
        </div>

        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $comic->author }}" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ $comic->year }}" required>
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label">Casa Editrice</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $comic->publisher }}" required>
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ $comic->genre }}" required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ $comic->price }}" required>
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di Vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">URL Immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $comic->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Aggiorna Fumetto</button>
    </form>
</div>
@endsection
