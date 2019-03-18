@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                        <div class="card">
                  <div class="card-header coins">
                    <h6 class="text-uppercase mb-0">Accept Request</h6>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text table-responsive">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Transaction_code</th>
                          <th>Request_no</th>
                          <th>Purpose</th>
                           <th>Action</th>
                           <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if($transactions->isEmpty())
                      <div class="alert alert-primary">
                      No pending request
                      </div>
                      @else
                        @foreach($transactions as $transact)
                        
                        <tr>
                          <td scope="row">{{$loop->index+1}}
                       </td>
                          <td>{{$transact->transaction_code}}</td>
                          <td>{{$transact->amount}}</td>
                          <td>{{$transact->reason_payment}}</td>
                          <td>
                             <button type = "button" value = "Click Me" onclick = "getValue();" class="btn btn-success">Accept</button> 
                            </td>
                            <td>
                              <button type="submit" class="btn btn-danger">Reject</button>  
                            </td>
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