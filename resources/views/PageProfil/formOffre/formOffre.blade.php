@extends('layouts.master')

@section('content')
<div class="text-center mt-5">
  <h2>Ajouter une nouvelle offre</h2>
</div>
<div class="container my-5">
<form class="form-contact contact_form" action="{{route('offres.store')}}" method="post" novalidate="novalidate">
  @csrf
  <div class="row">
      <div class="col-sm-6">
          <div class="form-group">
            <input class="form-control valid" name="poste" id="poste" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Poste recherché'" placeholder="Poste recherché">
          </div>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <input class="form-control valid" name="lieu" id="lieu" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder ='Lieu'" placeholder="Lieu">
        </div>
    </div>
      <div class="col-sm-6">
          <div class="form-group">
              <select class="form-control valid" name="statut_id" id="" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Statut recherché'" placeholder="Statut recherché">
                @foreach ($statuts as $statut)
                  <option value="{{$statut->id}}">{{$statut->statut}}</option>  
                @endforeach
              </select>
            
          </div>
      </div>
     
      <div class="col-12 mt-4">
          <div class="form-group">
              <input class="form-control" name="description" id="description" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" placeholder="Description">
          </div>
      </div>
  </div>
  <div class="form-group mt-3">
      <button type="submit" class="button button-contactForm boxed-btn">ADD</button>
  </div>
</form>
</div>
@endsection