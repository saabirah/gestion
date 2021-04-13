@extends('layouts.entete')
@section('contenu')
<h3><i class="fa fa-angle-right"></i>Gestion de livre</h3>
<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
  <div class="col-lg-6 col-md-6 col-sm-6">
    <h2 class=" text-center">Ajouter un livre</h2>
    <h4 class="title mb-5">Identifiants de l'auteur</h4>
    <div id="message"></div>
    <form class="contact-form php-mail-form" role="form" action="{{route('store')}}" method="POST">

      <div class="form-group">
        <input type="name" name="nom_au" class="form-control" id="contact-name" placeholder="nom" value="{{old('nom_au')}}" >

        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="name" name="prenom_au" class="form-control" id="contact-name" placeholder="prenom" value="{{old('prenom_au')}} ">
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <input type="date" name="naissance_au" class="form-control" id="contact-email" placeholder="date de naissance"  value="{{old('naissance_au')}}">
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <input type="text" name="pays_p" class="form-control" id="contact-email" placeholder="choisir le pays" value="{{old('pays_p')}}">
        <div class="validate"></div>
      </div>

    <h4 class="title mt-3">Identifiant  du livre</h4>
    <div id="message"></div>

      <div class="form-group">
        <input type="name" name="titre_l" class="form-control" id="contact-name" placeholder="titre du livre"  value="{{old('titre_l')}}" >
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <input type="text" name="libelle_t" class="form-control" id="contact-email" placeholder="type de livre" value="{{old('libelle_t')}}">
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <input type="number" name="isban-ex" class="form-control" id="contact-name" placeholder="Numero code barre du livre"  value="{{old('isban_ex')}}" >
        <div class="validate"></div>
      </div>

      <h4 class="title mt-3">Reference de l'editeur</h4>
      <div class="form-group">
        <input type="name" name="nom_ed" class="form-control" id="contact-name" placeholder="titre" value="{{old('nom_ed')}}">
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <input type="date" name="annee_ed" class="form-control" id="contact-email" placeholder="année de parution"  value="{{old('annee_ed')}}">
        <div class="validate"></div>
      </div>
      <h4 class="title mt-3">Reference de l'emplacement du livre</h4>

      <div class="form-group">
        <input type="number" name="numb_pl" class="form-control" id="contact-name" placeholder="reférence de étagère"  value="{{old('numb_pl')}}" >
        <div class="validate"></div>
      </div>

      <div class="form-group">
        <textarea class="form-control" name="message" id="contact-message" placeholder="Resume" rows="5" value="{{old('resume_l')}}"></textarea>
        <div class="validate"></div>
      </div>

      <div class="loading"></div>
      <div class="error-message"></div>
      <div class="sent-message">votre livre a été enregister avec succes !</div>

      <div class="form-send mb-5">
        <button type="submit" class="btn btn-large btn-primary">envoyer</button>
      </div>

    </form>
  </div>

  <div class="col-lg-6 col-md-6 col-sm-6">
    <h4 class="title">identifiant de l'auteur</h4>
    <div id="message"></div>
    <form class="contact-form php-mail-form" role="form" action="#" method="POST">

      <div class="form-group">
        <input type="name" name="nom" class="form-control" id="contact-name" placeholder="nom" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="name" name="prenom" class="form-control" id="contact-email" placeholder="prenom" data-rule="email" data-msg="Please enter a valid email">
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="date" name="naissance" class="form-control" id="contact-email" placeholder="date de naissance" data-rule="email" data-msg="Please enter a valid email">
        <div class="validate"></div>
      </div>
      <div class="form-group">
        <input type="text" name="pays" class="form-control" id="contact-email" placeholder="Pays" data-rule="email" data-msg="Please enter a valid email">
        <div class="validate"></div>
      </div>


      <div class="loading"></div>
      <div class="error-message"></div>
      <div class="sent-message">Your message has been sent. Thank you!</div>

      <div class="form-send">
        <button type="submit" class="btn btn-large btn-primary">Send Message</button>
      </div>

    </form>

    <!-- contact_details -->
  </div>
</div>
@endsection
