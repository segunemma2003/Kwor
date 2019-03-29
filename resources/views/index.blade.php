<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    
    <meta name="viewport" content="width=device-width">
    <title>kwuö</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico') }}">
    <!-- Core Stylesheet -->
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!-- Responsive CSS -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">
    <link href="{{ asset('css/sweetalert.css')}}"/>
    <!--font-->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.31.1/dist/sweetalert2.all.min.js"></script>
    
</head>

<body>
@include('sweet::alert')
<body style="background-color: #f0f0f0; font-family: 'Raleway', sans-serif;" >

    <div id="preloader">
        <div class="kwuo-load"></div>
    </div>

    <!-- ***** Header Area Start ***** -->
    <header class="header_area animated">
        <div class="container-fluid">
            <div class="row align-items-center">
                <!-- Menu Area Start -->
                <div class="col-12 col-lg-10">
                    <div class="menu_area">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Logo -->
                            <a class="navbar-brand shadow"  href="/#home"><img src="{{ asset('kwor-admin/img/core-img/Josh%20logos.svg') }}" style="width: 150px; height:40px;" ></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                            <!-- Menu Area -->
                            <div class="collapse navbar-collapse" id="ca-navbar">
                                <ul class="navbar-nav ml-auto" id="nav">
                                    <li class="nav-item"><a class="nav-link" href="/#home" style="color: black;">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/#about" style="color: black;">About</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/#features" style="color: black;">Benefits</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/#screenshot" style="color: black;">Screenshot</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/#contact" style="color: black;">Contact</a></li>
                                    <li class="nav-item"><a href="{{URL('/login')}}" class="nav-link" style="color: black;">Login</a> </li>
                                </ul>
                                <div class=" d-lg-none">
                                      <a href="{{URL('/register')}}"><button type="button" class="btn btn-success" style="color: black;">Sign Up</button></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
                <!-- Signup btn -->
                <div class="col-12 col-lg-2">
                    <div class=" d-none d-lg-block">
                         <a href="{{URL('/register')}}"><button type="button" class="btn btn-success" style="color: black;">Sign Up</button></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <!-- ***** Header Area End ***** -->

    <!-- ***** Wellcome Area Start ***** -->
    <section class="wellcome_area clearfix" id="home" style="margin-top: -110px;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md">
                     <div class="wellcome-heading">
                        	<h2><span class="typed" style="color: black;"></span> with kwụọ</h2>
                        <h3>Kwụọ</h3>
                        <p style="font-size: 25px;"> kwụọ is the new way to make payments<br> for things that matters to you. You can<br> use it to pay bills, pay for subscriptions,<br> send cash to family and friends and save money.
                         </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Welcome thumb -->
        <div class="welcome-thumb wow fadeInDown" data-wow-delay="0.5s">
            <img src="{{asset('kwor-admin/img/bg-img/welcome-img.png')}}" alt="">
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->

    <!-- ***** Special Area Start ***** -->
    <section class="special-area  section_padding_100" id="about" style="background-color: #f0f0f0;" >
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading Area -->
                    <div class="section-heading text-center">
                        <h2 style="color: #005502;">Simple, Secured and Reliable Payments</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.2s">
                        <div class="single-icon">
                             <img src="{{asset('kwor-admin/my-icons-collection/svg/user-experience.svg')}}" height="50px"; width="50px";>
                        </div>
                        <h4 style="color: #005502;" >Easy to use</h4>
                        <p>We made it so simple to use that almost anyone can use this no matter their age</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="single-icon">
                            <img src="{{asset('kwor-admin/my-icons-collection/svg/multitask.svg')}}" height="50px"; width="50px";>
                        </div>
                        <h4 style="color: #005502;">Multi-purpose</h4>
                        <p>Use kwụọ to pay your bills. Send money to people in your life. All in one place</p>
                    </div>
                </div>
                <!-- Single Special Area -->
                <div class="col-12 col-md-4">
                    <div class="single-special text-center wow fadeInUp" data-wow-delay="0.6s">
                        <div class="single-icon">
                             <img src="{{asset('kwor-admin/my-icons-collection/svg/credit-card.svg')}}" height="50px"; width="50px";>
                        </div>
                        <h4 style="color: #005502;">Secured</h4>
                        <p>Feel free. All your transactions goes through a strict security compliance system.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Special Description Area -->
        <div class="special_description_area mt-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="special_description_img">
                            <img src="{{asset('kwor-admin/img/bg-img/Our%20best%20proposition.svg')}}" alt="" class="animated pulse infinite" style="animation-duration: 1.9s;">
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5 ml-xl-auto">
                        <div class="special_description_content">
                            <h3 style="color: #005502;">Share in the joy of using a seamless payment system!</h3>
                            <p>kwụọ is the super power to receive more money. Provide your customers with a unique payment experience that is painless and frictionless without the headache associated with other means. 
                                Let anyone pay you without leaving their comfort zone. Whether it's your family or friends or customers.
                            </p>
                            <div class="app-download-area">
                                <div class="app-download-btn wow fadeInUp" data-wow-delay="0.2s">
                                    <!-- Google Store Btn -->
                                    <a href="#" style="border-radius: 0px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        width="24" height="24"
                                        viewBox="0 0 48 48"
                                        style=" fill:#000000;"><g id="surface1"><path style=" fill:#4DB6AC;" d="M 7.703125 4.042969 C 7.292969 4.148438 7 4.507813 7 5.121094 C 7 6.921875 7 23.914063 7 23.914063 C 7 23.914063 7 42.28125 7 43.089844 C 7 43.535156 7.195313 43.835938 7.5 43.945313 L 27.679688 23.882813 Z "></path><path style=" fill:#DCE775;" d="M 33.238281 18.359375 L 24.929688 13.5625 C 24.929688 13.5625 9.683594 4.761719 8.789063 4.242188 C 8.402344 4.019531 8.019531 3.960938 7.703125 4.042969 L 27.683594 23.882813 Z "></path><path style=" fill:#D32F2F;" d="M 8.417969 43.800781 C 8.949219 43.492188 23.699219 34.976563 33.28125 29.445313 L 27.679688 23.882813 L 7.5 43.945313 C 7.746094 44.039063 8.066406 44.003906 8.417969 43.800781 Z "></path><path style=" fill:#FBC02D;" d="M 41.398438 23.070313 C 40.601563 22.640625 33.296875 18.394531 33.296875 18.394531 L 33.238281 18.359375 L 27.679688 23.882813 L 33.28125 29.445313 C 37.714844 26.886719 41.042969 24.964844 41.339844 24.792969 C 42.285156 24.246094 42.195313 23.5 41.398438 23.070313 Z "></path></g></svg>
                                        <p class="mb-0"><span>available on</span> Google play Store</p>
                                    </a>
                                </div>
                                <div class="app-download-btn wow fadeInDown" data-wow-delay="0.4s">
                                    <!-- Apple Store Btn -->
                                    <a href="#" style="border-radius: 0px;">
                                        <i class="fa fa-apple"></i>
                                        <p class="mb-0"><span>available on</span> Apple Store</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Special Area End ***** -->

    <!-- ***** Awesome Features Start ***** -->
    <section class="awesome-feature-area  section_padding_0_50 clearfix" id="features" style="background-color: #f0f0f0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading Text -->
                    <div class="section-heading text-center">
                        <h2 style="color: #005502;">Why kwụọ? </h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-5">
                    <div class="single-feature">
                        <img src="{{asset('kwor-admin/my-icons-collection/svg/013-settings.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Easy setup</h5>
                        <p>Getting started is quite easy. Simply download our app from your phone app store and sign up to start using kwụọ.</p>
                    </div>
                      <div class="single-feature">
                        <img src="{{asset('kwor-admin/my-icons-collection/svg/001-money-1.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Multi payment channels</h5>
                        <p>Send money with any payment channel that suits you. Pay with your debit card, bank account, USSD or QR code.</p>
                    </div>
                     <div class="single-feature">
                         <img src="{{asset('kwor-admin/my-icons-collection/svg/002-money.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Pay for anything</h5>
                        <p>People use Kwuo to pay for their internet, airtime, electricity, food, transportation, rents and other utility bills.</p>
                    </div>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-2 text-center">
                    <div class="single-shot" style="margin-top:70px;">
                            <img src="{{asset('kwor-admin/img/scr-img/app-3.jpg')}}" alt="">
                        </div><br><br>
                </div>
                <!-- Single Feature Start -->
                <div class="col-12 col-sm-6 col-lg-5">
                    <div class="single-feature">
                        <img src="{{asset('kwor-admin/my-icons-collection/svg/007-money-3.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Pay anyone</h5>
                        <p>You don't need account numbers to send money to anyone. Just use their phone number and they can receive money from you.</p>
                    </div>
                      <div class="single-feature">
                       <img src="{{asset('kwor-admin/my-icons-collection/svg/money.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Instant bank transfer</h5>
                        <p>Want to stress yourself a bit carrying cash or swim in bank charges? Push a button and your money lands in your bank account.</p>
                    </div>
                    <div class="single-feature">
                        <img src="{{asset('kwor-admin/my-icons-collection/svg/qr-code.svg')}}" height="50px"; width="50px";>
                        <h5 style="color: #005502;">Responsive support</h5>
                        <p>If you miss anything, chill. Just get in touch with us and our ever responsive world class team would be glad to assist you.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- ***** Awesome Features End ***** -->

    <!-- ***** Cool Facts Area Start ***** -->
    <section class="cool_facts_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-6 col-lg-6">
                   <div class=" wow fadeInUp" data-wow-delay="0.2s" style="text-align: left;">
                        <div class="single-special wow fadeInUp" data-wow-delay="0.2s" style="border: 0px;">
                            <h2>kwụọ for anyone</h2>
                        <h6>Anyone who wants to pay anyone or for anything or receive money from anyone can use kwụọ to do it easily. Unlike your bank apps, there's no hidden charges or frictions in each transactions.</h6>
                    </div>
                </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-6 col-lg-6 text-center">
                    <div class="special_description_img">
                            <img src="{{asset('kwor-admin/img/bg-img/Single%20user.svg')}}" alt="" style="height: 200px; width: 400px; animation-duration: 1.9s" class="animated pulse infinite">
                        </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-6 col-lg-6">
                   <div class="special_description_img">
                            <img src="{{asset('kwor-admin/img/bg-img/Business%20vector.svg')}}" alt="" style="height: 200px; width: 400px; animation-duration: 1.8s;" class="animated pulse infinite">
                        </div>
                </div>
                <!-- Single Cool Fact-->
                <div class="col-12 col-md-6 col-lg-6">
                        <div class="single-special wow fadeInUp" data-wow-delay="0.2s" style="border: 0px;">
                        <h2>kwụọ for business owners</h2>
                        <h6>Sell more. Stop losing money. Gift your customers a unique payment experience to pay your more. We've made it our duty to make it simple to use so that your business can succeed.</h6>
                    </div>
                </div>
                
            </div>
            </div>
    </section>
    <!-- ***** Cool Facts Area End ***** -->

    <!-- ***** App Screenshots Area Start ***** -->
    <section class="app-screenshots-area section_padding_0_100 clearfix" id="screenshot" style="background-color: #f0f0f0; margin-top: -50px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <!-- Heading Text  -->
                    <div class="section-heading">
                        <h2 style="color: #005502;" >App Screenshots</h2>
                        <div class="line-shape"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- App Screenshots Slides  -->
                    <div class="app_screenshots_slides owl-carousel">
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-1.jpg')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-2.jpg')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-3.jpg')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-4.jpg')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-5.jpg')}}" alt="">
                        </div>
                        <div class="single-shot">
                            <img src="{{asset('kwor-admin/img/scr-img/app-3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** App Screenshots Area End *****====== -->

    
    <!-- ***** CTA Area Start ***** -->
    <section class="our-monthly-membership section_padding_50 clearfix" id="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="membership-description">
                        <h2>Subscribe for our Newsletter</h2>
                        <p>Get the latest updates on kwụọ.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="get-started-button wow bounceInDown" data-wow-delay="0.5s">
                       <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe for our Newsletter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Name:</label>
                    <input type="text" class="form-control" id="recipient-name">
                  </div>
                  <div class="form-group">
                    <label for="message-text" class="col-form-label">Email:</label>
                    <input type="email" class="form-control" id="recipient-email">
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success">Submit</button>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->




    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-social-icon text-center section_padding_70 clearfix">
        <!-- footer logo -->
        <div class="footer-text">
            <h2>kwụọ</h2>
        </div>
        <!-- social icon-->
        <div class="footer-social-icon">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="active fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
        </div>
        <div class="footer-menu">
            <nav>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
        <!-- Foooter Text-->
        <div class="copyright-text">
            <p>Copyright ©2019 kwụọ. Made with <i class="ti-heart" aria-hidden="true" style="color: red;"></i> by IgHub</p>
        </div>
    </footer>

    <!-- ***** Footer end ***** -->

    <!-- Jquery-2.2.4 JS -->
    <script src="{{asset('kwor-admin/js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('kwor-admin/js/popper.min.js')}}"></script>
    <!-- Bootstrap-4 Beta JS -->
    <script src="{{asset('kwor-admin/js/bootstrap.min.js')}}"></script>
    <!-- All Plugins JS -->
    <script src="{{asset('kwor-admin/js/plugins.js')}}"></script>
    <!-- Slick Slider Js-->
    
    <!-- Footer Reveal JS -->
    <script src="{{asset('kwor-admin/js/footer-reveal.min.js')}}"></script>
    <!-- Active JS -->
    <script src="{{asset('kwor-admin/js/active.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
    <!-- <script src="js/sweetalert.min.js"></script> -->
    
    <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->

  
    
<!-- <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script> -->

<script>
       $(function(){
	$(".typed").typed({
		strings: ["Make payments", "Shop online ", "Transfer funds", "Buy airtime"],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 150,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 1000,
		// loop
		loop: true,
		// false = infinite
		loopCount: 500,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});
 
</script>
</body>

</html>
