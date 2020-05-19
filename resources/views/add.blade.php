@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Ajouter un événement</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
    <div class="container w-25 my-5">

        <form action="{{route('store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Titre :</b></label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer un événement" name="titre">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><b>Date :</b></label>
                <input type="date" class="form-control" id="exampleInputEmail1" name="date">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1"><b>Heure :</b></label>
                <input type="time" class="form-control" id="exampleInputPassword1" placeholder="Password" name="heure">
            </div>
            <div class="text-center">
                <button type="submit" class=" btn ">Envoyer</button>
            </form>
            </div>
    </div>
    
    @include('components/footer')
    @endsection