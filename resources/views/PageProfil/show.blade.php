@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Profil de " {{$users->nom}}  {{$users->prenom}}"</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->



<div class="container">
    <div class="my-5 profil">
    <img class="my-5" width="200" alt="logo entreprise" src="{{asset('storage/'.$users->photo)}}">
    <h2>{{$users->nom}} {{$users->prénom}} - {{$users->domaine}}</h2>
    <p><b>Email : </b>{{$users->email}}</p> 
    <p><b>Mot de passe : </b>{{$users->password}}</p> 
    <p><b>Adresse : </b>{{$users->adresse}}</p>
    <p><b>Numéro de téléphone : </b>{{$users->numero}}</p>

    @if($users->véhicule!= null)
    <p><b>Possesion de véhicule : </b>{{$users->véhicule}}</p>
    @else
    @endif

    @if($users->dispo!= null)
    <p><b>Disponibilité: </b>{{$users->dispo}}</p>
    @else
    @endif

    @if($users->cv!= null)
    <p><b>Votre CV : </b>{{$users->cv}}</p>
    @else
    @endif
    @if($users->statut_id != null)
    <p><b>Statut : </b>{{$users->statut->statut}}</p> 
    @else
    @endif

    @if($users->date!= null)
    <p><b>Année de création de l'entreprise : </b>{{$users->date}}</p>
    @else
    @endif
    
     @if($users->tva!= null)
    <p><b>Numéro de TVA : </b>{{$users->tva}}</p>
    @else
    @endif
    @if($users->pNom!= null)
    <p><b>Personne de contact : </b>{{$users->pNom}}</p>
    @else
    @endif
    @if($users->pTel!= null)
    <p><b>Numéro de contact : </b>{{$users->pTel}}</p>
    @else
    @endif
    <a class="btn p-3 text-white" data-toggle="modal" data-target="#exampleModalLong">Modifier</a>
    </div>
</div>






   







@include('components/footer')
@endsection