{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="content">
                
    <form action="{{route('service.store')}}" method="POST">
        @csrf
        @method('POST')
        <h2 class="text-center">Ajouter un service :</h2>
        <hr>
        <div class="form-row text-center">
              
            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Titre</label>
                <input type="text" placeholder="Entrer le titre"class="form-control @error('titre') is-invalid @enderror" name="titre" value="@if($errors->first('titre')) 
                @else{{old('titre')}}@endif"/>
                <div class="validation"></div>
            </div>
               
                @error('titre')  
                <div class="text-danger">{{ $message }}</div>  
                @enderror
       
            <div class="form-group col-md-6 mx-auto py-4">
                <label for="">Description</label>
                <input type="text" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Entrer la description" value="@if($errors->first('description')) 
                @else{{old('description')}}@endif"/>
                <div class="validation"></div>
            </div>
              @error('description')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror
           
              <div class="form-group col-md-6 mx-auto py-4">
              <label for="">Icone:</label>
            <div class="form-group row py-4">
            
                <div class="form-check col-2">
                    <input value="flaticon-tour" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-tour fa-3x"></i></label>
                  </div>  
                  <div class="form-check col-2">
                    <input value="flaticon-pay" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-pay fa-3x"></i></label>
                  </div>
                  <div class="form-check col-2">
                    <input value="flaticon-experience" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-experience fa-3x"></i></label>
                  </div>
                  <div class="form-check col-2">
                    <input value="flaticon-good" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-good fa-3x"></i></label>
                  </div>
                  <div class="form-check col-2">
                    <input value="flaticon-quote" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-quote fa-3x"></i></label>
                  </div>
                  <div class="form-check col-2">
                    <input value="flaticon-arrow" class="form-check-input ml-4" type="radio" name="icone">
                    <label class="form-check-label mb-3"><i class="flaticon-arrow fa-3x"></i></label>
                  </div>                  
                           
            
        
        </div>
    </div>
            @error('icone')  
            <div class="text-danger">{{ $message }}</div>  
            @enderror
    
        </div>
            
            <div class="text-center"><button class="btn btn-info"type="submit">Ajouter</button></div>
      </form>
  
    
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/flaticon.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

