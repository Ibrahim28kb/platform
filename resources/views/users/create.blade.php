
@extends('layouts.app')
@section('content')

<div class="container">

  
    @if(count($errors)>0)

    <ul class="navbar-nav mr-auto">
        @foreach ($errors->all() as $error)
        <li class="nav-item active">
            {{$error}}
          </li>
        @endforeach
    </ul>
    @endif
       
  <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Users Name ">  
    </div>
      
    <div class="form-group">
      <label for="name">Email</label>
      <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Users Email ">
    </div>
    
    
   
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
</div>
      
@endsection