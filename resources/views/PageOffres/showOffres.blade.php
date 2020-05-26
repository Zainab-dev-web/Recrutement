@extends('layouts.master')

@section('content')

@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>{{$offre->user->nom}}</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->


<div class="row my-5 py-5">
  <div class="col-3 my-5">
    
      <div class="text-center">
        
      <img class="mb-2" width="200" alt="logo entreprise" src="{{asset('storage/'.$offre->user->logo)}}">
      <h3>{{$offre->poste}} chez {{$offre->user->nom}}</h3>
      <p> Tel : {{$offre->user->pTel}}</p><p><b>email : {{$offre->user->email}}</b></p>
      <p><b>{{$offre->user->numero}}</b> - TVA {{$offre->user->tva}}</p>
      </div>
   
  </div>
  <div class="col-6 mt-5 text-center">
    <h2 class="my-5">Description and required qualities :</h2>
      <h4 class="text-center mx-4">{{$offre->description}}</h4>
      <h4 class="text-center mx-4">{{$offre->qualite}}</h4>
  </div>
  
  <div class="col-3 mt-5">
      <div class="single_sidebar_widget post_category_widget text-center">
        <a class="btn btn-white mb-3" href="{{route('entreprises.show', $offre->user->id)}}">Profil de l'entreprise</a>
        @can('post-valid')
        @can('post-talent')
        <form action="{{route('candidat.update', $offre)}}" method="post">
          @csrf
          @method('PUT')
              <button class="btn btn-white" type="submit">Postuler</button>  
        </form>
        @endcan
        @endcan
        @if (Auth::check() && Auth::user()->id == $offre->user->id)
        <form action="{{route('offres.destroy', $offre)}}" method="post">
          @csrf
          @method('DELETE')
        <button class="btn btn-white" type="submit">Supprimer mon offre</button>
</form>
@else
    
@endif
      </div>
  </div>
</div>


    @include('components.footer')
    
@endsection
