@extends('master')
@section('title','Update Department')

@section('content')
<div class="card-header py-3 ">
    <h4 class="mb-3 font-weight-bold text-primary">Update Department  
        <a class="btn btn-primary  float-right" href="{{url('/depart')}}">View All</a>
        </h4>
</div>
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Update Department</h1>
    </div>
<form method="post" action="{{url ('/depart/'.$table->id)}}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="" style="font-weight:700; color:black;" class="">Department</label>
        <input type="text" class="form-control form-control-user" required
         value="{{$table->title}}"  name="title" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Department">
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