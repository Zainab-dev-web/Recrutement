@extends('layouts.master')

@section('content')

@include('components.nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center mb-5" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Vos entretiens</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
@foreach ($notes as $note)

@if ($note->user->id == Auth::user()->id)

<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="">
      <h2>Entretien avec {{$note->offre->user->nom}}</h2>
      <p>Pour le poste de {{$note->offre->poste}}</p>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$note->offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($note->offre->description, 200, $end=' ...')}}</p>
  <h5>
    Résultat de votre évaluation : <b>{{$note->note->note}}</b>/5 <h3><b>{{$note->resultat->nom}}</b></h3>
  </h5>
  <ul class="mb-3">
    <li>Impression : {{$note->impression}}</li>
    <li>Savoir : {{$note->savoir}}</li>
    <li>Sérieux {{$note->serieux}}</li>
    <li>Capacité : {{$note->capacite}}</li>
  </ul>
    <a class="btn btn-white" href="{{route('note.edit', $note)}}">Évaluer</a></b></a>

  </div>
</article>

    
@else
    
@endif
    
@endforeach

@if (count($notes) == 0)
<div class="text-center my-5 border p-3">
  <h3>Vous n'avez pas encore d'évaluations...</h3>
</div>
    
@else
    
@endif


@include('components.footer')

@endsection
  
