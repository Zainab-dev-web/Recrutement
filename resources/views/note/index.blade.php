{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h2 class='text-center my-2'>Note de {{$user->nom}}</h2>

    <table class="table" >
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Note</th>
            <th scope="col">Action</th>
            
            
           
          </tr>
        </thead>
        <tbody>
            @foreach ($evals as $eval)
            @if($eval->user_id == $user->id)
            
                <tr>
                    <td>{{$eval->id}}</td>
                    @if ($eval->note_id == 1)
                        <td><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i></td>
                    @elseif ($eval->note_id == 2)
                    <td><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i></td>
                    @elseif ($eval->note_id == 3)
                    <td><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i><i class="far fa-star text-warning"></i></td>
                    @elseif($eval->note_id == 4)
                    <td><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="far fa-star text-warning"></i></td>
                    @elseif($eval->note_id == 5)
                    <td><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i><i class="fas fa-star text-warning"></i></td>
                    @endif
                    <td>
                            {{-- <a href='{{route('contactInfo.edit', $item)}}' class='btn btn-white'><i class="far fa-edit text-warning"></i></a>
                           --}}
                    </td>
                 
                   
                </tr>
     
                @else

                
                @endif
          
          @endforeach
          
        </tbody>
      </table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop