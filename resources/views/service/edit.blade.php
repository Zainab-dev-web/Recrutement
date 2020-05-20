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
            <div class="card-header">Modification des services</div>

            
            <div class="card-body">
                <form action="{{route('service.update' , $service->id)}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="row">
                   
                    
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
                                           
              
               

                    <div class="col-12">
                      
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$service->titre}}" />
                            <div class="validation"></div>
                        </div>
                          @error('titre')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
                       </div>
                   <div class="col-12">
                      
                    <div class="form-group col-md-6">
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{$service->description}}</textarea>
                        <div class="validation"></div>
                    </div>
                      @error('description')  
                      <div class="text-danger">{{ $message }}</div>  
                      @enderror
                   </div>
                   
                    
                   @if($service['class']==$service->icone) checked @endif
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
    <link rel="stylesheet" href="/css/flaticon.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop