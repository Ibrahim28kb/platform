
@extends('layouts.app')
@section('content')

<div class="container">
 
  <div class="card-header">Edit  {{$category->name}}</div>
       
  <form action="{{route('category.update',['id'=>$category->id ])}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" value="{{$category->name}}" >
      
    </div>
  
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
      
@endsection