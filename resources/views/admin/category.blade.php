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
												<h2>Category List</h2>
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
                            <h4>Category List</h4>
                            <div class="add-product">
                                <a href="{{route('category.add')}}">Add Category</a>
                            </div>
                            <table>
                                <tr>
                                    <th>S/no</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                    
                                </tr>
                                @if($category->isEmpty())
                                <div class="alert">
                                    No category
</div>
@else
                                @foreach($category as $cat)
                                <tr>
                                    
                                    <td>{{$loop->index+1}}</td>
                                    <td>{{$cat->name}}</td>
                                    <td>{{$cat->description}}</td>
                                    <td>
                                        <!-- <a href="{{--route('cat.edit',$cat->id)--}}" data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->
                                        <a href="{{route('cat.delete',$cat->id)}}" data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                @endif
                                
                            </table>
                            <div class="custom-pagination">
								{{$category->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection