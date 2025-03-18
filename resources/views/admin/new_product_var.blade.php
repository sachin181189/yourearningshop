@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($product as $value)
        @php 
            $id = $value['id'];
            $product_name = $value['product_name'];
            $vendor_id = $value['vendor_id'];
            $slug = $value['slug'];
            $category_id = $value['category_id'];
            $brand_id = $value['brand_id'];
            $subcategory_id = $value['subcategory_id'];
            $product_description = $value['product_description'];
            $product_type = $value['product_type'];
            $image = $value['product_image'];
            $stock = $value['stock'];
            $price = $value['price'];
            $offer_price = $value['offer_price'];
            $color = $value['color'];
            $size = $value['size'];
            $unit = $value['unit'];
            $status = $value['status'];
            $return_exchange_policy_type = $value['return_exchange_policy_type'];
            $return_exchange_days = $value['return_exchange_days'];
            
            $variant_name1 = $value['variant_name1'];
            $variant_value1 = $value['variant_value1'];
            $variant_name2 = $value['variant_name2'];
            $variant_value2 = $value['variant_value2'];
            
        @endphp
    @endforeach
@else
    @php 
            $id ='';
            $product_name ='';
            $slug = '';
            $vendor_id ='';
            $category_id ='';
            $subcategory_id ='';
            $product_description ='';
            $product_type ='';
            $brand_id ='';
            $stock ='';
            $price ='';
            $offer_price ='';
            $color ='';
            $size ='';
            $unit ='';
            $status ='';
            $image = '';
            $variant_name1 = '';
            $variant_value1 = '';
            $variant_name2 = '';
            $variant_value2 = '';
            $return_exchange_policy_type = 0;
            $return_exchange_days = 0;
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Product Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new product</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> {{ session('error') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if( $id != '')
                            <form class="form-horizontal" action="{{ route('update-product') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-product" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                            <label for="product_name" class="col-sm-4 text-right control-label col-form-label">Product name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name Here" value="{{ $product_name }}" required onblur="setProductSlug(this.value);">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="product_name" class="col-sm-4 text-right control-label col-form-label">Slug</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Product Slug Here" value="{{ $slug }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="row">
                                         <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="vendor_id" class="col-sm-4 text-right control-label col-form-label">Vendor</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="vendor_id" required>
                                                    <option value="">Select Vendor</option>
                                                        @foreach($vendor as $ven)
                                                        <option value="{{$ven->id}}" @if($ven->id == $vendor_id) selected @endif>{{$ven->vendor_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                <label for="brand" class="col-sm-4 text-right control-label col-form-label">Brand</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="brand" required>
                                                        @foreach($brandlist as $bn)
                                                        <option value="{{$bn->id}}" @if($bn->id == $brand_id) selected @endif>{{$bn->brand_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                     </div>

                                    
                                    <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                <label for="category_id" class="col-sm-4 text-right control-label col-form-label">Category</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="category_id" onchange="getsubcategorydropdown(this.value);" required>
                                                    <option value="">Select Category</option>
                                                        @foreach($category as $cat)
                                                        <option value="{{$cat->id}}" @if($cat->id == $category_id) selected @endif>{{$cat->category}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group row">
                                                <label for="sub_category_id" class="col-sm-4 text-right control-label col-form-label">Subcategory</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="sub_category_id" id="subcategory" required onchange="getsubcategoryvaraint(this.value)">
                                                    <option value="0">Select Subcategory</option>
                                                    </select>
                                                </div>
                                            </div>
                                         </div>
                                     </div>
                                     <div class="row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Add Variaty</label>
                                        <div class="col-md-10" style="border: 1px solid lightgray;">
                                            <div id="varbox">
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="labelbox">
                                                            <div class="row">
                                                                @foreach($product_variant_label as $pl)
                                                                    @if(count($product_variant_label) == 2)
                                                                    <label for="color" class="col-sm-2 control-label col-form-label">{{$pl->variant_name}}</label>
                                                                    <input type="hidden" name="variant_name[]" value="{{$pl->variant_name}}">
                                                                    
                                                                    @elseif(count($product_variant_label) == 1)
                                                                    <label for="color" class="col-sm-4 control-label col-form-label">{{$pl->variant_name}}</label>
                                                                    <input type="hidden" name="variant_name[]" value="{{$pl->variant_name}}">
                                                                    @endif
                                                                @endforeach
                                                                @if(count($product_variant_label) == 2 || count($product_variant_label) == 1)
                                                                <label for="price" class="col-sm-3 control-label col-form-label">Price</label>
                                                                <label for="offer_price" class="col-sm-3 control-label col-form-label">Offer price</label>
                                                                <label for="stock" class="col-sm-2 control-label col-form-label">Stock</label>
                                                                @else
                                                                <label for="price" class="col-sm-4 control-label col-form-label">Price</label>
                                                                <label for="offer_price" class="col-sm-4 control-label col-form-label">Offer price</label>
                                                                <label for="stock" class="col-sm-4 control-label col-form-label">Stock</label>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="optionBox1">
                                                            @if( $id != '')
                                                            
                                                            <!--DEFAULT VARIANT START-->
                                                                <div class="block1">
                                                                    <div class="row">
                                                                    @if(count($product_variant_label) == 2)
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" name="{{$variant_name1}}[]" placeholder="{{$variant_value1}}" value="{{$variant_value1}}">
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" name="{{$variant_name2}}[]" placeholder="{{$variant_value2}}" value="{{$variant_value2}}">
                                                                    </div>
                                                                    @elseif(count($product_variant_label) == 1)
                                                                    <div class="col-sm-4">
                                                                        <input type="text" class="form-control" name="{{$variant_name1}}[]" placeholder="{{$variant_value1}}" value="{{$variant_value1}}">
                                                                    </div>
                                                                    @endif
                                                                    @if(count($product_variant_label) == 2)
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$offer_price}}" required="">
                                                                    </div>
                                                                    @elseif(count($product_variant_label) == 1)
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$offer_price}}" required="">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-4">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$offer_price}}" required="">
                                                                    </div>
                                                                    @endif
                                                                    @if(count($product_variant_label) == 1 || count($product_variant_label)==2)
                                                                    <div class="col-sm-2">
                                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="{{$stock}}" required="">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-4">
                                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="{{$stock}}" required="">
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 text-right text-danger remove1" style="cursor:pointer;">Remove Option</div>
                                                            </div>
                                                            
                                                            <!--DEFAULT VARIANT END-->
                                                            
                                                            @foreach($product_variant as $pv)
                                                            
                                                                <!--EDIT MODE BOX-->
                                                                <div class="block1">
                                                                <div class="row">
                                                                    @if(count($product_variant_label) == 2)
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" name="{{$pv->variant_name1}}[]" placeholder="{{$pv->variant_value1}}" value="{{$pv->variant_value1}}">
                                                                    </div>
                                                                    <div class="col-sm-2">
                                                                        <input type="text" class="form-control" name="{{$pv->variant_name2}}[]" placeholder="{{$pv->variant_value2}}" value="{{$pv->variant_value2}}">
                                                                    </div>
                                                                    @elseif(count($product_variant_label) == 1)
                                                                    <div class="col-sm-4">
                                                                        <input type="text" class="form-control" name="{{$pv->variant_name1}}[]" placeholder="{{$pv->variant_value1}}" value="{{$pv->variant_value1}}">
                                                                    </div>
                                                                    @endif
                                                                    @if(count($product_variant_label) == 2)
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$pv->price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$pv->offer_price}}" required="">
                                                                    </div>
                                                                    @elseif(count($product_variant_label) == 1)
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$pv->price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-3">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$pv->offer_price}}" required="">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-4">
                                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="{{$pv->price}}" required="">
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="{{$pv->offer_price}}" required="">
                                                                    </div>
                                                                    @endif
                                                                    @if(count($product_variant_label) == 1 || count($product_variant_label)==2)
                                                                    <div class="col-sm-2">
                                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="{{$pv->stock}}" required="">
                                                                    </div>
                                                                    @else
                                                                    <div class="col-sm-4">
                                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="{{$pv->stock}}" required="">
                                                                    </div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-md-12 text-right text-danger remove1" style="cursor:pointer;">Remove Option</div>

                                                                <!--EDIT MODE BOX-->
                                                                
                                                            </div>
                                                            @endforeach
                                                            @else
                                                            <div class="block1"></div>
                                                            @endif
                                                            
                                                            <div class="add1 text-primary" style="cursor:pointer;padding: 0px 0px 8px 0px;">Add Variaty +</div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                     </div>
                                     
                                     
                                    <div class="row" style="margin-top:10px;margin-bottom:10px;">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Add Specification</label>
                                        <div class="col-md-10" style="border: 1px solid lightgray;">
                                            <div>
                                                <div class="form-group row">
                                                    <div class="col-md-12">
                                                        <div class="optionBox">
                                                            <div class="block">
                                                                <div class="add text-primary" style="cursor:pointer;padding: 0px 0px 8px 0px;">Add Specification +</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                          </div>
                                        </div>
                                     </div>
                                     <div class="row">
                                         <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Description</label>
                                                <div class="col-sm-10">
                                                    <textarea class="form-control productsummen" id="product_description" name="product_description" placeholder="Product description" required>{{ $product_description }}</textarea>
                                                </div>
                                            </div>
                                         </div>
                                     </div>
                                     
                                    <div class="row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="status">
                                                <option value="1" @if($status == "1") selected @endif>Active</option>
                                                <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Exchange/Return Policy</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="return_exchange_policy_type">
                                                <option value="0" @if($return_exchange_policy_type == "0") selected @endif>No Exchange/Return Policy</option>
                                                <option value="1" @if($return_exchange_policy_type == "1") selected @endif>Return Policy</option>
                                                <option value="2" @if($return_exchange_policy_type == "2") selected @endif>Exchange Policy</option>
                                            </select>
                                        </div>
                                     </div>
                                     <div class="form-group row">
                                        <label for="days" class="col-sm-2 text-right control-label col-form-label">No Of Days</label>
                                        <div class="col-sm-4">
                                            <input type="number" name="return_exchange_days" class="form-control" value="{{$return_exchange_days}}">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Featured Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)" @if($id == "") required @endif>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4"  id="imageDiv">
                                            <img id="proimage" class="proimage" src="{{ URL::asset('/product_image' )}}/{{$image}}" alt="your image" style="width: 200px;height: 200px;" />
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$id}}" id="hidden_id" name="hidden_id" class="form-control">
                                    <input type="hidden" value="{{$image}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$category_id}}" id="hidden_category_id" class="form-control">
                                    <input type="hidden" value="{{$subcategory_id}}" id="hidden_subcategory_id" class="form-control">
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer')   
<script type="text/javascript">
var allunitlist = '';
var count = 1;
getUnitList();
function getUnitList(){
    $.ajax({
        type:'POST',
        url:"{{ route('all-unit-list') }}",
        data:{ 
            "_token": "{{ csrf_token() }}"
             },
        success:function(response) {
             allunitlist = response;
        }
    });
}

