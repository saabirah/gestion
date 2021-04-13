<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{

   protected $fillable = [
       'titre_l', 'resume_l', 'nom_au', 'prenom_au', 'naissance_au', 'nom_ed', 'annee_ed', 'domaine_t', 'libelle_t',
       'isban_ex',
       'nom_p',
       'numb_pl',
   ];

}
