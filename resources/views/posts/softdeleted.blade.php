
@extends('layouts.app')
@section('content')

<div class="container">
<div class="card-header">Post Soft Deleted</div>

@if ($posts->count()>0)
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">Restore</th>
            <th scope="col">Delete</th>
         
          </tr>
        </thead>
        <tbody>
          
      
      @foreach ($posts as $post)
      <tr>
      <th scope="row">
        <img src="{{$post->featured}}" alt="{{$post->title}}"  width="100" height="70">
      </th>
      <th scope="row">{{$post->title}}</th>
       
         <td>
            <a class="" href="{{route('post.restore',['id' =>$post->id ])}}">
               <i class="fas fa-edit"></i>
           </a>
           
         </td>
         <td>
             <a class="" href="{{route('post.fdelete',['id' =>$post->id ])}}">
                 <i class="fas fa-trash-alt"></i>
            </a>
          </td>
       </tr>
          
      @endforeach

      @else
      
      <p scope="row" class="text-center">No Trashed Posts</p>
      
      @endif
         
        </tbody>
      </table>     


  
      
@endsection