@extends('layouts.new.master')
@section('content')
    <main>

        <!-- Spotlight -->
        <section class="slice slice-lg pb-0 bg-cover bg-primary bg-lg-cover bg-size--contain home">
            <div class="spotlight-holder">
                <div class="container d-flex align-items-end pt-lg">
                    <div class="col">
                        <div class="row row-grid">
                            <div class="col-lg-5 align-self-center">
                                <div class="text-center text-lg-left pb-lg">
                                    <h2 class="heading h1 text-white mb-4">The app that can change your everyday <span class="text-info typed" id="type-example" data-type-this="creativity., imagination., energy., inspiration."></span></h2>
                                    <p class="lead lh-180 text-white">kwụọ is the new way to make payments for things that matters to you. You can use it to pay bills, pay for subscriptions, send cash to family and friends and save money.</p>
                                    <div class="mt-5">
                                        <a href="#" class="btn btn-app-store btn-translate--hover mr-lg-4 mb-4">
                                            <i class="fab fa-apple"></i>
                                            <span class="btn-inner--text">Download on the</span>
                                            <span class="btn-inner--brand">App Store</span>
                                        </a>
                                        <a href="#" class="btn btn-app-store btn-translate--hover mb-4">
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 48 48"
                                        style=" fill:#000000;"><g id="surface1"><path style=" fill:#4DB6AC;" d="M 7.703125 4.042969 C 7.292969 4.148438 7 4.507813 7 5.121094 C 7 6.921875 7 23.914063 7 23.914063 C 7 23.914063 7 42.28125 7 43.089844 C 7 43.535156 7.195313 43.835938 7.5 43.945313 L 27.679688 23.882813 Z "></path><path style=" fill:#DCE775;" d="M 33.238281 18.359375 L 24.929688 13.5625 C 24.929688 13.5625 9.683594 4.761719 8.789063 4.242188 C 8.402344 4.019531 8.019531 3.960938 7.703125 4.042969 L 27.683594 23.882813 Z "></path><path style=" fill:#D32F2F;" d="M 8.417969 43.800781 C 8.949219 43.492188 23.699219 34.976563 33.28125 29.445313 L 27.679688 23.882813 L 7.5 43.945313 C 7.746094 44.039063 8.066406 44.003906 8.417969 43.800781 Z "></path><path style=" fill:#FBC02D;" d="M 41.398438 23.070313 C 40.601563 22.640625 33.296875 18.394531 33.296875 18.394531 L 33.238281 18.359375 L 27.679688 23.882813 L 33.28125 29.445313 C 37.714844 26.886719 41.042969 24.964844 41.339844 24.792969 C 42.285156 24.246094 42.195313 23.5 41.398438 23.070313 Z "></path></g></svg>
                                            <span class="btn-inner--text">Download on the</span>
                                            <span class="btn-inner--brand">Play Store</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ml-lg-auto align-self-end">
                                <div class="position-relative" style="z-index: 10;">
                                    <img alt="Image placeholder" src="{{asset('assets/img/brand/welcom.png')}}" class="img-fluid img-center">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-secondary">
            <div class="container pb-100 pt-100">
                <div class="mb-md text-center">
                    <h3 class="h3 mt-100">Simple, Secured and Reliable Payments.</h3>
                    <div class="fluid-paragraph text-center mt-4">
                    </div>
                </div>
                <div class="row row-grid">
                    <div class="col-lg-4">
    
                        <div class="card shadow shadow-lg--hover">
                            <div class="py-5 text-center">
                                <div class="icon icon-xl ">
                                    <img src="{{asset('my-icons-collection/svg/user-experience.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h5 class="font-weight-bold">Easy to Use</h5>
                                <p class="mt-2">We made it so simple to use that almost anyone can use this no matter their age.</p>
                            </div>
                        </div>
    
                    </div>
                    <div class="col-lg-4">
    
                        <div class="card shadow shadow-lg--hover">
                            <div class="py-5 text-center">
                                <div class="icon icon-xl">
                                    <img src="{{asset('my-icons-collection/svg/multitask.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h5 class="font-weight-bold">Multi-Purpose</h5>
                                <p class="mt-2">Use kwụọ to pay your bills. Send money to people in your life. All in one place.</p>
                            </div>
                        </div>
    
                    </div>
                    <div class="col-lg-4">
    
                        <div class="card shadow shadow-lg--hover">
                            <div class="py-5 text-center">
                                <div class="icon icon-xl">
                                    <img src="{{asset('my-icons-collection/svg/credit-card.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="px-4 pb-5 text-center">
                                <h5 class="font-weight-bold">Secured</h5>
                                <p class="mt-2">All your transactions goes through a strict security compliance system.</p>
                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg">
            <div class="container">
                <div class="row row-grid justify-content-around">
                    <div class="col-lg-5 order-lg-2">
                        <div class="pr-md-4">
                            <h3 class="heading h3" style="color: #005502;">Share in the joy of using a seamless payment system!</h3>
                            <p class="lead my-4">kwụọ is the super power to receive more money. Provide your customers with a unique payment experience that is painless and frictionless without the headache associated with other means. 
                                Let anyone pay you without leaving their comfort zone. Whether it's your family or friends or customers.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                       <div class="position-relative mt--50" style="z-index: 10;">
                            <img src="{{asset('bg-img/Our%20best%20proposition.svg')}}" alt="" class="animated pulse infinite " style="animation-duration: 1.9s; max-height: 100%; max-width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

        <section class="slice slice-lg powerful-features">
            <div class="container">
                <div class="mb-md text-center">
                    <h3 class="h2">Powerful features</h3>
                </div>
                <div class="row row-grid align-items-center">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-start mb-5">
                            <div class="pr-4">
                                <div class="icon box-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/013-settings.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="h5">Easy Setup</h5>
                                <p class="mb-0 text-black">Getting started is quite easy. Simply download our app from your phone app store and sign up to start using kwụọ.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="pr-4">
                                <div class="icon box-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/001-money-1.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="">Multi payment Channels</h5>
                                <p class="mb-0 text-black">Send money with any payment channel that suits you. Pay with your debit card, bank account, USSD or QR code.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="pr-4">
                                <div class="icon box-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/002-money.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="">Pay for Anything</h5>
                                <p class="mb-0 text-black">People use Kwuo to pay for their internet, airtime, electricity, food, transportation, rents and other utility bills.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="position-relative" style="z-index: 10;">
                            <img alt="Image placeholder" src="{{asset('bg-img/pay.png')}}" class="img-center img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex align-items-start mb-5">
                            <div class="pr-4">
                                <div class="iconbox-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/007-money-3.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="">Pay Anyone</h5>
                                <p class="mb-0 text-black">You don't need account numbers to send money to anyone. Just use their phone number and they can receive money from you.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-5">
                            <div class="pr-4">
                                <div class="icon box-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/money.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="">Instant Bank Transfer</h5>
                                <p class="mb-0 text-black">Want to stress yourself a bit carrying cash or swim in bank charges? Push a button and your money lands in your bank account.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="pr-4">
                                <div class="icon box-shadow-3">
                                    <img src="{{asset('my-icons-collection/svg/qr-code.svg')}}" height="50px"; width="50px";>
                                </div>
                            </div>
                            <div class="icon-text">
                                <h5 class="">Responsive Support</h5>
                                <p class="mb-0 text-black">If you miss anything, chill. Just get in touch with us and our ever responsive world class team would be glad to assist you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="slice slice-lg last pt-100 d-none d-lg-block">
            <div class="container">
                <div class="row row-grid justify-content-around">
                    <div class="col-lg-5 order-lg-2">
                        <div class="pr-md-4">
                            <h3 class="heading h3">kwụọ for Anyone</h3>
                            <p class="lead my-4">Anyone who wants to pay anyone or for anything or receive money from anyone can use kwụọ to do it easily. Unlike your bank apps, there's no hidden charges or frictions in each transactions.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="position-relative mt--50" style="z-index: 10;">
                            <img src="{{asset('bg-img/Single%20user.svg')}}" alt="" style="max-height: 70%; max-width:70%; animation-duration: 1.9s" class="animated pulse infinite img-center">
                        </div>
                    </div>
                </div>
            </div><br><br><br>


    
                <div class="container">
                    <div class="row row-grid justify-content-around">
                            <div class="col-lg-6 order-lg-2">
                                    <div class="position-relative mt--50" style="z-index: 10;">
                                        <img src="{{asset('bg-img/Business%20vector.svg')}}" alt="" style="max-height: 70%; max-width:70%;  animation-duration: 1.8s;" class="animated pulse infinite img-center">
                                    </div>
                                </div>

                        <div class="col-lg-5 order-lg-1">
                            <div class="pr-md-4">
                                <h3 class="heading h3">kwụọ for Business Owners</h3>
                                <p class="lead my-4">Sell more. Stop losing money. Gift your customers a unique payment experience to pay your more. We've made it our duty to make it simple to use so that your business can succeed.</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            
            <!--for mobile-->
            <section class="slice slice-lg last d-lg-none" style="padding-top: 100px;">
                <div class="container">
                    <div class="row row-grid justify-content-around">
                        <div class="col-lg-5 order-lg-2">
                            <div class="pr-md-4">
                                <h3 class="heading h3">kwụọ for Anyone</h3>
                                <p class="lead my-4">Anyone who wants to pay anyone or for anything or receive money from anyone can use kwụọ to do it easily. Unlike your bank apps, there's no hidden charges or frictions in each transactions.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="position-relative mt--50" style="z-index: 10;">
                                <img src="{{asset('bg-img/Single%20user.svg')}}" alt="" style="max-height: 70%; max-width:70%; animation-duration: 1.9s" class="animated pulse infinite img-center">
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
    
    
        
                    <div class="container">
                        <div class="row row-grid justify-content-around">
                                <div class="col-lg-5 order-lg-1">
                                        <div class="pr-md-4">
                                            <h3 class="heading h3">kwụọ for Business Owners</h3>
                                            <p class="lead my-4">Sell more. Stop losing money. Gift your customers a unique payment experience to pay your more. We've made it our duty to make it simple to use so that your business can succeed.</p>
                                        </div>
                                    </div>
                                <div class="col-lg-6 order-lg-2">
                                        <div class="position-relative mt--50" style="z-index: 10;">
                                            <img src="{{asset('bg-img/Business%20vector.svg')}}" alt="" style="max-height: 70%; max-width:70%;  animation-duration: 1.8s;" class="animated pulse infinite img-center" style="max-height: 100%; max-width: 100%;">
                                        </div>
                                    </div>
                            
                        </div>
                    </div>
                </section>
    </main>


   @endsection