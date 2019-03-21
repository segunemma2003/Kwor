@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                <div class="card">
                  <div class="card-header coins">
                    <h3 class="h6 text-uppercase mb-0">QRCode
                    </h3>
                  </div>
                  <div class="card-body">
                    {{$qr}}
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection