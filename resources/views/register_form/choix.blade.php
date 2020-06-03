@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Inscription</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Our Services Start -->
<div class="our-services py-50 my-150 wantToWork-area2 wantToWork-area">
    <div class="container border border-rounded mx-auto m-5 p-5 bg-white w-75">
    <div class="text-center">
        <h3 class="pb-50"><strong>Vous êtes ...</strong></h3>
    </div>
    <div class="row d-flex">
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <form action="{{route('formtalent')}}" method="get">
                @csrf
                <div class="single-services text-center mb-30">
                    <button class="border-0 bg-white" type="submit">
                <div class="services-ion">
                    <span class="flaticon-experience"></span> 
                </div>
                <div class="services-cap">
                    <br>
                    <h5>Un talent</h5>
                </div>
            </button>
            </div>
            </form>
        </div>
        <div class="ou col-lg-2 col-md-2 col-sm-2 col-xs-2 text-center">
            <h3><strong>ou</strong></h3>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
            <form action="{{route('formentreprise')}}" method="get">
                @csrf
                <div class="single-services text-center mb-30">
                    <button class="border-0 bg-white my-2" type="submit">
                <div class="services-ion">
                    <span class="flaticon-pay"></span>
                </div>
                <div class="services-cap">
                    <h5>Une entreprise</h5>
                </div>
                </button>
            </div>
            </button>
        </form>
        </div>
        
    </div>
</div>
</div>

@include('components/footer')
@endsection