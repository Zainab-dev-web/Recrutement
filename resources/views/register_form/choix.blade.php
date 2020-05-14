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
<div class="wantToWork-area2 wantToWork-area">
        <div class="container border border-rounded my-5 py-5 bg-white">
            <div class="text-center">
                <h3 class=""><strong>Vous êtes ...</strong></h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 text-center border border-rounded mx-auto my-5">
                <form action="{{route('formtalent')}}" method="get">
                        @csrf
                        <button class="border-0 bg-white my-2" type="submit">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="text-dark flaticon-experience fa-5x"></span>
                        </div>
                        <div class="services-cap">
                        
                            <h5>Un futur "Talent"</h5>
                            
                        </div>
                    </div>
                </button>
                </form>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6 text-center border border-rounded mx-auto my-5">
                    <form action="{{route('formentreprise')}}" method="get">
                        @csrf
                        <button class="border-0 bg-white my-2" type="submit">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="text-dark flaticon-pay fa-5x"></span>
                        </div>
                        <div class="services-cap">
                            
                            <h5>Une entreprise</h5>
                        </div>
                    </div>
                        </button>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>

@include('components/footer')
@endsection