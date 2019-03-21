@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
        <section class="py-5">
            <div class="row">
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                      <h6 class="mb-0">Total payments in the past 7days</h6><br><span class="text-white">{{$stransact->sum('amount')}} kwuo unit(s)</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-clock"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                 <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-violet"></div>
                    <div class="text">
                      <h6 class="mb-0">Total received Kwuo unit(s) in the past 7days</h6><br><span class="text-white">{{$transact->sum('amount')}} Kwuo unit(s)</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-violet"><i class="fas fa-clock"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-blue"></div>
                    <div class="text">
                      <h6 class="mb-0">Total  payments made till date</h6><br><span class="text-white">{{$allta->sum('amount')}} Kwuo unit(s)</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-blue"><i class="fa fa-calendar"></i></div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-6 mb-4 mb-xl-0">
                <div class="coins shadow roundy p-4 h-100 d-flex align-items-center justify-content-between">
                  <div class="flex-grow-1 d-flex align-items-center">
                    <div class="dot mr-3 bg-red"></div>
                    <div class="text">
                      <h6 class="mb-0">Total received kwuo unit(s) made till date</h6><br><span class="text-white">{{$allre->sum('amount')}} Kwuo unit(s)</span>
                    </div>
                  </div>
                  <div class="icon text-white bg-red"><i class="fas fa-calendar"></i></div>
                </div>
              </div>
            </div>
          </section>
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                <div class="card">
                  <div class="card-header coins">
                    <h6 class="text-uppercase mb-0">Striped table with hover effect</h6>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text table-responsive">
                      <thead>
                        <tr>
                          <th>ref</th>
                          <th>Amount(Kwuo unit(s))</th>
                          <th>Description</th>
                          <th>account Name</th>
                           <th>Status</th>
                           <th>Date</th>
                           <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(!$transactions->count()>1)
                        <div class="alert alert-primary">
                        You have no transactions yet  
                      </div>
                        @else
                        @foreach($transactions as $transac)
                        <tr>
                          <th scope="row">{{$loop->index+1}}</th>
                          <td>{{$transac->amount}}</td>
                          <td>{{$transac->reason_payment}}</td>
                          <td>{{$transac->accountR->account_name}}</td>
                          <td><?php
                          if($transac->status==0){
                            echo "pending";
                          }elseif($transac->status==1){
                            echo "accepted";
                          }else{
                            echo "rejected";
                          }
                          ?></td>
                          <td>{{$transac->created_at->diffHumans()}}</td>
                        </tr>
                        @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection