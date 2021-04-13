<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Livre;

class AccueilController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function  index(){
        return view('accueil');
    }

public function  store(Request $request){

    request ()->validate( [
    'titre_l'=>['required','string'],
     'resume_l'=>['required','string'],
     'nom_au' =>['required','string'],
     'prenom_au'=>['required','string'],
     'naissance_au'=>['required','date'],
     'nom_ed'=>['required','string'],
     'annee_ed'=>['required','date'],
     'domaine_t'=>['required','string'],
     'libelle_t'=>['required','string'],
     'isban_ex'=>['required','string'],
     'nom_p'=>['required','string'],
     'numb_pl'=>['required','integ'],

    ]);

    Livre:: create([
        'titre_l'  =>$request->titre_l,
        'resume_l' =>$request-> resume_l,
        'nom_au'  =>$request->nom_au,
        'prenom_au'  =>$request->prenom_au,
        'naissance_au' =>$request->naissance_au,
        'nom_ed'  =>$request->nom_ed,
        'domaine_t' =>$request->   domaine_t,
        'libelle_t' =>$request->   libelle_t,
        'isban_ex' =>$request-> isban_ex,
        'nom_p'=>$request->nom_p,
        'numb_pl'=>$request-> numb_pl,



    ]);

    }

}
