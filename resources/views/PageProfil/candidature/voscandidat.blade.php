@extends('layouts.master')

@section('content')

@include('components.nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center mb-5" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Vos candidatures</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
@foreach ($candidats as $candidat)

@if ($candidat->user->id == Auth::user()->id)

<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="" alt="">
  </div>

  <div class="blog_details">
    <div class="row">
    <div class="blog_item_img col-2">
      <img class="card-img w-75" src="{{asset('storage/' . $candidat->offre->user->photo)}}" alt="">
  </div>
      <a class="d-inline-block" href="">
      <h2>Entretien avec {{$candidat->offre->user->nom}}</h2>
      <p>Pour le poste de {{$candidat->offre->poste}}</p>
      </a>
  </div>
  <p>Statut de la candidature : @if ($candidat->accept == 0)
  <td><b>En attente</b></td>
  @elseif ($candidat->accept == 1)
  <td class="text-success"><strong>Accepté</strong></td>
  @endif
  @if ($candidat->accept == 2)
   <td class="text-danger"><strong>Refusé</strong></td>   
  @endif</p>
 
  </div>
</article>

    
@else
    
@endif
    
@endforeach

@if (count($candidats) == 0)
<div class="text-center my-5 p-3">
  <div class="alert alert-info" role="alert">
      Vous n'avez pas encore de candidatures !
  </div>
  </div>
    
@else
    
@endif


@include('components.footer')

@endsection
  
