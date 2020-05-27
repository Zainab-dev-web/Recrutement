{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Modifier les informations de contact</div>

            
            <div class="card-body">
               
                <form action="{{route('contactInfo.update' , $contact->id)}}" method="post">
                    @csrf
                    @method('PUT')
                <div class="row">

                    <div class="form-group col-md-6">
                        <label for="">Adresse :</label>
                        <textarea type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse"  >{{$contact->adresse}}</textarea>
                        <div class="validation"></div>
                        @error('adresse')  
                        <div class="text-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                   
                 
                    <div class="form-group col-md-6">
                        <label for="">Ville :</label>
                        <input  type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{$contact->ville}}" />
                        <div class="validation"></div>
                        @error('ville')  
                        <div class="text-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                   
                  
                   
                    <div class="form-group col-md-6">
                        <label for="">Rue :</label>
                        <input type="text" class="form-control @error('rue') is-invalid @enderror" name="rue" value="{{$contact->rue}}"/>
                        <div class="validation"></div>
                        @error('rue')  
                        <div class="text-danger">{{ $message }}</div>  
                        @enderror
                    </div>
                      
                        <div class="form-group col-md-6">
                            <label for="">Code postal :</label>
                            <input  type="text"class="form-control @error('code') is-invalid @enderror" name="code" value="{{$contact->code}}"/>
                            <div class="validation"></div>
                            @error('code')  
                            <div class="text-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="">Numéro de téléphone :</label>
                            <input type='integer' class="form-control @error('numero') is-invalid @enderror" name="numero" value="{{$contact->numero}}"/>
                            <div class="validation"></div>
                            @error('numero')  
                            <div class="text-danger">{{ $message }}</div>  
                            @enderror
                        </div>
                            <div class="form-group col-md-6">
                                <label for="">Disponibilité :</label>
                                <input type='text' class="form-control @error('Ndispo') is-invalid @enderror" name="Ndispo" value="{{$contact->Ndispo}}"/>
                                <div class="validation"></div>
                                @error('Ndispo')  
                                <div class="text-danger">{{ $message }}</div>  
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Adresse email :</label>
                                <input type='email' class="form-control @error('email') is-invalid @enderror" name="email" value="{{$contact->email}}"/>
                                <div class="validation"></div>
                                @error('email')  
                                <div class="text-danger">{{ $message }}</div>  
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="">Disponibilité par email :</label>
                                <input type='text' class="form-control @error('Edispo') is-invalid @enderror" name="Edispo" value="{{$contact->Edispo}}"/>
                                <div class="validation"></div>
                                @error('Edispo')  
                                <div class="text-danger">{{ $message }}</div>  
                                @enderror
                            </div>
                   </div>
                   
                   
                   
                <div class="col-12">
                   <button type="submit" class="btn btn-success">Modifier</button>
                </div>
                </div>
            </form>
            
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop