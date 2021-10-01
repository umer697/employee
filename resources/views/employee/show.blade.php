@extends('master')
@section('title',' Employee Details')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if (session()->has('status'))
        <h4 class="alert alert-success text-center">{{session('status')}}</h4>
        @endif
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-center">Emplooyee Details
            <a class="btn btn-primary float-right" href="{{url('/emp')}}"><i class="fas fa-arrow-right fa-ld"></i></a>
        </h4>
    </div>

    <img style="width:200px; height:200px" src="{{ asset ('images/'. $t->photo)}}" class="ruonded mt-2 mx-auto img-thumbnail d-block">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover"  id="dataTable" width="100%" cellspacing="0">

                <thead>
                <tr>
                    <th >Heading</th>
                    <td>Description</td>
                    </tr>
                    <tr>
                    <th >ID</th>
                    <td>{{$t->id}}</td>
                    </tr>
                    <tr>
                    <th>Name</th>
                    <td>{{$t->name}}</td>
                    </tr>
                    <tr>
                    <th>Father's Name</th>
                    <td>{{$t->fname}}</td>
                    </tr>
                    <tr>
                    <th>CNIC</th>
                    <td>{{$t->cnic}}</td>
                    </tr>
                    <tr>
                    <th>DOB</th>
                    <td>{{$t->dob}}</td>
                    </tr>
                    <tr>
                    <th>Depart</th>
                    <td>{{$t->dept_id}}</td>
                    </tr>

                    <tr>
                    <th>Designation</th>
                    <td>{{$t->desig_id}}</td>
                    </tr>
                    <tr>
                    <th>Cast</th>
                    <td>{{$t->cast}}</td>
                    </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$t->address}}</td>
                    </tr>
                    <tr>
                    <th>City</th>
                    <td>{{$t->city}}</td>
                    </tr>
                    <tr>
                    <th>State</th>
                    <td>{{$t->state}}</td>
                    </tr>
                    <tr>
                    <th>Country</th>
                    <td>{{$t->country}}</td>
                    </tr>
                </tr>
            </thead>
            <tbody>
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


@endsection

