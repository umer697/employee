@extends('master')
@section('title','Detail Designatoin')

@section('content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        @if (session()->has('status'))
        <h4 class="alert alert-success text-center">{{session('status')}}</h4>
        @endif
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Designation
            <a class="btn btn-primary float-right" href="{{url('/desig')}}"><i class="fas fa-arrow-right fa-ld"></i></a>
        </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover"  id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th width="100">ID</th>
                    <th>Designation</th>
                    
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td>{{$table->id}}</td>
                    <td>{{$table->desig}}</td>
                    
                </tr>
                
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection

