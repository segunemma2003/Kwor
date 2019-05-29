<!DOCTYPE html>
<html lang="en">
    <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Webpixels">

    <title>kwụọ | Log in</title>

    <!-- Favicon -->
    <link rel="icon" href="../assets/img/brand/" type="image/png">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800">

    <!-- Font Awesome 5 -->
    <link rel="stylesheet" href="../assets/vendor/%40fortawesome/fontawesome-pro/css/all.min.css">
    <!-- Page plugins -->
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../assets/css/theme.min.css">


</head>

<body>

        
        <!--navbar-->
                    
                <!--form-->
            <main class="bg-primary">   
            <div class="container h-100vh d-flex align-items-center">
            <div class="col">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-5 col-xl-4">

                        <div class="text-center mb-5">
                            <h6 class="h3">Welcome back</h6>
                            <p class="mb-0" style="color:#fff" >Sign in to your account to continue</p>
                        </div>
                        <span class="clearfix"></span>
                          
                            <form role="form" method="post" action="{{ route('login') }}">
                              <!-- Default form register -->
                              @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
@endif    
@if ($errors->all())
@foreach($errors->all() as $error)
                        <div class="alert alert-warning">
                            {{ $error }}
                        </div>
                    @endforeach
@endif    

                            @csrf

                                <!-- <p class="h4 mb-4"></p> -->
                                
                                
                                <div class="form-group">
                                    <label class="form-control-label">PHONE NUMBER*</label>
                                    <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-user"></i></span>
                                    </div>
                                   <input type="tel" class="form-control" name="email">
                                   @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                </div>
                                </div>
                                
                                <div class="form-group mb-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                 <!-- Password -->
                                        <label class="form-control-label">Password</label>
                                    </div>
                                    <div class="mb-2">
                                        <a href="{{route('password.request')}}" class="small text-light text-unerline--dashed">Lost password?</a>
                                    </div>
                                    </div>
                                    <div class="input-group input-group-transparent">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="far fa-key"></i></span>
                                    </div>
                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock" name="password">
                                <div class="input-group-append">
                                        <span class="input-group-text">
                    <i class="far fa-eye"></i>
                </span>
                                    </div>
                                    </div>
                            </div>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                     <!-- Sign up button -->
                                     <div class="text-center mb-3">
                                         <button class="btn  my-4 btn-block" type="submit" style="background-color: #00C851;">Log In</button>
                                      </div>

                                      <div class="text-center">
                                <small style="color:#fff;" >Not registered?</small>
                                <a href="{{URL('/register')}}" class="small font-weight-bold" style="color:rgba(5, 79, 91, 1)" >Create account</a>
                            </div>

                               </form>
<!-- Default form register -->  
                        
                    </div>
                </div>
            </div>
        </div>
    </main>
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
            <!-- JQuery -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Bootstrap tooltips -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- MDB core JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
        <!-- Use as a Vanilla JS plugin -->
        <script src="{{ asset('build/js/intlTelInput.min.js') }}"></script>
        <script src="https://code.jquery.com/jquery-latest.min.js"></script>
        <script src="{{ asset('js/utils.js') }}"></script>
        <script src="{{ asset('js/intlTelInput.js') }}"></script>
        <script src="{{ asset('js/style.js') }}"></script>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.31.1/dist/sweetalert2.all.min.js"></script>
    @include('sweet::alert')
    <script src="{{asset('assets/vendor/in-view/dist/in-view.min.js')}}"></script>





<!-- Theme JS -->

<script src="{{asset('assets/js/theme.min.js')}}"></script>
            
        
    
    </body>
</html>