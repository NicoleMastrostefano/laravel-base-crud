<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
class BeerController extends Controller
{
    private $beerValidation = [
        'nome'=>'required|max:30',
        'marca'=>'required|max:20',
        'prezzo'=>'required|numeric',
        'alc_vol'=>'required|numeric',
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();

        return view('beers.index',compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

        $request->validate($this->beerValidation);


        $beer = new Beer();
        // $beer->nome=$data['nome'];
        // $beer->marca=$data['marca'];
        // $beer->prezzo=$data['prezzo'];
        // $beer->alc_vol=$data['alc_vol'];
        // $beer->descrizione=$data['descrizione'];
        $book->fill($data);
        $beer->save();
        $newBeer = Beer::orderBy('id', 'DESC')->first();
        return redirect()->route('beers.index',$newBeer);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
      // $beer = Beer::find($id);
        // dd($beer->getAttributes());
      return view('beers.show',compact('beer'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit',compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();
        $request->validate($this->beerValidation);

        $beer->update($data);

        return redirect()
        ->route('beers.index')
        ->with('message', 'Birra ' . $beer->nome . " aggiornata correttamente!");
    }

    /**å
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
