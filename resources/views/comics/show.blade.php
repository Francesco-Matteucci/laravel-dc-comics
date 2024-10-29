@extends('layouts.app')

@section('title', 'Comic List')

@section('content')
<div class="container">
    <h1>{{ $comic->title }}</h1>
    <p><strong>Author:</strong> {{ $comic->author }}</p>
    <p><strong>Year:</strong> {{ $comic->year }}</p>
    <p><strong>Publisher:</strong> {{ $comic->publisher }}</p>
    <p><strong>Genre:</strong> {{ $comic->genre }}</p>
    <p><strong>Price:</strong> ${{ $comic->price }}</p>
    <p><strong>Description:</strong> {{ $comic->description }}</p>
    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Back to list</a>
</div>
@endsection
