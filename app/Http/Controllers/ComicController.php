<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:255|min:5',
                'description' => 'required|max:65535',
                'thumb' => 'required|max:255|url',
                'price' => 'required|max:20|',
                'series' => 'required|max:100|min:3',
                'sale_date' => 'required|max:15|min:5',
                'type' => 'required|max:50|'
            ],
            [
                'title.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'description.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'thumb.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'thumb.url' => 'Il campo :attribute deve contenere un URL valido!',
                'price.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'series.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'sale_date.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'type.required' => 'Il campo :attribute deve essere necessariamente compilato!',
            ]
        );
        $data = $request->all();
        $newComic = new Comic;
        $newComic->fill($data);
        $newComic->save();
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comic.show', compact('comic'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        if($comic) {
            return view('comic.edit', compact('comic'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate(
            [
                'title' => 'required|max:255|min:5',
                'description' => 'required|max:65535',
                'thumb' => 'required|max:255|url',
                'price' => 'required|max:20|',
                'series' => 'required|max:100|min:3',
                'sale_date' => 'required|max:15|min:5',
                'type' => 'required|max:50|'
            ],
            [
                'title.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'description.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'thumb.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'thumb.url' => 'Il campo :attribute deve contenere un URL valido!',
                'price.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'series.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'sale_date.required' => 'Il campo :attribute deve essere necessariamente compilato!',
                'type.required' => 'Il campo :attribute deve essere necessariamente compilato!',
            ]
        );
        $data = $request->all();
        $comic->update($data);
        $comic->save();
        return redirect()->route('comics.edit', ['comic' => $comic])->with('status', 'Il fumetto è stato modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        if($comic) {
            $comic->delete();
            return redirect()->route('comics.index')->with('deleted', 'Il fumetto è stato eliminato!');
        } else {
            abort(404);
        }
    }
}
