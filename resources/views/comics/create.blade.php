@extends('layouts.app')

@section('title', 'Aggiungi un Nuovo Fumetto')

@section('content')
<div class="container my-4">
    <h1 class="mb-4">Aggiungi un Nuovo Fumetto</h1>

    <form action="{{ route('comics.store') }}" method="POST" class="bg-light p-4 rounded shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label fw-bold">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" required placeholder="Es. Batman: Il Cavaliere Oscuro">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label fw-bold">Serie</label>
            <input type="text" class="form-control" id="series" name="series" required placeholder="Es. Batman">
        </div>

        <div class="mb-3">
            <label for="author" class="form-label fw-bold">Autore</label>
            <input type="text" class="form-control" id="author" name="author" required placeholder="Es. Frank Miller">
        </div>

        <div class="mb-3">
            <label for="year" class="form-label fw-bold">Anno</label>
            <input type="number" class="form-control" id="year" name="year" required placeholder="Es. 1987">
        </div>

        <div class="mb-3">
            <label for="publisher" class="form-label fw-bold">Casa Editrice</label>
            <input type="text" class="form-control" id="publisher" name="publisher" required placeholder="Es. DC Comics">
        </div>

        <div class="mb-3">
            <label for="genre" class="form-label fw-bold">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" required placeholder="Es. Comic Book">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label fw-bold">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required placeholder="Es. 9.99">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label fw-bold">Data di Vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label fw-bold">URL Immagine</label>
            <input type="url" class="form-control" id="thumb" name="thumb" placeholder="https://esempio.com/immagine.jpg">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label fw-bold">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Inserisci la descrizione del fumetto..."></textarea>
        </div>

        <button type="submit" class="btn btn-dark">Salva Fumetto</button>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla Lista</a>
    </form>
</div>
@endsection
