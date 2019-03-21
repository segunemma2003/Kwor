@extends('layouts.user.master')
@section('content')
<div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                <div class="card">
                  <div class="card-header coins">
                    <h3 class="h6 text-uppercase mb-0">Transfer Unit(s)</h3>
                  </div>
                  <div class="card-body">
                    {{QrCode::backgroundColor(255, 255, 0)->color(255, 0, 127)
                   ->size(500)->generate('Welcome to kerneldev.com!') }}
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
@endsection