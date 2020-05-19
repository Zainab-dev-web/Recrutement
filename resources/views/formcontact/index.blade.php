{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="flex-center position-ref full-height">
            

    <div class="content">
        <div class="mt-5"><h3 class="text-center">Tout vos messages</h3>
        </div>
    
        <table class="table" >
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Nom</th>
             <th scope="col">Prenom</th>
             <th scope="col">Sujet</th>
             <th scope="col">Message</th>
             <th scope="col">Action</th>
           </tr>
         </thead>
         <tbody>
             @foreach ($formcontacts as $item)
             
                 <tr>
                     <td>{{$item->id}}</td>
                     <td>{{$item->nom}}</td>
                     <td>{{$item->email}}</td>
                     <td>{{$item->sujet}}</td>
                     <td>{{$item->msg}}</td>

                     {{-- @if ($item->$newsletter_id) --}}
                 {{-- <td>{{$item->newsletter_id}}</td> --}}
                     {{-- @else
                     <td><p class='p-4 text-uppercase text-white bg-danger'>non envoye</p></td>
                         
                     @endif --}}
                     
                    <td>
                        <form action="{{route('formcontact.destroy',$item)}}" method="post">
                            @csrf
                            @method('DELETE')
                          <button class='btn btn-white'><i class="fas fa-trash text-danger"></i></button>
                        </form>
                    </td>
                     
                 </tr>
                @endforeach
           
         </tbody>
       </table>



        
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
