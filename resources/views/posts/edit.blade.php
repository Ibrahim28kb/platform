
@extends('layouts.app')
@section('content')

<div class="container">

<div class="card-header">Edit Post</div>
     

@if(count($errors)>0)

<ul class="navbar-nav mr-auto">
    @foreach ($errors->all() as $error)
    <li class="nav-item active">
        {{$error}}
      </li>
    @endforeach
</ul>
@endif



<form action="{{route('post.update',['id'=>$posts->id])}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}

  <div class="form-group">
    <label for="category_id">Category</label>
    <select class="form-control" name="category_id" id="category">

      @foreach ($categories as $category)
      @if ($category->id == $posts->category_id)
      <option value="{{$category->id}}" selected>{{$category->name}}</option>
      @else 
      <option value="{{$category->id}}"  >{{$category->name}}</option>
     @endif
      @endforeach
    </select>
  </div>

   
   
  <div class="card-header">Tags</div>
  <div class="form-check">
      

      @foreach ($tags as $tag)
      <input class="form-check-input" type="checkbox" name="tags[]" value="{{$tag->id}}" 
      @foreach ($posts->tags as $ta)

      @if($tag->id == $ta->id)

      checked 
       @endif
       @endforeach
       >
      <label class="form-check-label"  >
          {{$tag->tag}}
      </label> <br>
      @endforeach



    </div>



    <div class="form-group">
      <label for="title">title</label>
    <input type="text" value="{{$posts->title}}"  name="title" class="form-control" >
    </div>

    <div class="form-group">
      <label for="content">Description</label>
      <textarea class="form-control" value="" name="content" id="content" cols="8" rows="8">
        {{!! $posts->content !!}}
      </textarea>
    </div>

    <div class="form-group">
      <label for="featured">Photo</label>
      <input type="file" class="form-control" name="featured" placeholder="">
    </div>
   
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
      
@endsection

@section('styles')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">

@endsection


@section('scripts')
 
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js" defer></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
<script>
    $(document).ready(function() {
      $('#content').summernote();
    });
</script>

@endsection