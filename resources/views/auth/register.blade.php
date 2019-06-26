<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>kwụọ | Register</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css">



    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css">
    <link href="{{ asset('kwor-admin/css/sweetalert.css')}}"/>
     <!--CSS-->
     <link rel="stylesheet" href="{{asset('kwor-admin/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('css/intlTelInput.css')}}">


</head>

<body>

        <header class="bg-primary">

                <!-- Main navbar -->
        
                <nav class="navbar navbar-main navbar-expand-lg navbar-sticky  navbar-dark" id="navbar-main" style="background-color: #005502;">
                    <div class="container">
                        <a class="navbar-brand mr-lg-5" href="/">
                            <img alt="kwụọ" src="../assets/img/brand/" style="height: 50px;">
                        </a>
        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbar-main-collapse">
                            <ul class="navbar-nav align-items-lg-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                                    <a class="nav-link" href="kwuo-agents.html">kwụọ for agents</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" role="button">Support</a>
                                </li>
                            </ul>
        
                            <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="login.html" target="_blank">Log in</a>
                                </li>
                                <li class="nav-item mr-0">
                                    <a href="register.html" target="_blank" class="btn btn-sm btn-white btn-circle btn-icon  d-lg-inline-flex">
                                        <span class="btn-inner--text">Register</span>
                                    </a>
                                </li>
                            </ul>
        
                        </div>
                    </div>
                </nav>
        
            </header>

       

    <main>


        <div class="container h-100vh d-flex align-items-center" style="margin-top: 100px;">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                            <div class="text-center mb-5">
                                    <h6 class="h3" style="color: #005502;">Create Account</h6>
                                    <p class="mb-0" style="color:#005502" >It's free ans easy.</p>
                                </div>
                                <span class="clearfix"></span>
                        <form role="form" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                            <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                <label class="form-control-label">First Name</label>
                                <div class="input-group input-group-transparent">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" id="defaultRegisterFormFirstName" name="firstName" class="form-control" placeholder="First name">
                                        @if ($errors->has('firstName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                                    </div>
                            </div>
                            <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                <label class="form-control-label">Last Name</label>
                                <div class="input-group input-group-transparent">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-user"></i></span>
                                        </div>
                                        <input type="text" id="defaultRegisterFormLastName" name="lastName" class="form-control" placeholder="Last name">
                                        @if ($errors->has('lastName'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('lastName') }}</strong>
                                    </span>
                                @endif
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                    <label class="form-control-label">Phone number</label>
                                    <div class="input-group input-group-transparent">
                                    <input type="tel" id="phone" name="phone" value="+234" "defaultRegisterPhonePassword" class="form-control">
                                   @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                                        </div>
                                </div>

                                <input value="nigeria" name="country" type="hidden"> 
                                <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                    <label class="form-control-label">Email address</label>
                                    <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            </div>
                                            <input type="email" id="input-email" class="form-control mb-4" placeholder="name@example.com" name="email">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif   
                                        </div>
                                </div>
                            </div>
                          <div class="form-group mb-4">
                                <label class="form-control-label">Password</label>
                                <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input type="password" id="input-password" class="form-control" placeholder="Password" name="password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    <div class="input-group-append">
                                        <span class="input-group-text">
                    <i class="far fa-eye"></i>
                </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Confirm password</label>
                                <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input name="password_confirmation" type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="custom-control custom-checkbox">
                                    <input class=""  type="checkbox">
                                        <span>I agree to the <a href="{{URL('aterm')}}" style="color: #005502;">Terms and Conditions</a> and <a href="{{URl('aprivacy')}}" style="color: #005502;">Privacy Policy</a>.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-7">
                                    <button type="submit" class="btn mb-3 mb-sm-0" style="background-color: yellowgreen;">Create account</button>
                                </div>
                                <div class="col-sm-5 text-sm-right">
                                    <span class="small d-sm-block d-md-inline text-green">Already registered?</span>
                                    <a href="{{URL('login')}}" class="small font-weight-bold " style="color:#005502;">Sign in</a>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>

        

    </main>



    <!-- Core -->
    <script src="{{asset('kwor-admin/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('kwor-admin/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('kwor-admin/vendor/in-view/dist/in-view.min.js')}}"></script>
   
    <!--intl Tel inputs-->
    <script src="{{--asset('kwor-admin/js/intlTelInput.js')--}}"></script>
    <script src="{{asset('kwor-admin/js/utils.js')}}"></script>
    <script src="{{asset('kwor-admin/js/style.js')}}"></script>





    <!-- Theme JS -->

    <script src="../assets/js/theme.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.31.1/dist/sweetalert2.all.min.js"></script>
    @include('sweet::alert')
   

  </body>
</html>
