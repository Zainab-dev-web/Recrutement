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
@foreach ($events as $event)

@if ($event->offre->user->id == Auth::user()->id && $event->user->id != Auth::user()->id)

<article class="blog_item container">
  <div class="blog_item_img">
      <img class="card-img rounded-0" src="assets/img/blog/single_blog_1.png" alt="">
  </div>

  <div class="blog_details">
      <a class="d-inline-block" href="">
      <h2>{{$event->offre->poste}} chez {{$event->offre->user->nom}}</h2>
      </a>
  <p><i class="fas fa-map-marker-alt"></i> {{$event->offre->lieu}}</p>
  <p>{{\Illuminate\Support\Str::limit($event->offre->description, 200, $end=' ...')}}</p>
  <h5>
    L'entretien a eu lieu avec {{$event->user->nom}} {{$event->user->prénom}}
  </h5>
            <a class="btn btn-white" href="{{route('evaluation.edit', $event)}}">Évaluer</a></b></a>   
  </div>
</article>

    
@else
    
@endif
    
@endforeach

@if (count($events) == 0)
<div class="text-center my-5">
  <h3><b>Vous n'avez pas d'entretiens en cours...</b></h3>
</div>
    
@else
    
@endif


@include('components.footer')

@endsection
  
