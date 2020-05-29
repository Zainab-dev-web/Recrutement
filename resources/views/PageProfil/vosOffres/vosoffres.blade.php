@extends('layouts.master')

@section('content')

@include('components.nav')
{{-- VosOffresController --}}
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center mb-5" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Vos Offres</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->

<div class="container">
  

@foreach ($offres as $offre)
<article class="blog_item">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="{{route('offres.show', $offre->id)}}">
      <h2>{{$offre->poste}} chez {{$offre->user->nom}}</h2>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($offre->description, 200, $end=' ...')}}</p>
  <h2>Candidatures :</h2>
         @foreach ($candidats as $candidat)
       @if ($candidat->offre_id == $offre->id)
    <h5><a href="{{route('talents.show', $candidat->user->id)}}"><b>{{$candidat->user->nom}} {{$candidat->user->prénom}}</a> <a class="btn btn-white" href="{{route('accepter', $candidat->id)}}">Accepter</a> <a class="btn btn-white" href="{{route('refuser', $candidat->id)}}">Refuser</a></b></h5>
       @else
         
       @endif
   @endforeach

  </div>
</article>

@endforeach

@if (count($offres) == 0)
<div class="text-center my-5">
  <h3>Vous n'avez pas d'offres...</h3>
</div>
    
@else
    
@endif
</div>
<div class='text-center my-3'>
  <a href="{{route('profil.index')}}" class='btnagenda btn'><i class="fas fa-long-arrow-alt-left">  Retour au profil</i></a>
  </div>
    @include('components.footer')

    
@endsection
  
