<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Car Hire</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.ico')}}">
    <link href="{{ asset('asset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/css/metismenu.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/css/icons.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('asset/css/style.css')}}" rel="stylesheet" type="text/css">
</head>
<body><!-- Background -->
<div class="account-pages"></div><!-- Begin page -->
<div class="wrapper-page">
    <div class="card">
        <div class="card-body">
            <h3 class="text-center m-0">
                <a href="{{ route('home') }}" class="logo logo-admin">
                    <img src="{{ asset('asset/images/logo.png')}}" height="30" alt="logo">
                </a>
            </h3>
            <div class="p-3"><h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                <p class="text-muted text-center">Sign in to continue to CarHire Admin.</p>
                <form class="form-horizontal m-t-30" method="post" action="{{ route('login') }}">
                    @csrf
                    @include('layouts.message')
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="userpassword">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="m-t-40 text-center">
        <p class="text-muted">© 2021 Crafted with <i class="mdi mdi-heart text-danger"></i> by devstart</p>
    </div>
</div><!-- END wrapper --><!-- jQuery  -->
<script src="{{ asset('asset/js/jquery.min.js')}}"></script>
<script src="{{ asset('asset/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('asset/js/metisMenu.min.js')}}"></script>
<script src="{{ asset('asset/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('asset/js/waves.min.js')}}"></script>
<script src="{{ asset('asset/plugins/jquery-sparkline/jquery.sparkline.min.js')}}"></script><!-- App js -->
<script src="{{ asset('asset/js/app.js')}}"></script>
</body>
</html>
