@extends('layouts.app')

@section('title', 'Comic List')

@section('content')
<div class="container">
    <h1>Comics List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Serie</th>
                <th>Autore</th>
                <th>Anno</th>
                <th>Casa Editrice</th>
                <th>Genere</th>
                <th>Prezzo</th>
                <th>Data di Vendita</th>
                <th>Anteprima</th>
                <th>Azioni</th>
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
                <td><img src="{{ $comic->thumb }}" alt="Thumbnail"></td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Visualizza</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi Nuovo Fumetto</a>
        <a href="{{ url('/') }}" class="btn btn-secondary">Torna alla Home</a>
    </div>

</div>
@endsection
