
@extends('layouts.app')
@section('content')

<div class="container">
<div class="card-header">Users</div>

@if ($users->count()>0)
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
         
          </tr>
        </thead>
      
        <tbody>
       
         @foreach ($users as $user)
         <tr>
         <th scope="row">
           <img src="https://www.pngarts.com/files/3/Avatar-PNG-Picture.png" alt=""  width="50" height="50">
         </th>
         <th scope="row">{{$user->name}}</th>
          
            <td>

              @if($user->admin)
              <a class="" href="{{route('users.notAdmin',['id'=> $user->id])}}">
                  delete admin
             </a>
              @else
            <a class="" href="{{route('users.admin',['id'=> $user->id])}}">
                    make admin
               </a>
              @endif
           
            </td>
            <td>
                <a class="" href="">
                    <i class="fas fa-trash-alt"></i>
               </a>
             </td>
          </tr>
             
         @endforeach
         
      @else
      
      <p scope="row" class="text-center">No Users</p>
      
      @endif
         
        </tbody>
      </table>     


  
      
@endsection