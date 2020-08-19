<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\requete_inscription;



class accueil_controler extends Controller
{
	public function index(){
		return view('accueil');
	}
	public function inscription(requete_inscription $request){
		return 'paramettre dinscription ok';
//		return view('utilisateur');
	}
}
