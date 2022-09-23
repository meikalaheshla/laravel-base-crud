<?php

namespace App\Http\Controllers;
use App\Models\Comic;
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
         return view(('comics.index'), compact('comics'));
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
        $data = $request->all();
       // dd($data);

    //Creo una nuova istanza della classe Comic 

        $comic = new Comic();

    //Immetto gli attributi del form precedentemente storati in $data
       
        $comic->fill($data);
        
    //Salvo sul db

        $comic->save();

        //$new_comic = Comic::create($data) restituisce l'istanza dopo aver creato sul db l'elemento permettendomi di avere anche l'id per eventualmente usare il redirect sull'elemento 

        return redirect()->route('comics.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //$comic = Comic::findorfail($id);    come scrivere sopra Comic $comic  
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
        //$comic = Comic::findOrFail($id);
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $Comic)
    {
        // Prendo i dati del form 
        //$comic = Team::findOrFail()$id

        // $comic= fill($data);
        //$comic-> save()
        $data = $request->all();
        $comic->update($data);
       return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
