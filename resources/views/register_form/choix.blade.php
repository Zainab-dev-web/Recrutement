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
<div class="our-services  py-50 my-150 wantToWork-area2 wantToWork-area">
        <div class="container border border-rounded mx-auto m-5 p-5 bg-white">
        <div class="text-center">
            <h3 class="pb-50"><strong>Vous êtes ...</strong></h3>
        </div>
        <div class="row">
            <div class=" col-lg-6 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-experience"></span>
                    </div>
                    <div class="services-cap">
                        <h5>Un talent</h5>
                    </div>
                </div>
            </div>
            <div class=" col-lg-6 col-md-6 col-sm-6">
                <div class="single-services text-center mb-30">
                    <div class="services-ion">
                        <span class="flaticon-pay"></span>
                    </div>
                    <div class="services-cap">
                        <h5>Une entreprise</h5>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

@include('components/footer')
@endsection