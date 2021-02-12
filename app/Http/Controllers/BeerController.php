<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;
class BeerController extends Controller
{
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

        $request->validate(
          [
            'nome'=>'required|max:30',
            'marca'=>'required|max:20',
            'prezzo'=>'required|numeric',
            'alc_vol'=>'required|numeric',
          ]
        );

        $beer = new Beer();
        $beer->nome=$data['nome'];
        $beer->marca=$data['marca'];
        $beer->prezzo=$data['prezzo'];
        $beer->alc_vol=$data['alc_vol'];
        $beer->descrizione=$data['descrizione'];
        $beer->save();

        return redirect()->route('beers.index');

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
