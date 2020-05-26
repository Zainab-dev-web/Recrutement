@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Oops !</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<!-- Our Services Start -->
<div class="our-services py-50 my-150 wantToWork-area2 wantToWork-area">
    <div class="container border border-rounded mx-auto m-5 p-5 bg-white">
    <div class="text-center mt-5">
        <h3 class="pb-50"><strong>Désolé vous n'avez pas encore accès à votre compte car il n'a pas été validé !<br> Merci de votre patience...</strong></h3>
    </div>
    
</div>
</div>

@include('components/footer')
@endsection