@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
      <div class="container">
        <div class="row align-items-center py-5">
          <div class="col-5 col-lg-7 mx-auto mb-5 mb-lg-0">
            <div class="pr-lg-5"><object data="{{asset('kwuo-admin/img/illustration.svg') }}" alt="" class="img-fluid"></object></div>
          </div>
          <div class="col-lg-5 px-lg-4">
            <h2 class="mb-4">Welcome!</h2>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
             <form class="text-center  p-5">

                                <p class="h4 mb-4"></p>

                                <div class="form-row mb-4">
                                    <div class="col" style="text-align: left;">
                                        <!-- First name -->
                                        <label>FIRST NAME*</label><br>
                                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col" style="text-align: left;">
                                        <!-- Last name -->
                                        <label>LAST NAME*</label><br>
                                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                
                                <!-- E-mail -->
                                <div style="text-align: left;">
                                <label>E-MAIL ADDRESS*</label>
                                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="name@example.com">
                                </div>
                                                    
                                <div style="text-align: left;">
                                 <!-- Password -->
                                <label>PASSWORD*</label>
                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                   Your password must be at least 8 characters and contain uppercase, lowercase letters and numbers.
                                    </small>
                                </div>
                                 
                                <div style="text-align: left;">
                                 <!-- Password -->
                                <label>CONFIRM PASSWORD*</label>
                                <input type="password" id="defaultRegisterFormPassword" class="form-control" placeholder="Password" aria-describedby="defaultRegisterFormPasswordHelpBlock">
                                </div><br>
                                
                                <div style="text-align: left;">
                                    <label>PHONE NUMBER*</label><br>
                                   <input type="tel" id="phone" value="+234" "defaultRegisterPhonePassword" class="form-control">
                                </div><br>
                                
                                  <!-- Terms of service -->
                                
                                    <p>By clicking
                                    <em>Sign up</em> you agree to our
                                    <a href="" target="_blank">terms of service</a></p>
                                      
                                     <!-- Sign up button -->
                                      <button class="btn  my-4 btn-block" type="submit" style="background-color: #b2beb5;">Sign Up</button><br>
                               </form>
          </div>
        </div>  
      </div>
@endsection