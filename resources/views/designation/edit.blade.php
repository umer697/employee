@extends('master')
@section('title','Update Designation')

@section('content')
<div class="card-header py-3 ">
    <h6 class="mb-3 font-weight-bold text-primary">Update Designation  
        <a class="btn btn-primary  float-right" href="{{url('/desig')}}">View All</a>
        </h6>
</div>
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Update Designation</h1>
    </div>
<form method="post" action="{{url ('/desig/'.$table->id)}}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for=""  style="font-weight:700; color:black;" class="">Designation</label>
        <input type="text" class="form-control form-control-user" required
         value="{{$table->desig}}"  name="desig" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Designation">
    </div>
       
       
        <input type="submit" class="btn btn-primary btn-block" value="Update">
        <hr>
     
    </form>
    <div class="row">
    <div class="text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                                             
@endsection