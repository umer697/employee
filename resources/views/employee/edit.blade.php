@extends('master')
@section('title','Update Employee')

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
<form method="post" action="{{url ('/emp',$table->id)}}" enctype='multipart/form-data'>
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Name</label>
        <input type="text" class="form-control form-control-user" required
           name="name" value="{{$table->name}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Name">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Father's Name</label>
        <input type="text" class="form-control form-control-user" required
           name="fname" value="{{$table->fname}}"  id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Father's Name">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">CNIC</label>
        <input type="text" class="form-control form-control-user" required
           name="cnic" value="{{$table->cnic}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter CNIC">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">DOB</label>
        <input type="date" class="form-control form-control-user" required
           name="dob" value="{{$table->dob}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter DOB">
    </div>

    <div class="form-group">
    <label  style="font-weight:700; color:black;">Department</label>
    <select class="form-control" name="dept"  >
        @foreach($dept as $t)
        <option @if($t->id == $table->dept_id) selected @endif  value="{{$t->id}}" > {{$t->title}} </option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
    <label  style="font-weight:700; color:black;">Designation</label>
    <select class="form-control" name="desig" id="desig_id" >
        @foreach($design as $desig)
        <option  @if($desig->id==$table->desig_id) selected @endif value="{{$desig->id}}"> {{$desig->desig}}</option>
        @endforeach
    </select>
    </div>

    <div class="form-group">
        <label style="font-weight:700; color:black;" >File input</label>
        <div class="input-group">
          <div class="custom-file">
            <input type="file" name="photo" class=>
            <input type="hidden" name="prev_photo" class="custom-file-label" value="$table->photo" >
            <label  ></label>
          </div>
        </div>
      </div>



    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Cast</label>
        <input type="text" class="form-control form-control-user" required
           name="cast" value="{{$table->cast}}"  id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Cast">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Address</label>
        <input type="text" class="form-control form-control-user" required
           name="address" value="{{$table->address}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter Address">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">City</label>
        <input type="text" class="form-control form-control-user" required
           name="city" value="{{$table->city}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter City">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">State</label>
        <input type="text" class="form-control form-control-user" required
           name="state" value="{{$table->state}}" id="exampleInputEmail" aria-describedby="emailHelp"
            placeholder="Enter State">
    </div>

    <div class="form-group">
        <label for="" class="" style="font-weight:700; color:black;">Country</label>
        <input type="text" class="form-control form-control-user" required
           name="country" value="{{$table->country}}" id="exampleInputEmail" aria-describedby="emailHelp"
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
