@extends('layouts.app')

@section("title", "Benvenuti nell'Archivio Fumetti")

@section('content')
<div class="container text-center mt-5">
    <h1>Benvenuti nell'Archivio Fumetti!</h1>
    <p class="lead">Esplora il nostro vasto archivio di fumetti, con vari generi, autori e case editrici.</p>
    <a href="{{ route('comics.index') }}" class="btn btn-primary mt-3">Vai all'Archivio dei Fumetti</a>
</div>
@endsection
