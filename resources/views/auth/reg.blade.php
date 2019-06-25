<!Doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>kwuö-register</title> 
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('kwor-admin/css/intlTelInput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('kwor-admin/register.css') }}">
    <link href="{{ asset('kwor-admin/css/sweetalert.css')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>
    <body>
        
        
    <nav class="reg-nav navbar fixed-top navbar-expand-lg navbar-dark">
                 <div class="container">
                 <a class="navbar-brand" href="{{URL('/')}}"><img src="{{ asset('kwor-admin/img/core-img/Josh%20logos.svg') }}" style="width: 150px; height:50px;"/></a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class=" collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav ml-auto mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#screenshot">Screenshot</a></li>
                        <li class="nav-item"><a class="nav-link" href="/#contact">Contact</a></li>
                        <li class="nav-item"><a href="{{URL('/login')}}" class="nav-link">Login</a> </li>
                        <li class="nav-item active"><a class="nav-link" href="{{URL('/register')}}">Create Account</a></li>
                        </ul>
                      </div>
                  </div>
                </nav>  