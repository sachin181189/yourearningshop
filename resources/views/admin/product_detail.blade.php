@include('admin/header');
@include('admin/sidebar');
@foreach($product_detail as $value)
        @php 
            $id = $value->id;
            $product_name = $value->product_name;
            $vendor_name = $value->vendor_name;
            $company_name = $value->company_name;
            $color = $value->color;
            $size = $value->size;
            $unit = $value->unit;
            $product_description = $value->product_description;
            $price = $value->price;
            $stock = $value->stock;
            $offer_price = $value->offer_price;
            $product_image = $value->product_image;
            $brand = $value->brand_name;
            $subcategory = $value->subcategory;
            $undersubcategory = $value->undersubcategory;
            $category = $value->category;
            $status = $value->status;
        @endphp
    @endforeach

    <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Product Detail</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<div class="container-fluid">
        <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-success" href="{{URL::to('product-list')}}">BACK</a>
                        </div>
                    </div>
                </div>
            </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Product Name</div>
                                <div class="col-md-6">{{$product_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Vendor Name</div>
                                <div class="col-md-6">{{$vendor_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Company Name</div>
                                <div class="col-md-6">{{$company_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Color</div>
                                <div class="col-md-6">{{$color}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Size</div>
                                <div class="col-md-6">{{$size}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Unit</div>
                                <div class="col-md-6">{{$unit}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Price</div>
                                <div class="col-md-6">{{$price}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Offer Price</div>
                                <div class="col-md-6">{{$offer_price}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Stock</div>
                                <div class="col-md-6">
                                {{$stock}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Brand</div>
                                <div class="col-md-6">
                                {{$brand}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Category</div>
                                <div class="col-md-6">
                                {{$category}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Subcategory</div>
                                <div class="col-md-6">
                                {{$subcategory}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Sub Subcategory</div>
                                <div class="col-md-6">
                                {{$undersubcategory}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Description</div>
                                <div class="col-md-6">
                                {{$product_description}} 
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6 font-weight-bold">Product status</div>
                                <div class="col-md-6">
                                @if ($status == 1)
                                <button class="btn btn-success btn-sm">Active</button>
                                @elseif($status == 0)
                                <button class="btn btn-danger btn-sm">InActive</button>
                                @endif
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-12">
                                <img src="{{ URL::asset('/product_image' )}}/{{$product_image}}" style="width:50%;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
@include('admin/footer'); 