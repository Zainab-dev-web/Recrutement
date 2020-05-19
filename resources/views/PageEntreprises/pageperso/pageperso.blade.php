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


<div class="row">
  <div class="col-3 my-5">
    
      <div class="text-center">
        
      <img class="mb-2" width="200" alt="logo entreprise" src="{{asset('storage/'.$entreprise->logo)}}">
      <h3>{{$entreprise->nom}} - {{$entreprise->domaine}}</h3>
      <p> Tel : {{$entreprise->pTel}}</p><p><b>email : {{$entreprise->email}}</b></p>
      <p><b>{{$entreprise->numero}}</b> - TVA {{$entreprise->tva}}</p>
      </div>
   
  </div>
  <div class="col-6 mt-5 text-center">
    <h2 class="my-5">Our entreprise :</h2>
      <h4 class="text-center mx-4">Nullam sagittis. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Quisque malesuada placerat nisl. Etiam vitae tortor.</h4>
  </div>
  
  <div class="col-3 mt-5">
      <div class="single_sidebar_widget post_category_widget">
        <a class="btn btn-white" href="{{route('searchoffre', $entreprise->id)}}" type="submit">Voir leurs offres</a>
      </div>
  </div>
</div>


    @include('components.footer')
    
@endsection
  
