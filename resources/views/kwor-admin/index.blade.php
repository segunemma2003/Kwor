@extends('layouts.user.master')
@section('content')
      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5" style="margin-top: -45px;">
            <div class="row">
              <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <!-- <div class="dot mr-3 bg-violet"></div> -->
                    <div class="text">
                      <h6 class="mb-0">Total kwụọ Units</h6><span class="text-black">{{$account->balance}} kwụọ unit(s)
                      </span>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="fa fa-coins"></i></div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <!-- <div class="dot mr-3 bg-violet"></div> -->
                    <div class="text">
                      <h6 class="mb-0">Total kwụọ unit spent</h6><span class="text-white">{{$transaction->sum('amount')}} kwụọ unit(s)</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="fas fa-server"></i></div>
                </div>
              </div>
              <div class="col-xl-4 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <!-- <div class="dot mr-3 bg-blue"></div> -->
                    <div class="text">
                      <h6 class="mb-0">Number  of Transactions</h6><span class="text-white">{{count($transaction)}}</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-green"><i class="fa fa-dolly-flatbed"></i></div>
                </div>
              </div>
          </section>
          <section>
            <div class="row mb-4">
              <div class="col-lg-4">
                <div class="card px-5 py-4" style="height: 200px;">
                  <h2 class="mb-0 d-flex align-items-center"><span>81,598</span><span class="d-inline-block ml-3"> <div class="icon text-white bg-green"><i class="fa fa-coins"></i></div></span></h2><span class="text-muted">Current Balance</span>
                </div><br>
                </div>
                 <div class="col-lg-4">
                <div class="card px-5 py-4" style="height: 200px;">
                  <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="d-inline-block ml-3"> <div class="icon text-white bg-green"><i class="fa fa-coins"></i></div></span></h2><span class="text-muted">Total Savings</span>
                </div><br>
                </div>
                 <div class="col-lg-4">
                <div class="card px-5 py-4" style="height: 200px;">
                  <h2 class="mb-0 d-flex align-items-center"><span>86.4</span><span class="d-inline-block ml-3"> <div class="icon text-white bg-green"><i class="fa fa-coins"></i></div></span></h2><span class="text-muted">Current Returns</span>
                </div><br>
                </div>
            </div>
          </section>
          <section>
            <div class="row">
              <div class="col-lg-8">
                <div class="card mb-5 mb-lg-0">         
                  <div class="card-header coins">
                    <h2 class="h6 mb-0 text-uppercase">Transaction history</h2>
                  </div>
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Transactions</span></h6>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-black">
                        <h5>Amount</h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-black coins text-bold">Mar 1</div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Personal</span></h6><small class="text-white" style="background-color: #00C158;">Success</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-green">
                        <h5>200 <i class="fa fa-coins"></i></h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-black coins">Mar 1</div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Personal</span></h6><small class="text-white" style="background-color: darkred;">failed</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-green">
                        <h5>2000 <i class="fa fa-coins"></i></h5>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-start align-items-sm-center mb-4 flex-column flex-sm-row">
                      <div class="left d-flex align-items-center">
                        <div class="icon icon-lg shadow mr-3 text-black coins">Mar 1</div>
                        <div class="text">
                          <h6 class="mb-0 d-flex align-items-center"> <span>Personl</span></h6><small class="text-white" style="background-color: #00c158;">Success</small>
                        </div>
                      </div>
                      <div class="right ml-5 ml-sm-0 pl-3 pl-sm-0 text-green">
                        <h5>15000 <i class="fa fa-coins"></i></h5>
                      </div>
                    </div>
                  </div>
                </div><br>
              </div>
              <div class="col-lg-4">
                <div class="bg-white shadow roundy px-4 py-3 d-flex align-items-center justify-content-between mb-4">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Periodic plans</h6><br><span class="text-gray">10% INTEREST RATE</span><br><br><h5 class="text-green">81,598</h5>
                    </div>
                  </div>
                  <div class="icon bg-green text-white"><i class="fas fa-coins"></i></div>
                </div>
                <div class="bg-white shadow roundy px-4 py-3 d-flex align-items-center justify-content-between mb-4">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="text">
                      <h6 class="mb-0">Fixed plans</h6><br><span class="text-gray">We currently do not have any fixed saving plan.</span><br><br> 
                    </div>
                  </div>
                
                </div>
               <div class="card text-black bg-white mb-3" style="max-width: 18rem;">
                  <div class="card-header ">Invite friends </div>
                  <div class="card-body">
                    <p class="card-text">Share our referral rewards with your close friends.</p> <img src="{{asset('kwor-admin/my-icons-collection/svg/010-team.svg')}}" style="height: 50px; width: 50px;"><br><br>
                     <button type="button" class="btn-success invite-btn">Invite Them</button>
                  </div>
                </div><br>
              </div>
            </div>
          </section>
        </div>
    @endsection