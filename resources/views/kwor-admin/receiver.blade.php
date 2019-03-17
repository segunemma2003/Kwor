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
                        @foreach($transactions as $transact)
                        {{$loop->index+1}}
                        @endforeach
                        <tr>
                          <th scope="row"></th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>
                             <button type = "button" value = "Click Me" onclick = "getValue();" class="btn">Accept</button> 
                            </td>
                            <td>
                              <button type="submit" class="btn">Reject</button>  
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>
                            <button type = "button" value = "Click Me" onclick = "getValue();" class="btn">Accept</button> 
                            </td>
                            <td>
                              <button type="submit" class="btn">Reject</button>  
                            </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>
                             <button type = "button" value = "Click Me" onclick = "getValue();" class="btn">Accept</button> 
                            </td>
                            <td>
                              <button type="submit" class="btn">Reject</button>  
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection