@extends('master')
@section('title','Add department')

@section('content')
<div class="card-header py-3 ">
    <h4 class="mb-3 font-weight-bold text-primary ">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Add department  
        <a class="btn btn-primary  float-right" href="{{url('/depart')}}">View All</a>
        </h4>
</div>
<div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
    <div class="col-lg-6">
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4"></h1>
    </div>
<form method="post" action="{{url ('/depart')}}" enctype='multipart/form-data'>
    @csrf
    <div class="card-body">
    <div class="form-group">
        <label for="" style="font-weight:700; color:black;">Department</label>
        <input type="text" class="form-control form-control-user" required
           name="title" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Department">
    </div>
       
       
        <input type="submit" class="btn btn-primary btn-block" value="Submit">
        <hr>
        </div>
    </form>
    <div class="row">
    <div class="text-center">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                 <!-- new form-->

@endsection