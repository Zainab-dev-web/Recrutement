@extends('layouts.master')

@section('content')


<div class="container">
  

@foreach ($offres as $offre)
@if ($offre->user_id == Auth::id())
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
           <h5><a href=""><b>{{$candidat->user->nom}} {{$candidat->user->prénom}} <a class="btn btn-white" href="">Accepter</a> <a class="btn btn-white" href="">Refuser</a></b></a></h5>
       @else
           
       @endif
   @endforeach

  </div>
</article>
@else
    
@endif
   
@endforeach
</div>
    @include('components.footer')
    
@endsection
  
