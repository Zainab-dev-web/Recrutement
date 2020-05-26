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
  
  
  
  @if($user->role_id == 4)
      <div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Nom :</label>
          <input class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" type="text"  placeholder="Nom" value="{{$user->prenom}}">
        </div>
        @error('nom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="">Prénom :</label>
        <input class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" type="text"  placeholder="Prénom" value="{{$user->prenom}}">
      </div>
      @error('prénom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Photo :</label>
        <input class="form-control  @error('photo') is-invalid @enderror" name="photo" id="photo" type="file"  placeholder="Photo" value="{{$user->photo}}">
      </div>
      @error('photo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Adresse:</label>
          <input class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="adresse" type="text" placeholder="Adresse" value="{{$user->adresse}}">
      </div>
      @error('adresse')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
          <label for="">Email :</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"  placeholder="Adresse email" value="{{$user->email}}">
        </div>
        @error('email')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>

    <div class="col-sm-6">
      <div class="form-group">
          <label for="">Mot de passe :</label>
          <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password"  placeholder="Mot de passe" value="{{$user->password}}">
      </div>
      @error('password')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Etes-vous véhiculé ? :</label>
          
         
            <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Oui" checked value="{{$user->véhicule}}">
            <label class="form-check-label" for="véhicule">
              Oui
            </label>
          
         
            <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Non" value="{{$user->véhicule}}">
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
          <input class="form-control @error('domaine') is-invalid @enderror" name="domaine" id="domaine" type="text"  placeholder="Domaine" value="{{$user->domaine}}">
      </div>
      @error('domaine')  
            <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
      <div class="col-sm-6">
          <div class="">
            <label for="">Statut recherché :</label>
              <select class="form-control @error('statut_id') is-invalid @enderror" name="statut_id" id="statut_id" type="text" placeholder="Statut recherché" value="{{$user->statut_id}}">
                <option value="">-- Statut recherché --</option>
                @foreach ($statuts as $statut)
                  <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                @endforeach
              </select>
            
          </div>
      </div>
     
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Vous étes disponibile à partir du :</label>
            <input class="form-control  @error('dispo') is-invalid @enderror" name="dispo" id="dispo" type="date"  placeholder="Disponibilité" value="{{$user->dispo}}">
        </div>
        @error('dispo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Télécharger votre cv :</label>
            <input class="form-control  @error('cv') is-invalid @enderror" name="cv" id="cv" type="file"  placeholder=" Modifier votre cv" value="{{$user->cv}}">
        </div>
        @error('cv')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
</div>
    @elseif($user->role_id ==5)
    <div class='row'>

    
    <div class="col-sm-6">
        <div class="form-group">
            <label for="">Nom :</label>
          <input class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" type="text"  placeholder="Nom" value="{{$user->nom}}">
        </div>
        @error('nom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label for="">Prénom :</label>
        <input class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="premom" type="text"  placeholder="Prénom" value="{{$user->prenom}}">
      </div>
      @error('prenom')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Photo :</label>
        <input class="form-control  @error('photo') is-invalid @enderror" name="photo" id="photo" type="file"  placeholder="Photo" value="{{$user->photo}}">
      </div>
      @error('photo')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="">Adresse:</label>
          <input class="form-control @error('adresse') is-invalid @enderror" name="adresse" id="adresse" type="text" placeholder="Adresse" value="{{$user->adresse}}">
      </div>
      @error('adresse')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
          <label for="">Email :</label>
            <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email"  placeholder="Adresse email" value="{{$user->email}}">
        </div>
        @error('email')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>

    <div class="col-sm-6">
      <div class="form-group">
          <label for="">Mot de passe :</label>
          <input class="form-control @error('password') is-invalid @enderror" name="password" id="password" type="password"  placeholder="Mot de passe" value="{{$user->password}}">
      </div>
      @error('password')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
        <label class="mx-2"for="">Etes-vous véhiculé ? : </label>
          
        
            
            <div class="form-check-inline">
              <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Oui" checked value="{{$user->véhicule}}">
              <label class="form-check-label" for="véhicule">
                Oui
              </label>
            
            </div>
            <div class="form-check-inline">
              <input class="véhicule" type="radio" name="véhicule" id="véhicule" value="Non" value="{{$user->véhicule}}">
              <label class="form-check-label" for="véhicule">
                Non
              </label>
            </div>
            
        </div>
      </div>
    @error('véhicule')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
  <div class="col-sm-6">
      <div class="form-group">
          <label for="exampleInputdomaine1">Domaine :</label>
          <input class="form-control @error('domaine') is-invalid @enderror" name="domaine" id="domaine" type="text"  placeholder="Domaine" value="{{$user->domaine}}" id="exampleInputdomaine1">
      </div>
      @error('domaine')  
            <div class="text-danger">{{ $message }}</div>  
    @enderror
  </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputdate1">Date de création de l'entreprise :</label>
            <input class="form-control  @error('date') is-invalid @enderror" name="date" id="date" type="date" placeholder="Date de création de l'entreprise"  value="{{$user->date}}" id="exampleInputdate1">
        </div>
        @error('date')  
            <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputtva1">Numéro de TVA :</label>
            <input class="form-control  @error('tva') is-invalid @enderror" name="tva" id="tva" type="integer"  placeholder="Numéro de tva" value="{{$user->tva}}" id="exampleInputtva1">
        </div>
        @error('tva')  
        <div class="text-danger">{{ $message }}</div>  
    @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputpNom1">Nom de la personne de contact :</label>
            <input class="form-control  @error('pNom') is-invalid @enderror" name="pNom" id="pNom" type="text"  placeholder="Nom de la personne de contact" value="{{$user->pNom}}" id="exampleInputpNom1">
        </div>
        @error('pNom')  
            <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="exampleInputpTel1">Numéro de contact :</label>
            <input class="form-control @error('pTel') is-invalid @enderror" name="pTel" id="pTel" type="integer"  value="{{$user->pTel}}" id="exampleInputpTel1" placeholder="pTel">
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