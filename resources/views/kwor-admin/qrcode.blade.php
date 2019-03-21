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
                <div id="qr" class="col-md-offset-3 col-md-6">
                    {!! $qr !!}
                </div>
                  <button onclick="printInfo()">Print Qrcode</button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <script>
        function printInfo() {
          var prtContent = document.getElementById("qr");
          var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
          WinPrint.document.write(prtContent.innerHTML);
          WinPrint.document.close();
          WinPrint.focus();
          WinPrint.print();
          WinPrint.close();
        }
        </script>
@endsection