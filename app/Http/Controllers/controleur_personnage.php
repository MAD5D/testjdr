<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Personnage;
use App\Http\Requests\requete_personnage;

class controleur_personnage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ///
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('creation_personnage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(requete_personnage $request)
    {
	$personnage = new Personnage;
	$personnage->id_utilisateur = $request->user()->id;
	$personnage->nom = $request->input('pseudo');
	$personnage->homme = $request->input('sexe');
	$personnage->point_vie = 100;
	$personnage->point_vie_max = 100;
	$personnage->point_action = 15;
    $personnage->point_action_max = 15;
    $personnage->point_deplacement = 24;
    $personnage->point_deplacement_max = 24;
    $personnage->point_experience = 50;
    $personnage->point_attaque = 10;
    $personnage->point_defense = 10;
	$personnage->save();
	return "ok" . $request->input('sexe');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
