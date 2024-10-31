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
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $comic->title) }}" required>
            @error('title')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $comic->series) }}" required>
            @error('series')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="author" class="form-label fw-bold">Autore</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ old('author', $comic->author) }}" required>
            @error('author')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="year" class="form-label fw-bold">Anno</label>
            <input type="number" class="form-control" id="year" name="year" value="{{ old('year', $comic->year) }}" required>
            @error('year')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label fw-bold">Casa Editrice</label>
            <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher', $comic->publisher) }}" required>
            @error('publisher')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label fw-bold">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value="{{ old('genre', $comic->genre) }}" required>
            @error('genre')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" value="{{ old('price', $comic->price) }}" required>
            @error('price')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data di Vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">URL Immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}" placeholder="https://esempio.com/immagine.jpg">
            @error('thumb')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $comic->description) }}</textarea>
            @error('description')
            <div class="alert alert-warning">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-dark">Aggiorna Fumetto</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla Lista</a>
    </form>
</div>
@endsection
