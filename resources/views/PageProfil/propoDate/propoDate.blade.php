@extends('layouts.master')

@section('content')

@include('components.nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Propositions d'entretien d'embauche</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->

 
@foreach ($candidats as $candidat)
@if ($candidat->user_id == Auth::id())
  
<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="">
      <h2>{{$candidat->offre->poste}} chez {{$candidat->offre->user->nom}}</h2>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$candidat->offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($candidat->offre->description, 200, $end=' ...')}}</p>
  <h5>
    Propositions d'entretien :
  </h5>
  <div class="row ml-1 mb-4">
    <b>{{$candidat->date->date1}} - {{$candidat->date->date2}} - {{$candidat->date->date3}}</b>
  </div>

    <a class="btn btn-white" href="{{route('date.edit', $candidat)}}">Choisir une date</a></b></a>

  </div>
</article>
@else
    
@endif

@endforeach


@include('components.footer')

@endsection
  
