@extends('master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h4>Logged User Details</h4><hr>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Name</th>
                    <th>E-mail</th>
                    {{-- <th>Action</th> --}}
                </thead>
                <tbody>
                    <tr>
                        <td>{{$LoggedUserInfo['name']}}</td>
                        <td>{{$LoggedUserInfo['email']}}</td>
                        {{-- <td><a href="{{ route('auth.logout')}}">Logout</a></td> --}}
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
