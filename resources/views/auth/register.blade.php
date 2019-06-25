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

     <!--CSS-->
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/intlTelInput.css">


</head>

<body>

        <header class="bg-primary">

                <!-- Main navbar -->
        
                <nav class="navbar navbar-main navbar-expand-lg navbar-sticky  navbar-dark" id="navbar-main" style="background-color: #005502;">
                    <div class="container">
                        <a class="navbar-brand mr-lg-5" href="index.html">
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
                                        <input type="text" class="form-control" id="input-text" placeholder="Last Name">
                                    </div>
                            </div>
                        </div>
                        <div class="row">
                                <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                    <label class="form-control-label">Phone number</label>
                                    <div class="input-group input-group-transparent">
                                            <input type="tel" id="phone" value="+234" "defaultregisterphonepassword" class="form-control">
                                        </div>
                                </div>
                                <div class="form-group col-xl-6 col-lg-12 col-sm-12 col-md-12">
                                    <label class="form-control-label">Email address</label>
                                    <div class="input-group input-group-transparent">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                            </div>
                                            <input type="email" class="form-control" id="input-email" placeholder="name@anyone.con">
                                        </div>
                                </div>
                            </div>
                          <div class="form-group mb-4">
                                <label class="form-control-label">Password</label>
                                <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                    <input type="password" class="form-control" id="input-password" placeholder="********">
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
                                    <input type="password" class="form-control" id="input-password-confirm" placeholder="********">
                                </div>
                            </div>
                            <div class="my-4">
                                <div class="custom-control custom-checkbox">
                                    <input class=""  type="checkbox">
                                        <span>I agree to the <a href="terms.html" style="color: #005502;">Terms and Conditions</a> and <a href="privacy.html" style="color: #005502;">Privacy Policy</a>.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-sm-7">
                                    <button type="submit" class="btn mb-3 mb-sm-0" style="background-color: yellowgreen;">Create account</button>
                                </div>
                                <div class="col-sm-5 text-sm-right">
                                    <span class="small d-sm-block d-md-inline text-green">Already registered?</span>
                                    <a href="login.html" class="small font-weight-bold " style="color:#005502;">Sign in</a>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>

        

    </main>



    <!-- Core -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/in-view/dist/in-view.min.js"></script>
   
    <!--intl Tel inputs-->
    <script src="../assets/js/intlTelInput.js"></script>
    <script src="../assets/js/utils.js"></script>
    <script src="../assets/js/style.js"></script>





    <!-- Theme JS -->

    <script src="../assets/js/theme.min.js"></script>

   

  </body>
</html>
