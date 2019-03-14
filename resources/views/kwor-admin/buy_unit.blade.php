@extends('layouts.user.master')
@section('content')
<div class="d-flex align-items-stretch">
      <div id="sidebar" class="sidebar py-3">
        <div class="text-black-400 text-uppercase px-3 px-lg-4 py-4 font-weight-bold small headings-font-family" style="color: green;">my Kwuo account</div>
        <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-list-item"><a href="index.html" class="sidebar-link text-muted"><i class="fa fa-gift mr-3 text-gray"></i><span>Dashboard</span></a></li>
                <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted active"><i class="fa fa-coins mr-3 text-gray"></i><span>Send Unit</span></a>
                <div id="pages" class="collapse">
                  <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="send-unit.html" class="sidebar-link text-muted pl-lg-5">Send Unit</a></li>
                    <li class="sidebar-list-item"><a href="recieve-unit.html" class="sidebar-link text-muted pl-lg-5">Recieve Unit</a></li>
                    <li class="sidebar-list-item"><a href="buy-unit.html" class="sidebar-link text-muted pl-lg-5 active">Buy Unit</a></li>
                  </ul>
                </div>
              </li>
                 <li class="sidebar-list-item"><a href="#" data-toggle="collapse" data-target="#pages" aria-expanded="false" aria-controls="pages" class="sidebar-link text-muted"><i class="fa fa-user-circle mr-3 text-gray"></i><span>Merchant Account</span></a>
                <div id="pages" class="collapse">
                  <ul class="sidebar-menu list-unstyled border-left border-primary border-thick">
                    <li class="sidebar-list-item"><a href="create-merch-acct.html" class="sidebar-link text-muted pl-lg-5 ">Create merchant account</a></li>
                    <li class="sidebar-list-item"><a href="view-merch-acct.html" class="sidebar-link text-muted pl-lg-5">View account</a></li>
                  </ul>
                </div>
              </li>
              <li class="sidebar-list-item"><a href="transactions.html" class="sidebar-link text-muted"><i class="fa fa-history mr-3 text-gray"></i><span>Transactions</span></a></li>
        </ul>
      </div>
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