$('.add').click(function() {
var html = `
<div class="block">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 text-right">Specification <span class="required">*</span></label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="specification[]" required>
                </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="form-group row">
                <label class="col-sm-3 text-right">Value <span class="required">*</span></label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="speci_value[]" required>
                </div>
                </div>
            </div>
        </div>
    <div class="col-md-12 text-right text-danger remove" style="cursor:pointer;">Remove Option</div>
</div>`;
    $('.block:last').before(html);
});
$('.optionBox').on('click','.remove',function() {
    $(this).parent().remove();
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#proimage').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
    $("#imageDiv").removeClass('d-none');
}
getSpecification();
function getSpecification(){
    var hidden_id = $('#hidden_id').val();

    $.ajax({
        type:'POST',
        url:"{{ route('getspecification') }}",
        data:{ 
            "_token": "{{ csrf_token() }}",
            "hidden_id": hidden_id
             },
        success:function(response) {
            var specification = $.parseJSON(response);
            $.each( specification, function( key, val ) {
                var html = `<div class="block">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 text-right">Specification <span class="required">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="`+val.specification+`" name="specification[]" required>
                                </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group row">
                                <label class="col-sm-3 text-right">Value <span class="required">*</span></label>
                                <div class="col-sm-9">
                                <input type="text" class="form-control" value="`+val.speci_value+`" name="speci_value[]" required>
                                </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-md-12 text-right text-danger remove" style="cursor:pointer;">Remove Option</div>
                </div>`;
                $('.block:last').before(html);
            });
        }
    });
 }

$( document ).ready(function() {
    var hidden_category_id = $('#hidden_category_id').val();
    getsubcategorydropdown(hidden_category_id);
});
function getsubcategorydropdown(category_id){
    var sub_category_id = $('#hidden_subcategory_id').val();

    $.ajax({
        type:'POST',
        url:"{{ route('getsubcategory') }}",
        data:{ 
            "_token": "{{ csrf_token() }}",
            "category_id": category_id
             },
        success:function(response) {
            var subcategory = $.parseJSON(response);
            var html = `<option>Select Subcategory</option>`;
            $.each( subcategory, function( key, val ) {
                if (sub_category_id == val.id) {
                    var selected = "selected";
                }
                else
                {
                    var selected = "";
                }
                html += `<option value="`+val.id+`" `+selected+`>`+val.subcategory+`</option>`
            });
            $("#subcategory").html(html);
        }
    });
 }
 function getsubcategoryvaraint(subcategory_id){
     $("#hidden_subcategory_id").val(subcategory_id);
    $.ajax({
        type:'POST',
        url:"{{ route('subcategory-variant') }}",
        data:{ 
            "_token": "{{ csrf_token() }}",
            "subcategory_id": subcategory_id
             },
        success:function(response) {
            
            variatyHtml(response);
        }
    });
 }
$('.productsummen').summernote({
    placeholder: 'Product description here...',
    height: 220
});


$('.add1').click(function() {
    
    var subcategory_id = $("#hidden_subcategory_id").val();
    $.ajax({
        type:'POST',
        url:"{{ route('subcategory-variant') }}",
        data:{ 
            "_token": "{{ csrf_token() }}",
            "subcategory_id": subcategory_id
             },
        success:function(response) {
            
               variatyHtml(response);    
    
        }
    });
    
            
});

function variatyHtml(response)
{
    var attribute_textbox_html = ``;
    var attribute_name_html = ``;
                    // html for label start
                     attribute_name_html = `<div class="row">`;
                    $.each( response, function( key, vn ) {
                            if(response.length == 2){
                            attribute_name_html += `<label for="color" class="col-sm-2 control-label col-form-label">`+vn.variant_name+`</label>
                                                    <input type="hidden" name="variant_name[]" value="`+vn.variant_name+`">`;
                            }else if(response.length == 1){
                               attribute_name_html += `<label for="color" class="col-sm-4 control-label col-form-label">`+vn.variant_name+`</label>
                                                        <input type="hidden" name="variant_name[]" value="`+vn.variant_name+`">`; 
                            }
                        });
                        
                        if(response.length == 1 || response.length == 2)
                        {
                            attribute_name_html +=`<label for="price" class="col-sm-3 control-label col-form-label">Price</label>
                                             <label for="offer_price" class="col-sm-3 control-label col-form-label">Offer price</label>
                                             <label for="stock" class="col-sm-2 control-label col-form-label">Stock</label>
                                             </div>`;
                        }
                        else
                        {
                            attribute_name_html +=`<label for="price" class="col-sm-4 control-label col-form-label">Price</label>
                                             <label for="offer_price" class="col-sm-4 control-label col-form-label">Offer price</label>
                                             <label for="stock" class="col-sm-4 control-label col-form-label">Stock</label>
                                             </div>`;
                        }
                        // HTML for label end
                        // HTML for textbox start
                        
                                        attribute_textbox_html += `<div class="block1"><div class="row">`;
                                $.each( response, function( key, vv ) {
                                        if(response.length == 2){
                                            attribute_textbox_html+=`<div class="col-sm-2">
                                                                <input type="text" class="form-control" id="color" name="`+vv.variant_name+`[]" placeholder="`+vv.variant_name+`" value="">
                                                                </div>`;
                                        }else if(response.length == 1){
                                            attribute_textbox_html+=`<div class="col-sm-4">
                                                                <input type="text" class="form-control" id="color" name="`+vv.variant_name+`[]" placeholder="`+vv.variant_name+`" value="">
                                                                </div>`;
                                        }
                        });           
                    if(response.length == 1 || response.length == 2){
                    attribute_textbox_html += `<div class="col-sm-3">
                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="" required>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="" required>
                                                    </div>`;
                    }
                    else{
                        attribute_textbox_html += `<div class="col-sm-4">
                                                        <input type="number" step="0.01" class="form-control" id="price" name="main_price[]" placeholder="Price" value="" required>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="number" step="0.01" class="form-control" id="offer_price" name="main_offer_price[]" placeholder="Offer Price" value="" required>
                                                    </div>`;
                    }
                    if(response.length == 1 || response.length == 2){
                    attribute_textbox_html += `<div class="col-sm-2">
                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="" required>
                                                    </div>`;
                    }else{
                       attribute_textbox_html += `<div class="col-sm-4">
                                                        <input type="number" class="form-control" id="stock" name="main_stock[]" placeholder="Stock" value="" required>
                                                    </div>`; 
                    }
                    attribute_textbox_html += `</div>`;
                    // if(response.length == 1 || response.length == 2){
                        attribute_textbox_html +=`<div class="col-md-12 text-right text-danger remove1" style="cursor:pointer;">Remove Option</div>`;
                    // }
                    attribute_textbox_html +=`</div>`;
                
            
            $('.block1:last').before(attribute_textbox_html);
            $('.labelbox').html(attribute_name_html); 
}

$('.optionBox1').on('click','.remove1',function() {
    $(this).parent().remove();
});
</script>