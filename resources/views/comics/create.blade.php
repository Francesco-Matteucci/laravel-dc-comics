@extends('layouts.app')

@section('title', 'Aggiungi un Nuovo Fumetto')

@section('content')
<div class="container">
    <h1>Aggiungi un Nuovo Fumetto</h1>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Autore</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno</label>
            <input type="number" class="form-control" id="year" name="year" required>
        </div>
        <div class="mb-3">
            <label for="publisher" class="form-label">Casa Editrice</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required>
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Salva Fumetto</button>
        <div class="mt-4">
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna indietro</a>
        </div>
    </form>

</div>
@endsection
