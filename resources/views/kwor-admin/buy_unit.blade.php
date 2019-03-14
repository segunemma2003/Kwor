@extends('layouts.user.master')
@section('content')

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                <div class="card">
                  <div class="card-header coins">
                    <h6 class="text-uppercase mb-0">Buy Unit</h6>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text">
                      <thead>
                        <tr>
                          <th>Unit</th>
                          <th>Amnt in Naira</th>
                          <th>Buy</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" id="unit" class="form-control" placeholder="" style="width: 50%;"></td>
                          <td  id="ans">unit * &#8358;1</td>
                          <td>
                             <button class="btn" onclick="Naira()">Buy</button>
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