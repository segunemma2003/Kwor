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
												<h2>Product List</h2>
												<p>Welcome to Abaglobal <span class="bread-ntd">Admin Template</span></p>
											</div>
										</div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
											<button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
										</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-status mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Products List</h4>
                            <div class="add-product">
                                <a href="{{route('product.add')}}">Add Product</a>
                            </div>
                            
                            
                            <table>
                            @if($products->isEmpty())
                            <tr><td>No products</td></tr>
                            @else
                                <tr>
                                    <th>Image</th>
                                    <th>Product Title</th>
                                    <th>Status</th>
                                    <th>Purchases</th>
                                    <th>Product sales</th>
                                    <th>Stock</th>
                                    <th>Price</th>
                                    <th>Setting</th>
                                </tr>
                                @foreach($products as $product)
                                <tr>
                                    
                                    <td><img src="{{$product->images->first->image_url->image_url}}" alt="" /></td>
                                    <td>{{$product->title}}</td>
                                    <td>
                                        <button class="pd-setting">{{($product->quantity)?'Active':'Not Active'}}</button>
                                    </td>
                                    <td>50</td>
                                    <td>$750</td>
                                    <td>{{($product->quantity)?$product->quantity: 'Out Of Stock'}}</td>
                                    <td>$ {{$product->price}}</td>
                                    <td>
                                        <a href="{{route('product.edit',$product->id)}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                        <a href="{{route('product.delete',$product->id)}}" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                                            </table>
                            <div class="custom-pagination">
								<ul class="pagination">
									{{$products->links()}}
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection