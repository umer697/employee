@extends('master')
@section('title','Add Employee')

@section('content')
        <div class="card-header py-3 ">
    <h4 class="mb-3 font-weight-bold text-primary ">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Add department
        <a class="btn btn-primary  float-right" href="{{url('/emp')}}">View All</a>
        </h4>
</div>
<div class="col-lg-6 d-none d-lg-block"></div>
    <div class="col-lg-6">
<div class="p-5">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4"></h1>
    </div>
<form method="post" action="{{url ('/emp')}}" enctype='multipart/form-data'>
    @csrf
    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Name</label>
        <input type="text" class="form-control form-control-user" required
           name="name" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Father's Name</label>
        <input type="text" class="form-control form-control-user" required
           name="fname" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Father's Name">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">CNIC</label>
        <input type="text" class="form-control form-control-user" required
           name="cnic" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter CNIC">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">DOB</label>
        <input type="date" class="form-control form-control-user" required
           name="dob" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter DOB">
    </div>

    <div class="form-group">
    <label  style="font-weight:700; color:black;">Department</label>
    <select class="form-control" name="dept_id" id="">
        <option >--Select Depart--</option>
        @foreach($dept as $t)
        <option form-control-user value="{{$t->id}}">{{$t->title}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
    <label  style="font-weight:700; color:black;">Designation</label>
    <select class="form-control" name="desig_id" id="">
        <option value="">--Select Designation--</option>
        @foreach($desig as $d)
        <option value="{{$d->id}}" class="form-control">{{$d->desig}}</option>
        @endforeach
    </select>
    </div>
            <div class="form-group">
                    <label style="font-weight:700; color:black;" for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="photo"class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Cast</label>
        <input type="text" class="form-control form-control-user" required
           name="cast" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Cast">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Address</label>
        <input type="text" class="form-control form-control-user" required
           name="address" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Address">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">City</label>
        <input type="text" class="form-control form-control-user" required
           name="city" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter City">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">State</label>
        <input type="text" class="form-control form-control-user" required
           name="state" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter State">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>



    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Country">
    </div>


        <input type="submit" class="btn btn-primary btn-block" value="Submit">
        <hr>

    </form>
    <div class="row">
    <div class="text-center">

        </div>
    </div>
</div>
</div>
@endsection
