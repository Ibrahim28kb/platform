
@extends('layouts.app')
@section('content')

<div class="container">
<div class="card-header">Categories</div>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
         
          </tr> 
        </thead>
        <tbody>
          
         @foreach ($categories as $category)
         <tr>
         <th scope="row">{{$category->name}}</th>
            <td>
               <a class="" href="{{route('category.edit',['id' =>$category->id ])}}">
                  <i class="fas fa-edit"></i>
              </a>
              
            </td>
            <td>
                <a class="" href="{{route('category.delete',['id' =>$category->id ])}}">
                    <i class="fas fa-trash-alt"></i>
               </a>
             </td>
          </tr>
             
         @endforeach
         
        </tbody>
      </table>     

	<!-- jQuery Plugins -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<script src="{{asset('js/main.js')}}"></script>
  
      
@endsection