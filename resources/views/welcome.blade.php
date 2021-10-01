<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('assets/css/sb-admin-2.min.css')}}">
    <title>@yield('title')</title>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.login')}}">
              Login
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('auth.register')}}">
              Register
            </a>
        </li>
    </ul>
</nav>

@yield('content')

</body>
</html>


