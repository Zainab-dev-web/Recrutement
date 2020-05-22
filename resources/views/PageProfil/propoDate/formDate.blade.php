@extends('layouts.master')

@section('content')
  @include('components.nav')
  <!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
  <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="hero-cap text-center pt-50">
                  <h2>Nouvel entretien</h2>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Hero Area End -->
<div class="container w-25">
<form action="{{route('event.update', $candidat)}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-check">
    <input class="form-check-input" type="radio" name="date" id="exampleRadios1" value="{{$candidat->date->date1}}" checked>
    <label class="form-check-label" for="exampleRadios1">
      <b>{{$candidat->date->date1}}</b>
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="date" id="exampleRadios2" value="{{$candidat->date->date2}}">
    <label class="form-check-label" for="exampleRadios2">
      <b>{{$candidat->date->date2}}</b>
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="date" id="exampleRadios2" value="{{$candidat->date->date3}}">
    <label class="form-check-label" for="exampleRadios2">
      <b>{{$candidat->date->date3}}</b>
    </label>
  </div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

  @include('components.footer')

    
@endsection
  