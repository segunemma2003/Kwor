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
                      <h6 class="mb-0">Local payments in the past 7days</h6><br><span class="text-white">&#8358;145,14 GB</span>
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
                      <h6 class="mb-0">Local payments in the past 7days</h6><br><span class="text-white">&#8358;145,14 GB</span>
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
                      <h6 class="mb-0">Local total payments till date</h6><br><span class="text-white">&#8358;400</span>
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
                      <h6 class="mb-0">Foreign total payments till date</h6><br><span class="text-white">$123</span>
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
                          <th>Amount</th>
                          <th>Description</th>
                          <th>Customer Name</th>
                           <th>Status</th>
                           <th>Date</th>
                           <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>@twitter</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
                          <td>@mdo</td>
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