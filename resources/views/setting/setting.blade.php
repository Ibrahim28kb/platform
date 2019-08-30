
        @extends('layouts.app')
        @section('content')

        <div class="container">
            <form action="{{route('settings.update')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}

                

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputEmail4">Blog Name</label>
                  <input type="text" class="form-control" value="{{$settings->blog_name}}" name="blog_name">
                  </div>
                </div>

                <div class="form-row">
                <div class="form-group col-md-6 ">
                  <label for="inputAddress ">phon number</label>
                  <input type="text" class="form-control" value="{{$settings->phon_number}}" name="phon_number" >
                </div>
              </div>

                <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputAddress2">blog email</label>
                  <input type="email" class="form-control" value="{{$settings->blog_email}}" name="blog_email" >
                </div>
              </div>

                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputCity">address</label>
                    <input type="text" class="form-control" value="{{$settings->address}}" name="address">
                  </div>
                </div>
               
                <button type="submit" class="btn btn-primary">Update</button>
                 
              </form>
             
        </div>
     
        @endsection