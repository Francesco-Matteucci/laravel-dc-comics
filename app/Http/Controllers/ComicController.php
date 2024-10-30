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
            'title' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'publisher' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_date' => 'nullable|date',
            'thumb' => 'nullable|url',
            'description' => 'nullable|string',
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
            'title' => 'required|string|max:255',
            'series' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'year' => 'required|integer',
            'publisher' => 'required|string|max:255',
            'genre' => 'required|string|max:255',
            'price' => 'required|numeric',
            'sale_date' => 'nullable|date',
            'thumb' => 'nullable|url',
            'description' => 'nullable|string',
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
        //
    }
}