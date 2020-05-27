@extends('layouts.master')

@section('content')

@include('components.nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center mb-5" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Vos évaluations</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
{{-- TALENT --}}
@if (Auth::check() && Auth::user()->role_id == 4)
@foreach ($evals as $eval)

@if ($eval->user->id == Auth::user()->id)

<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="">
      <h2>Entretien avec {{$eval->offre->user->nom}}</h2>
      <p>Pour le poste de {{$eval->offre->poste}}</p>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$eval->offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($eval->offre->description, 200, $end=' ...')}}</p>
  <h5>
    Résultat de votre évaluation : <b>{{$eval->note->note}}</b>/5 <h3><b>{{$eval->resultat->nom}}</b></h3>
  </h5>
  <ul class="mb-3">
    <li><b>Impression :</b> {{$eval->impression}}</li>
    <li><b>Savoir :</b> {{$eval->savoir}}</li>
    <li><b>Sérieux :</b> {{$eval->serieux}}</li>
    <li><b>Capacité :</b> {{$eval->capacite}}</li>
  </ul>
    @if ($eval->termine == null)
       <a class="btn btn-white" href="{{route('note.edit', $eval)}}">Évaluer</a></b></a> 
    @elseif ($eval->termine == 1)
        
    @endif
      

  </div>
</article>

    
@else
    
@endif
    
@endforeach

@elseif(Auth::check() && Auth::user()->role_id == 5)
@foreach ($evals as $eval)

@if ($eval->user->id == Auth::user()->id)

<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="">
      <h2>Entretien avec {{$eval->offre->user->nom}}</h2>
      <p>Pour le poste de {{$eval->offre->poste}}</p>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$eval->offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($eval->offre->description, 200, $end=' ...')}}</p>
  <h5>
    Résultat de votre évaluation : <b>{{$eval->note->note}}</b>/5 <h3><b>À {{$eval->resultat->nom}} le poste</b></h3>
  </h5>
  <ul class="mb-3">
    <li><b>Impression :</b> {{$eval->impression}}</li>
    <li><b>Savoir :</b> {{$eval->savoir}}</li>
    <li><b>Sérieux :</b> {{$eval->serieux}}</li>
    <li><b>Capacité :</b> {{$eval->capacite}}</li>
  </ul>
  
  </div>
</article>

    
@else
    
@endif
    
@endforeach
@endif


@if (count($evals) == 0)
<div class="text-center my-5 p-3">
<div class="alert alert-info" role="alert">
    Vous n'avez pas encore d'évaluations !
</div>
</div>
    
@else
    
@endif


@include('components.footer')

@endsection
  
