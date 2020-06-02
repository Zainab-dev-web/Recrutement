@extends('layouts.master')

@section('content')

@include('components.nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center mb-5" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Vos Matchs</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->

<div class="container">
      <div class="my-5" id="match">
        <div class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title mb-3 text-center"><i class="fas fa-heart text-danger fa-1x"></i> Vos matches</h4>
            <div class="row">
                @foreach ($offres as $offre)
                @foreach ($offre->matchs as $item)
                @if ($item->pivot->user_id == Auth::user()->id)
                @if ($item->pivot->offre_id == $offre->id)
                <div class="col-4 border border-secondary rounded p-3 m-3">

                    <ul class="list cat-list">
                    <li> <p><b>Poste : </b>{{$offre->poste}}.</p></li>
                        <li><p><i class="fas fa-map-marker-alt"></i> <b>Lieu : </b>{{$offre->lieu}}.</p></li>
                        <li><p><b>Il faut être : </b>{{$offre->qualite}}.</p></li>
                        <li><p><b>Description de l'offre : </b>{{$offre->description}}</p></li>
                        <li><b>Entreprise : </b><p class='text-uppercase'>{{$offre->user->nom}}</p></li>
                    </ul>

                    {{-- button supprimer --}}
                
                </div>
                @else
                    
                @endif
                @else
                    
                @endif
										

                @endforeach	
                @endforeach
            </div>
        </div>
    </div>
    <div class='text-center my-3'>
      <a href="{{route('profil.index')}}" class='btnagenda btn'><i class="fas fa-long-arrow-alt-left">  Retour au profil</i></a>
      </div>
  </div>

    @include('components.footer')

    
    @endsection
      