@extends('layouts.master')

@section('content')
@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>{{$entreprise->nom}} profile</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->

<div class="container">
  @if ($entreprise->id == Auth::user()->id)
  <div class="alert alert-info text-center mt-2" role="alert">
    Voici à quoi ressemble votre profil public.
  </div>    
  @else
      
  @endif
  
<div class="row mb-5 mt-3 py-5">
  <div class="col-4 my-5">
      <div class="text-center">
        
      <img class="mb-2" width="200" alt="logo entreprise" src="{{asset('storage/'.$entreprise->photo)}}">
      <h3>{{$entreprise->nom}} - {{$entreprise->domaine}}</h3>
      <p> Tel : {{$entreprise->pTel}}</p><p><b>email : {{$entreprise->email}}</b></p>
      <p><b>{{$entreprise->numero}}</b> - TVA {{$entreprise->tva}}</p>
      </div>
   
  </div>
  <div class="col-4">
    <h2 class="mt-5 mb-4">Our entreprise :</h2>
      <h6 class="text-justify mr-4">Nullam sagittis. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Quisque malesuada placerat nisl. Etiam vitae tortor.</h6>
  </div>
  
  <div class="col-4 mt-100">
      <div class="single_sidebar_widget post_category_widget">
        <a class="btn btn-white" href="{{route('searchoffre', $entreprise->id)}}" type="submit">Voir leurs offres</a>
      </div>
  </div>
</div>
</div>

    @include('components.footer')
    
@endsection
  
