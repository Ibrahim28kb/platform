
@extends('layouts.app')
@section('content')

<div class="container">
<div class="card-header">tags</div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
         
          </tr> 
        </thead>
        <tbody>
          
         @foreach ($tags as $tag)
         <tr>
         <th scope="row">{{$tag->tag}}</th>
            <td>
               <a class="" href="{{route('tag.edit',['id' =>$tag->id ])}}">
                  <i class="fas fa-edit"></i>
              </a>
              
            </td>
            <td>
                <a class="" href="{{route('tag.delete',['id' =>$tag->id ])}}">
                    <i class="fas fa-trash-alt"></i>
               </a>
             </td>
          </tr>
             
         @endforeach
         
        </tbody>
      </table>     


  
      
@endsection