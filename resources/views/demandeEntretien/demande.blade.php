@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                <h3 class="text-white">Pour quelle offre désirez-vous proposer un entretien à {{$user->nom}} {{$user->prénom}} ?</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Our Services Start -->
<div class="our-services py-50 my-150 wantToWork-area2 wantToWork-area">
    <div class="container border border-rounded mx-auto m-5 p-5 bg-white">
    <div class="text-center">
    </div>
    <div class="row d-flex">

      @foreach ($offres as $offre)
          
        <div class="col-lg-5 col-md-6 col-sm-6">
            <form action="{{route('formtalent')}}" method="get">
                @csrf
                <div class="single-services text-center mb-30">
                    <button class="border-0 bg-white" type="submit">
                    <h5>{{$offre->poste}} chez {{$offre->user->nom}}</h5>
                    <p><i class="fas fa-map-marker-alt"></i> {{$offre->lieu}}</p>
                <div class="services-cap">
                    <br>
                <p>{{\Illuminate\Support\Str::limit($offre->description, 100, $end=' ...')}} </p>
                </div>
            </button>
            </div>
            </form>
        </div>
 @endforeach
        
    </div>
</div>
</div>

@include('components/footer')
@endsection