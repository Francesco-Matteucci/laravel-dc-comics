<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'series' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'publisher' => 'required|string|min:3|max:255',
            'genre' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'nullable|date',
            'thumb' => 'nullable|url',
            'description' => 'nullable|string|min:10|max:1000',
        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve essere lungo almeno 3 caratteri.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',

            'series.required' => 'La serie è obbligatoria.',
            'series.min' => 'Il nome della serie deve essere lungo almeno 3 caratteri.',
            'series.max' => 'Il nome della serie non può superare i 255 caratteri.',

            'author.required' => "L'autore è obbligatorio.",
            'author.min' => "Il nome dell'autore deve essere lungo almeno 3 caratteri.",
            'author.max' => "Il nome dell'autore non può superare i 255 caratteri.",

            'year.required' => "L'anno di pubblicazione è obbligatorio.",
            'year.integer' => "L'anno deve essere un numero intero.",
            'year.min' => "L'anno di pubblicazione deve essere almeno il 1900.",
            'year.max' => "L'anno di pubblicazione non può essere superiore all'anno corrente.",

            'publisher.required' => 'La casa editrice è obbligatoria.',
            'publisher.min' => 'Il nome della casa editrice deve essere lungo almeno 3 caratteri.',
            'publisher.max' => 'Il nome della casa editrice non può superare i 255 caratteri.',

            'genre.required' => 'Il genere è obbligatorio.',
            'genre.min' => 'Il genere deve essere lungo almeno 3 caratteri.',
            'genre.max' => 'Il genere non può superare i 255 caratteri.',

            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero valido.',
            'price.min' => 'Il prezzo non può essere negativo.',

            'sale_date.date' => 'La data di vendita deve essere una data valida.',

            'thumb.url' => "L'URL dell'immagine deve essere un link valido.",

            'description.min' => 'La descrizione deve essere lunga almeno 10 caratteri.',
            'description.max' => 'La descrizione non può superare i 1000 caratteri.',
        ]);

        Comic::create($data);

        return redirect()->route('comics.index')->with('success', 'Fumetto aggiunto con successo!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'title' => 'required|string|min:3|max:255',
            'series' => 'required|string|min:3|max:255',
            'author' => 'required|string|min:3|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'publisher' => 'required|string|min:3|max:255',
            'genre' => 'required|string|min:3|max:255',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'nullable|date',
            'thumb' => 'nullable|url',
            'description' => 'nullable|string|min:10|max:1000',
        ],
        [
            'title.required' => 'Il titolo è obbligatorio.',
            'title.min' => 'Il titolo deve essere lungo almeno 3 caratteri.',
            'title.max' => 'Il titolo non può superare i 255 caratteri.',

            'series.required' => 'La serie è obbligatoria.',
            'series.min' => 'Il nome della serie deve essere lungo almeno 3 caratteri.',
            'series.max' => 'Il nome della serie non può superare i 255 caratteri.',

            'author.required' => "L'autore è obbligatorio.",
            'author.min' => "Il nome dell'autore deve essere lungo almeno 3 caratteri.",
            'author.max' => "Il nome dell'autore non può superare i 255 caratteri.",

            'year.required' => "L'anno di pubblicazione è obbligatorio.",
            'year.integer' => "L'anno deve essere un numero intero.",
            'year.min' => "L'anno di pubblicazione deve essere almeno il 1900.",
            'year.max' => "L'anno di pubblicazione non può essere superiore all'anno corrente.",

            'publisher.required' => 'La casa editrice è obbligatoria.',
            'publisher.min' => 'Il nome della casa editrice deve essere lungo almeno 3 caratteri.',
            'publisher.max' => 'Il nome della casa editrice non può superare i 255 caratteri.',

            'genre.required' => 'Il genere è obbligatorio.',
            'genre.min' => 'Il genere deve essere lungo almeno 3 caratteri.',
            'genre.max' => 'Il genere non può superare i 255 caratteri.',

            'price.required' => 'Il prezzo è obbligatorio.',
            'price.numeric' => 'Il prezzo deve essere un numero valido.',
            'price.min' => 'Il prezzo non può essere negativo.',

            'sale_date.date' => 'La data di vendita deve essere una data valida.',

            'thumb.url' => "L'URL dell'immagine deve essere un link valido.",

            'description.min' => 'La descrizione deve essere lunga almeno 10 caratteri.',
            'description.max' => 'La descrizione non può superare i 1000 caratteri.',
        ]);

        $comic = Comic::findOrFail($id);

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id)->with('success', 'Fumetto aggiornato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);

    $comic->delete();

    return redirect()->route('comics.index')->with('success', 'Fumetto eliminato con successo!');
    }
}