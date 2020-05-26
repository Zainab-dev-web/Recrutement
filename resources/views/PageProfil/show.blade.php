@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Profil</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->






<h4>Nom</h4>
<p>{{$users->nom}}</p>

<hr>



   







@include('components/footer')
@endsection