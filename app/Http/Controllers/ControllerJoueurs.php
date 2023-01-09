<?php

namespace App\Http\Controllers;

use App\Models\joueurs;
use Illuminate\Http\Request;

class ControllerJoueurs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e=new joueurs();
        $e->nom=$request->nom;
        $e->prenom=$request->prenom;
        $e->poste=$request->poste;
        $e->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\joueurs  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function show(joueurs $joueurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\joueurs  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function edit(joueurs $joueurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\joueurs  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, joueurs $joueurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\joueurs  $joueurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        joueurs::where('id',$request->id)->delete();
        echo("joueur  supprimer");
    }
}
