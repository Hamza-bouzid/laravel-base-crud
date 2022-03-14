<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Comic;

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

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            "title"=>"required|string|max:50|unique:comics",
            "type"=>[
                "required",
                Rule::in(['comic book','graphic novel'])
            ],
            "series"=>"required|string|max:50",
            "description"=>"required|string",
            "image"=>"required|url",
            "price"=>"required|numeric|between:0,999.99",
            "sale_date"=>"required|date"
        ]);

        $data = $request->all();
///primo modo
        // $newComic = new Comic();
        // $newComic->title = $data["title"];
        // $newComic->type = $data["type"];
        // $newComic->series = $data["series"];
        // $newComic->description = $data["description"];
        // $newComic->image = $data["image"];
        // $newComic->price = $data["price"];
        // $newComic->sale_date = $data["sale_date"];
        // $newComic->save();

        ////secondo modo
        // $newComic = new Comic();
        //$newComic->fill($data);
        // $newComic->save();

        ////Terzo modo
        $newComic = Comic::create($data);

        return redirect()->route('comics.show', $newComic->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
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

        $request->validate([
            "title"=>"required|string|max:50|unique:comics,title,{$comic->id}",
            "type"=>[
                "required",
                Rule::in(['comic book','graphic novel'])
            ],
            "series"=>"required|string|max:50",
            "description"=>"required|string",
            "image"=>"required|url",
            "price"=>"required|numeric|between:0,999.99",
            "sale_date"=>"required|date"
        ]);

         $data = $request->all();
        // $comic->title = $data["title"];
        // $comic->type = $data["type"];
        // $comic->series = $data["series"];
        // $comic->description = $data["description"];
        // $comic->image = $data["image"];
        // $comic->price = $data["price"];
        // $comic->sale_date = $data["sale_date"];

        // $comic->save();
        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        
        return redirect()->route('comics.index');
    }
}
