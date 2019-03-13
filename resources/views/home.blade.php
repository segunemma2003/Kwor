@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <?php
                    $images=Auth::user()->phone.".png";
                    ?>
                    <img src="{{asset('images/qrcodes/'.$images)}}" width="500px" height="500px"/>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
