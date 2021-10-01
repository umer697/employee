@extends('welcome')
@section('title')
    Login
@endsection
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.min.css')}}">
    <title>Login</title>
</head>
<body> --}}
@section('content')
<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-4  mx-auto">
            <h4>Login</h4><hr>
            <form action="{{ route('auth.check')}}" method="POST" enctype="multipart/form">

                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif

                @if (Session::get('success'))
                    <div class="alert alert-danger">
                        {{Session::get('success')}}
                    </div>
                @endif

                @csrf
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email Address" value="{{old('email')}}">
                    <span class="text-danger">@error('email'){{$message}} @enderror  </span>
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password" value="{{old('password')}}">
                    <span class="text-danger">@error('password'){{$message}} @enderror </span>
                </div>

                <button type="submit" class="btn  btn-primary btn-block">Sign In</button>
                <br>
                <a href="{{ route('auth.register')}}">I don't have an account,Create New</a>
            </form>
        </div>
    </div>
</div>
@endsection

{{-- </body>
</html> --}}
