@extends('layouts.master')

@section('content')
@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Account Settings</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->

<div class="container my-5">
    <form class="form-contact contact_form" action="" method="post" novalidate="novalidate">
      @csrf
      <div class="row">
          <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Nom'" placeholder="Nom">
              </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Prénom'" placeholder="Prénom">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="">
                <select class="form-control" name="statut_id" id="statut_id" type="text" placeholder="Statut recherché">
                  <option value="">Statut recherché</option>
                  @foreach ($statuts as $statut)
                    <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                  @endforeach
                </select>
            </div>
        </div>
         
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Domaine'" placeholder="Domaine">
            </div>
        </div>   
      </div>
      <div class="row">
          <div class="col-sm-6">
              <div class="form-group">
                <input class="form-control valid" name="" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Adresse'" placeholder="Adresse">
              </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <input class="form-control valid" name="" id="" type="number" onfocus="this.placeholder = ''" onblur="this.placeholder ='Numéro'" placeholder="Numéro">
            </div>
        </div>
      <div class="form-group mt-3 ml-3">
          <button type="submit" class="button button-contactForm boxed-btn">Edit</button>
      </div>
    </form>
</div>
</div>
    

@include('components.footer')
    
@endsection