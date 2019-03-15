@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                    <form class="text-center  p-5">

                                <p class="h4 mb-4"></p>

                                <div class="form-row mb-4">
                                    <div class="col" style="text-align: left;">
                                        <!-- First name -->
                                        <input type="text" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
                                    </div>
                                    <div class="col" style="text-align: left;">
                                        <!-- Last name -->
                                        <input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
                                    </div>
                                </div>
                                
                                <!-- E-mail -->
                                <div style="text-align: left;">
                                <input type="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="name@example.com">
                                </div>
                                
                                <div style="text-align: left;">
                                   <input type="tel" id="phone" "defaultRegisterPhonePassword" class="form-control" placeholder="08135467889">
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
          </section>
        </div>
@endsection