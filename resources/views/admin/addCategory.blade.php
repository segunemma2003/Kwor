@extends('layouts.admin.master')
@section('content')
<div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
											<div class="breadcomb-icon">
												<i class="icon nalika-home"></i>
											</div>
											<div class="breadcomb-ctn">
												<h2>Add Category</h2>
												<p>Welcome to Abaglobal <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<!-- <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button> -->
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single pro tab start-->
        <div class="single-product-tab-area mg-b-30">
            <!-- Single pro tab review Start-->
            <div class="single-pro-review-area">
                <div class="container-fluid">
                    <div class="row">
                        @if(session('success'))
                        <div class="alert alert-success">
                            Success
                        </div>
                        @endif
                        <form method="post">
                            @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="review-tab-pro-inner">
                                <ul id="myTab3" class="tab-review-design">
                                    <li class="active"><a href="#description"><i class="icon nalika-edit" aria-hidden="true"></i> Add Category</a></li>
                                    <!-- <li><a href="#reviews"><i class="icon nalika-picture" aria-hidden="true"></i> Pictures</a></li>
                                    <li><a href="#INFORMATION"><i class="icon nalika-chat" aria-hidden="true"></i> Review</a></li> -->
                                </ul>
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="First Name">
                                                    </div> -->
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-edit" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" name="name" placeholder="Category name">
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Regular Price">
                                                    </div> -->
<!--                                                    
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Sale Price">
                                                    </div>
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Quantity">
                                                    </div> -->
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="review-content-section">
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Last Name">
                                                    </div> -->
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}" placeholder="Category Description"></textarea>
                                                    </div>
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon">Upload picture<i class="icon nalika-new-file" aria-hidden="true"></i></span>
                                                        <input type="file" class="form-control" placeholder="">
                                                    </div> -->
                                                    <!-- <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" placeholder="Category">
                                                    </div> -->
                                                    <!-- <select name="select" class="form-control pro-edt-select form-control-primary">
															<option disabled>Select a category</option>
															<option value="opt2">2</option>
															<option value="opt3">3</option>
															<option value="opt4">4</option>
															<option value="opt5">5</option>
															<option value="opt6">6</option>
														</select> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center custom-pro-edt-ds">
                                                    <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10">Save
														</button>
                                                    <button type="cancel" class="btn btn-ctl-bt waves-effect waves-light">Discard
														</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
</div>
                                </div>
</form>
        @endsection