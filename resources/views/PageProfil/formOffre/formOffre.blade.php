@extends('layouts.master')

@section('content')

@include('components.nav')
<!-- Hero Area Start -->
<div class="hero-area hero-height2 d-flex align-items-center" data-background="{{asset('img/hero/h2_hero.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-cap text-center pt-50">
                    <h2>Ajouter une nouvelle offre</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero Area End -->
<div class="container my-5">
<form class="form-contact contact_form" action="{{route('offres.store')}}" method="post" >
  @csrf
  <div class="row">
      {{-- <div class="col-sm-6">
          <div class="form-group">
            <input class="form-control valid" name="poste" id="poste" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Poste recherché'" placeholder="Poste recherché">
          </div>
      </div> --}}
      <div class="form-group col-sm-6">
        <label for="">Quel poste offrez-vous ? :</label>
        <input type='text' class="form-control @error('poste') is-invalid @enderror" name="poste" placeholder="Mettez le nom du poste"/>
        <div class="validation"></div>
        @error('poste')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
      {{-- <div class="col-sm-6">
        <div class="form-group">
          <input class="form-control valid" name="lieu" id="lieu" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Lieu'" placeholder="Lieu">
        </div>
    </div> --}}
    <div class="form-group col-sm-6">
      <label for="">Dans quel région ? </label>
      <input type='text' class="form-control @error('lieu') is-invalid @enderror" name="lieu" placeholder="Mettez le nom de la région"/>
      <div class="validation"></div>
      @error('lieu')  
      <div class="text-danger">{{ $message }}</div>  
      @enderror
  </div>
  <div class="form-group col-sm-6">
    <label for="">Quel statut doit avoir le candidat ? </label>
    <select class="form-control @error('statut_id') is-invalid @enderror"  placeholder="Statut recherché" name="statut_id" id="">
      <option value="">Statut recherché</option>
                @foreach ($statuts as $statut)
                  <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                @endforeach
    </select>
    <div class="validation"></div>
    @error('statut_id')  
    <div class="text-danger">{{ $message }}</div>  
    @enderror
</div>
      <div class="form-group col-sm-6">
        <label for="">Comment décrivez-vous ce poste ? </label>
        <textarea type='text' class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Décrivez le poste" value="@if($errors->first('description')) 
          @else">{{old('description')}}</textarea>@endif
        <div class="validation"></div>
        @error('description')  
        <div class="text-danger">{{ $message }}</div>  
        @enderror
    </div>
    <div class="form-group col-sm-6">
      <label for="">Quelle(s) qualité(s) recherchez-vous chez un candidat? </label>
      <input type='text' class="form-control @error('qualite') is-invalid @enderror" name="qualite" placeholder="Ajoutez les qualités que vous recherchez"/>
      <div class="validation"></div>
      @error('qualite')  
      <div class="text-danger">{{ $message }}</div>  
      @enderror
  </div>
      
  </div>
  <div class="text-center">
      <button type="submit" class="button button-contactForm boxed-btn">Ajouter</button>
  </div>
</form>
</div>

@include('components.footer')
@endsection