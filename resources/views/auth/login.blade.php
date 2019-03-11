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
    <link rel="stylesheet" href="{{ asset('css/intlTelInput.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('register.css') }}">
   </head>
    <body>
        
        
        <!--navbar-->
             <nav class="reg-nav navbar fixed-top navbar-expand-lg navbar-dark">
                 <div class="container">
                 <a class="navbar-brand" href="index.html">kwuö</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class=" collapse navbar-collapse" id="navbarTogglerDemo01">
                        <ul class="navbar-nav ml-auto mt-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html#features">Features</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html#screenshot">Screenshot</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.html#contact">Contact</a></li>
                        <li class="nav-item active"><a href="login.html" class="nav-link">Login</a> </li>
                        <li class="nav-item "><a class="nav-link" href="register.html">Create Account</a></li>
                        </ul>
                      </div>
                  </div>
                </nav>  
                    
                <!--form-->
                
                <div class="container" style="margin-top: 100px;">
                    <div class="row form" style="border: 1px solid #00c851;">
                        <div class="col-lg-6 col-md-6"  style="border-right: 1px solid #00C851;">
                            <h3 style="margin-top: 50px; color: #00C851; ">Log Into Your Account</h3><br>
                            <a href="#" style="color:  #00C851;">Forgot Password?</a><br>
                            <a href="register.html" style="color:  #00C851;">Create Account</a>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <!-- Default form register -->
                            <form class="text-center  p-5">

                                <p class="h4 mb-4"></p>
                                
                                
                                <div style="text-align: left;">
                                    <label>PHONE NUMBER*</label><br>
                                   <input type="tel" id="phone" value="+234" "defaultRegisterPhonePassword" class="form-control">
                                </div><br>
                                
                                 <div style="text-align: left;">
                                 <!-- Password -->
                                <label>PASSWORD*</label>
                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                </div><br>
                                      
                                     <!-- Sign up button -->
                                      <button class="btn  my-4 btn-block" type="submit" style="background-color: #00C851;">Log In</button>
                               

                               </form>
<!-- Default form register -->  
                        </div>
                    </div>
        </div><br><br>
    
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    
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
        
         
            
        
    
    </body>
</html>