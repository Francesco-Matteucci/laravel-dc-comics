@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Lista dei Fumetti</h1>

    <a href="{{ url('/') }}" class="btn btn-secondary mb-3">Torna alla Home</a>
    <a href="{{ route('comics.create') }}" class="btn btn-dark mb-3">Aggiungi Nuovo Fumetto</a>

    <table class="table table-bordered table-hover table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Autore</th>
                <th scope="col">Anno</th>
                <th scope="col">Casa Editrice</th>
                <th scope="col">Genere</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data di Vendita</th>
                <th scope="col">Anteprima</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->series }}</td>
                <td>{{ $comic->author }}</td>
                <td>{{ $comic->year }}</td>
                <td>{{ $comic->publisher }}</td>
                <td>{{ $comic->genre }}</td>
                <td>${{ $comic->price }}</td>
                <td>{{ $comic->sale_date }}</td>
                <td><img src="{{ $comic->thumb }}" alt="Thumbnail" class="thumb-image"></td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-dark btn-sm me-1 mb-2">Visualizza</a>
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning btn-sm me-1">Modifica</a>

                    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Sei sicuro di voler eliminare questo fumetto?')">Elimina</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
