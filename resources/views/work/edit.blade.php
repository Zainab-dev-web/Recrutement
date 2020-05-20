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
            <div class="card-header">Modification du contenu</div>

            
            <div class="card-body">
                <form action="{{route('work.update' , $work->id)}}" method="post" >
                    @csrf
                    @method('PUT')
                <div class="row">
                   
                    <div class="col-12">
                      
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control @error('titre') is-invalid @enderror" name="titre" value="{{$work->titre}}" />
                            <div class="validation"></div>
                        </div>
                          @error('titre')  
                          <div class="text-danger">{{ $message }}</div>  
                          @enderror
                       </div>
                   <div class="col-12">
                      
                    <div class="form-group col-md-6">
                        <textarea type="text" class="form-control @error('description') is-invalid @enderror" name="description">{{$work->description}}</textarea>
                        <div class="validation"></div>
                    </div>
                      @error('description')  
                      <div class="text-danger">{{ $message }}</div>  
                      @enderror
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


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/css/flaticon.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop