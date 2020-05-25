@extends('layouts.master')

@section('content')
@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>{{$talent->nom}} {{$talent->prénom}} profile</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->

<div class="container">
<div class="row my-5 py-5">
  <div class="col-3 my-5">
    
      <div class="text-center">
        
      <img class="pb-4" width="200" alt="logo talent" src="{{asset('storage/'.$talent->photo)}}">
      <h3>{{$talent->nom}} {{$talent->prénom}} - {{$talent->domaine}}</h3>
      <p> Tel : {{$talent->numero}}</p><p><b>Email : {{$talent->email}}</b></p>
      <p><b>{{$talent->statut->nom}}</b></p>
      </div>
   
  </div>
  <div class="col-5 mt-5">
    <h2 class="mt-3 mb-5">Présentation :</h2>
      <h6 class="text-justify mx-4">Nullam sagittis. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Quisque malesuada placerat nisl. Etiam vitae tortor.</h6>
      @can('post-entreprise')
        
      
      <div class="text-center my-5">
        <a class="btn btn-white" href="">Demande d'entretien</a>
      </div>
      @endcan
  </div>
  
  <div class="col-4 mt-5">
      <div class="single_sidebar_widget post_category_widget">
        <h2 class="mt-3">CV :</h2>
        <a data-toggle="modal" data-target="#exampleModalLong">
        <img class="mb-3" width="250" src="{{asset('storage/' . $talent->cv)}}" alt="cv">
        </a>
      </div>
  </div>
</div>
</div>

    @include('components.footer')


     <!-- Modal -->
     <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="fas fa-times"></i>
              </button>
          </div>
          <div class="modal-body text-sucess" >
      
              <div class="text-center">
                <img width="450" src="{{asset('storage/' . $talent->cv)}}" alt="cv">
              </div>

          </div>
          <div class="modal-footer">
          </div>
          </div>
      </div>
      </div>
    
@endsection
  
