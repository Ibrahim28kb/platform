
@extends('layouts.app')
@section('content')

<div class="container">
 
  <div class="card-header">Edit  {{$tag->tag}}</div>
       
  <form action="{{route('tag.update',['id'=>$tag->id ])}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="tag" value="{{$tag->tag}}" >
      
    </div>
  
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
      
@endsection