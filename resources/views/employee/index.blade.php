@extends('master')
@section('title','Add Employee')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if (session()->has('status'))
        <h4 class="alert alert-success text-center">{{session('status')}}</h4>
        @endif
    <div class="card-header py-3">
        <h4 class="m-0 font-weight-bold text-primary text-center">All Emplooyee Details
            <a class="btn btn-primary float-right" href="{{url('/emp/create')}}">Add New</a>
        </h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th width="100">ID</th>
                    <th>Name</th>
                    <th>Father's Name</th>
                    <th>DOB</th>
                    <th>CNIC</th>
                    <!-- <th>Photo</th> -->
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tab as $t)
                <tr>
                    <td>{{$t->id}}</td>
                    <td>{{$t->name}}</td>
                    <td>{{$t->fname}}</td>
                    <td>{{$t->dob}}</td>
                    <td>{{$t->cnic}}</td>
                    <!-- <td><img style="width:100px; hight:100px;"src="{{asset ('images/' .$t->photo)}}" class="img-thumbnail"></td> -->
                    <td >
                        <a  href="{{url('/emp/'.$t->id)}}"><i  class="fa fa-eye fa-2x" ></i></a>
                        <a  class="text-success" href="{{url ('/emp/'. $t->id . '/edit')}}"><i  class="fa fa-edit fa-2x" ></i></a>
                        <a onclick="return confirm('Do You Want to Delete This Record?')" class="text-danger" href="{{url('emp/' . $t->id . '/delete')}}"><i class="fa fa-trash fa-2x" ></i></a>
                    </td>
                </tr>
                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection

