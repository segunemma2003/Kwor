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
                    <div style="width:100px; height:100px; float:right;">
                      <b>Keys</b>
                      <div style="width:10px; height:10px; background-color:green;"></div><h6>Accept</h6>
                      <div style="width:10px; height:10px; background-color:red;"></div><h6>Reject</h6>
                    </div>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text table-responsive">
                      <thead>
                        <tr>
                          <th>No</th>
                          <!-- <th>Transaction_code</th> -->
                          <th>Amount</th>
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
            
                          <!-- <td>{--$transact->transaction_code--}</td> -->
                          <td>{{$transact->amount}}</td>
                          <td>{{$transact->reason_payment}}</td>

                          <td>
                          <input type="hidden" id="code" name="{{$transact->transaction_code}}" value="{{$transact->transaction_code}}">
                             <input type="button" onClick="Load(this)"class="btn btn-success" data-toggle="modal" value="{{$transact->transaction_code}}" data-target="#exampleModal"> 
                            </td>
                            <td>
                              <input type="button" onClick="Load(this)" class="btn btn-danger" value="{{$transact->transaction_code}}" data-toggle="modal" data-target="#examplesModal">  
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
            <!-- modal for accept-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Accept Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post">
                      @csrf
                      <input  type="hidden" name="transaction_code" id="newcodes">
                      <input type="hidden" name="response" value="1">
                      <input type="text" name="transfer_code" placeholder="input private key">
                    <input type="submit" >
                    </form>
                  </div>
                  <div class="modal-footer">
                  
                  </div>
                </div>
              </div>
            </div>
            <!-- modal for reject -->
            <div class="modal fade" id="examplesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reject Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                  <form method="post">
                  @csrf
                    <input type="hidden" name="response" value="2">
                    <input type="text" name="reject" placeholder="reason for reject">
                    <input type="hidden" name="transaction_code" id="newcode">
                  <input type="submit" onclick="Load()">
                  </form>
                  </div>
                  <div class="modal-footer">
            
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
       <script>
        function Load(x){
          console.log(x.name);
          var code=document.getElementById('code').value;
          var es=document.getElementById('newcode');
          es.value=x.value;
          var ess=document.getElementById('newcodes');
          ess.value=x.value;
          // console.log(ess.value);
        // return es;
        }
        
        </script>
@endsection