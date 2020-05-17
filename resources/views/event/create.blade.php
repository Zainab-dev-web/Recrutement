@extends('layouts/master')
@section('content')
@include('components/nav')

<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Agenda</h2>
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
        <h3 class="pb-50"><strong>Ajouter un évenement: </strong></h3>
    </div>
    <div class="row d-flex text-center">
        <div class="col-lg-8 col-md-6 col-sm-6">
            <form action="{{route('event.store')}}" method="post">
                @csrf
                @method('POST')
                <div class="single-services text-center mb-30">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Titre</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                        <div class="col-md-6">
                            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description">

                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="start" class="col-md-4 col-form-label text-md-right">Date de démarage:</label>

                        <div class="col-md-6">
                            <input id="start" type="date" class="form-control @error('start') is-invalid @enderror" name="start" value="{{ old('start') }}" required autocomplete="start">

                            @error('start')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="end" class="col-md-4 col-form-label text-md-right">Date de fin:</label>

                        <div class="col-md-6">
                            <input id="end" type="date" class="form-control @error('end') is-invalid @enderror" name="end" value="{{ old('end') }}" required autocomplete="end">

                            @error('end')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>



<div class="text-center">
    <button  class='btn btn-info'type="submit">Ajouter</button>
</div>


                    
            </div>
            </form>
        </div>
        
       
        
    </div>
</div>
</div>

@include('components/footer')
@endsection