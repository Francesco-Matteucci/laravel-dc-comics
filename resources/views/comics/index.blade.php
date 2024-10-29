@extends('layouts.app')

@section('title', 'Comic List')

@section('content')
<div class="container">
    <h1>Comics List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Year</th>
                <th>Publisher</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comics as $comic)
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->author }}</td>
                <td>{{ $comic->year }}</td>
                <td>{{ $comic->publisher }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
