@extends('layouts.master')

@section('content')

@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Modifier vos données personelles</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<div class="container my-5">
<form class="form-contact contact_form" action="{{route('updateUser', $user)}}" method="post" novalidate="novalidate" enctype="multipart/form-data">
  @csrf
  
  <div class="row">
      <div class="col-sm-6">
          <div class="form-group">
              <label for="">Nom :</label>
            <input class="form-control valid" name="nom" id="nom" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='nom recherché'" placeholder="Nom">
          </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label for="">Prénom :</label>
          <input class="form-control valid" name="prenom" id="prenom" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='prenom'" placeholder="Prénom">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Photo :</label>
          <input class="form-control valid" name="photo" id="photo" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder ='photo'" placeholder="Photo">
        </div>
    </div>
      <div class="col-sm-6">
          <div class="">
            <label for="">Statut recherché :</label>
              <select class="form-control" name="statut_id" id="statut_id" type="text" placeholder="Statut recherché">
                <option value="">-- Statut recherché --</option>
                @foreach ($statuts as $statut)
                  <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                @endforeach
              </select>
            
          </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
            <label for="">Adresse:</label>
            <input class="form-control" name="adresse" id="adresse" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'adresse'" placeholder="Adresse">
        </div>
    </div>
      <div class="col-sm-6">
          <div class="form-group">
            <label for="">Email :</label>
              <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'email'" placeholder="Adresse email">
          </div>
      </div>

      <div class="col-sm-6">
        <div class="form-group">
            <label for="">Mot de passe :</label>
            <input class="form-control" name="password" id="password" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'password'" placeholder="Mot de passe">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Etes-vous véhiculé ? :</label>
            <input class="form-control" name="véhicule" id="véhicule" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'véhicule'" placeholder="Possesion de véhicule">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Vous étes disponibile à partir du :</label>
            <input class="form-control" name="dispo" id="dispo" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'dispo'" placeholder="Disponibilité">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Télécharger votre cv :</label>
            <input class="form-control" name="cv" id="cv" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'cv'" placeholder=" Modifier votre cv">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Date de création de l'entreprise :</label>
            <input class="form-control" name="date" id="date" type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'" placeholder="Date de création de l'entreprise">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Numéro de TVA :</label>
            <input class="form-control" name="tva" id="tva" type="integer" onfocus="this.placeholder = ''" onblur="this.placeholder = 'tva'" placeholder="Numéro de tva">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Nom de la personne de contact :</label>
            <input class="form-control" name="pNom" id="pNom" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pNom'" placeholder="Nom de la personne de contact">
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Numéro de contact :</label>
            <input class="form-control" name="pTel" id="pTel" type="integer" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pTel'" placeholder="Numéro de la personne de contact">
        </div>
    </div>
  </div>
  <div class="form-group mt-3">
      <button type="submit" class="button button-contactForm boxed-btn">Modifier</button>
  </div>
</form>
</div>

@include('components.footer')
@endsection