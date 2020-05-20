@extends('layouts.master')

@section('content')
  @include('components.nav')
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
<div class="container w-25">
<form action="{{route('date.update', $candidat)}}" method="post">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Première date d'entretien</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"name="date1">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Deuxième date d'entretien</label>
    <input type="date" class="form-control" id="exampleInputEmail1" name="date2">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">Troisième date d'entretien</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="date3">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

  @include('components.footer')

    
@endsection
  
