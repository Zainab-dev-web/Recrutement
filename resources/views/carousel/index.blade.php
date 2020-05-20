{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <h2 class='text-center my-2'>Section carousel</h2>

    <table class="table text-center" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($carousels as $item)
                {{-- le dolar se trouve dans le controller le compact --}}
            
                <tr class="a">
                    <td>{{$item->id}}</td>
                    <td><img class='w-50'src="{{asset('storage/'.$item->photo)}}" alt=""></td>
                    
                    <td>
                            <a href='{{route('carousel.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning fa-3x"></i></a>
                          
                    </td>
                 
                   
                </tr>
     
     
          
          @endforeach
          
        </tbody>
      </table>
      <div class="container mx-auto text-center py-5">
        <h2 class='py-3'>Modifier le contenu</h2>
        <hr>
        @foreach ($carousels as $item)
        <div class="text-center bg-secondary py-3 rounded"><h5>{{$item->name}}</h5>
      <div class="text-center bg-secondary py-3 rounded"><h5>{{$item->titre}}</h5>
        <div class="text-center bg-secondary py-3 rounded"><h5>{{$item->slogan}}</h5>
      <a href='{{route('carousel.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a></div>
        @endforeach
       
          </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop