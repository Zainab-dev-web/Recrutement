@extends('layouts.master')

@section('content')

@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Modifier vos données personnelles</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<div class="container my-5">
<form class="form-contact contact_form" action="{{route('updateUser', $users->id)}}" method="post"  enctype="multipart/form-data">
  @csrf
  
  
  
  @if($users->role_id == 4)
      <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Nom :</label>
          <input class="form-control @error('nom') is-invalid @enderror"  maxlength="15"name="nom" id="nom" type="text"  placeholder="Nom" value="{{$users->nom}}">
        </div>
        @error('nom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="">Prénom :</label>
        <input class="form-control @error('prénom') is-invalid @enderror" name="prénom" id="prénom" type="text"  placeholder="Prénom" value="{{$users->prénom}}">
      </div>
      @error('prénom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Photo :</label>
        <input class="form-control  @error('photo') is-invalid @enderror" name="photo" id="photo" type="file"  placeholder="Photo" value="{{$users->photo}}">
      </div>
      @error('photo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Adresse :</label>
          <input class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="adresse" type="text" placeholder="Adresse" value="{{$users->adresse}}">
      </div>
      @error('adresse')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
          <label for="">Email :</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"  placeholder="Adresse email" value="{{$users->email}}">
        </div>
        @error('email')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>

    
  <div class="col-sm-6">
    <div class="form-group">
        <label for="">Numéro :</label>
      <input class="form-control @error('numero') is-invalid @enderror" name="numero" id="numero" type="integer"  placeholder="numero" value="{{$users->numero}}">
    </div>
    @error('numero')  
    <div class="text-danger">{{ $message }}</div>  
    @enderror
</div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Etes-vous véhiculé ? :</label>
          
         
            <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Oui" checked value="{{$users->véhicule}}">
            <label class="form-check-label" for="véhicule">
              Oui
            </label>
          
         
            <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Non" value="{{$users->véhicule}}">
            <label class="form-check-label" for="véhicule">
              Non
            </label>
          
      </div>
    @error('véhicule')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Domaine :</label>
          <input class="form-control @error('domaine') is-invalid @enderror" name="domaine" id="domaine" type="text"  placeholder="Domaine" value="{{$users->domaine}}">
      </div>
      @error('domaine')  
            <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
      <div class="col-sm-6">
          <div class="">
            <label for="">Statut recherché :</label>
              <select class="form-control @error('statut_id') is-invalid @enderror" name="statut_id" id="statut_id" type="text" placeholder="Statut recherché" value="{{$users->statut_id}}">
                <option value="">-- Statut recherché --</option>
                @foreach ($statuts as $statut)
                  <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                @endforeach
              </select>
            
          </div>
      </div>
     
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Vous êtes disponible à partir du :</label>
            <input class="form-control  @error('dispo') is-invalid @enderror" name="dispo" id="dispo" type="date"  placeholder="Disponibilité" value="{{$users->dispo}}">
        </div>
        @error('dispo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Téléchargez votre cv :</label>
            <input class="form-control  @error('cv') is-invalid @enderror" name="cv" id="cv" type="file"  placeholder=" Modifier votre cv" value="{{$users->cv}}">
        </div>
        @error('cv')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
</div>
    @elseif($users->role_id ==5)
    <div class='row'>

    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Nom :</label>
          <input class="form-control @error('nom') is-invalid @enderror"  maxlength="15"name="nom" id="nom" type="text"  placeholder="Nom" value="{{$users->nom}}">
        </div>
        @error('nom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
   
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Photo :</label>
        <input class="form-control  @error('photo') is-invalid @enderror" name="photo" id="photo" type="file"  placeholder="Photo" value="{{$users->photo}}">
      </div>
      @error('photo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Adresse:</label>
          <input class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="adresse" type="text" placeholder="Adresse" value="{{$users->adresse}}">
      </div>
      @error('adresse')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
          <label for="">Email :</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"  placeholder="Adresse email" value="{{$users->email}}">
        </div>
        @error('email')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>

    
  <div class="col-sm-6">
    <div class="form-group">
        <label for="">Numéro :</label>
      <input class="form-control @error('numero') is-invalid @enderror" name="numero" id="numero" type="integer"  placeholder="numero" value="{{$users->numero}}">
    </div>
    @error('numero')  
    <div class="text-danger">{{ $message }}</div>  
    @enderror
</div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="exampleInputdomaine1">Domaine :</label>
          <input class="form-control @error('domaine') is-invalid @enderror" name="domaine" id="domaine" type="text"  placeholder="Domaine" value="{{$users->domaine}}" id="exampleInputdomaine1">
      </div>
      @error('domaine')  
            <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputdate1">Date de création de l'entreprise :</label>
            <input class="form-control  @error('date') is-invalid @enderror" name="date" id="date" type="date" placeholder="Date de création de l'entreprise"  value="{{$users->date}}" id="exampleInputdate1">
        </div>
        @error('date')  
            <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputtva1">Numéro de TVA :</label>
            <input class="form-control  @error('tva') is-invalid @enderror" name="tva" id="tva" type="integer"  placeholder="Numéro de tva" value="{{$users->tva}}" id="exampleInputtva1">
        </div>
        @error('tva')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputpNom1">Nom de la personne de contact :</label>
            <input class="form-control  @error('pNom') is-invalid @enderror" name="pNom" id="pNom" type="text"  placeholder="Nom de la personne de contact" value="{{$users->pNom}}" id="exampleInputpNom1">
        </div>
        @error('pNom')  
            <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputpTel1">Numéro de contact :</label>
            <input class="form-control @error('pTel') is-invalid @enderror" name="pTel" id="pTel" type="integer"  value="{{$users->pTel}}" id="exampleInputpTel1" placeholder="pTel">
            @error('pTel')  
            <div class="text-danger">{{ $message }}</div>  
              @enderror
          </div>
    </div>
</div>
    @endif
  </div>
  <div class="form-group mt-3 text-center">
      <button type="submit" class="button button-contactForm boxed-btn">Modifier</button>
  </div>
</form>
</div>

@include('components.footer')
@endsection