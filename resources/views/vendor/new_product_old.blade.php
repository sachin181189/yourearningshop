@include('vendor/header');
@include('vendor/sidebar');
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
                            <form class="form-horizontal" action="{{ route('vendor-update-product') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="{{ route('vendor-save-product') }}" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Product name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name Here" value="{{ $product_name }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="product_name" class="col-sm-3 text-right control-label col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Product Slug Here" value="{{ $slug }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="brand" class="col-sm-3 text-right control-label col-form-label">Brand</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="brand" required>
                                                @foreach($brandlist as $bn)
                                                <option value="{{$bn->id}}" @if($bn->id == $brand_id) selected @endif>{{$bn->brand_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="category_id" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category_id" onchange="getsubcategorydropdown(this.value);" required>
                                            <option value="">Select Category</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->id}}" @if($cat->id == $category_id) selected @endif>{{$cat->category}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sub_category_id" class="col-sm-3 text-right control-label col-form-label">Subcategory</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="sub_category_id" id="subcategory" onchange="getsubsubcategorydropdown(this.value);" required>
                                            <option value="">Select Subcategory</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-9">
                                            <div class="optionBox">
                                                <div class="block">
                                                    <div class="add text-primary" style="cursor:pointer;padding: 0px 0px 8px 0px;">Add Specification +</div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group row">
                                        <label for="product_type" class="col-sm-3 text-right control-label col-form-label">Product type</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="product_type" required>
                                                @foreach($productType as $pt)
                                                <option value="{{$pt->id}}" @if($pt->id == $product_type) selected @endif>{{$pt->product_type}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="stock" class="col-sm-3 text-right control-label col-form-label">Stock</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="stock" name="stock" placeholder="Stock" value="{{ $stock }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="price" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{ $price }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="offer_price" class="col-sm-3 text-right control-label col-form-label">Offer price</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="offer_price" name="offer_price" placeholder="Offer Price" value="{{ $offer_price }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="color" class="col-sm-3 text-right control-label col-form-label">Color</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="color" name="color" placeholder="Color" value="{{ $color }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="size" class="col-sm-3 text-right control-label col-form-label">Size</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                <input type="text" class="form-control" id="size" name="size" placeholder="Size" value="{{ $size }}" required>
                                                </div>
                                                <div class="col-sm-6">
                                                <select class="form-control" id="unit" name="unit" required>
                                                <option value="">Select Unit</option>
                                                @foreach($product_unit as $uni)
                                                <option value="{{$uni->id}}" @if($uni->id == $unit) selected @endif>{{$uni->unit}}</option>
                                                @endforeach
                                            </select>
                                                </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="product_description" class="col-sm-3 text-right control-label col-form-label">Product description</label>
                                        <div class="col-sm-9">
                                            <textarea class="summernote" id="product_description" name="product_description" placeholder="Product description" required>{{ $product_description }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                            <option value="1" @if($status == "1") selected @endif>Active</option>
                                            <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)" @if($id == "") required @endif>
                                        </div>
                                    </div>
                                    <div class="form-group row" id="imageDiv">
                                    <img id="proimage" class="proimage" src="{{ URL::asset('/product_image' )}}/{{$image}}" alt="your image" style="width: 200px;height: 200px;" />
                                    </div>
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <input type="hidden" value="{{$image}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$category_id}}" id="hidden_category_id" class="form-control">
                                    <input type="hidden" value="{{$subcategory_id}}" id="hidden_subcategory_id" class="form-control">
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('vendor/footer');     
<script type="text/javascript">
                $('.add').click(function() {
                var html = `
                <div class="block">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                <label>Beneficiary Name <span class="required">*</span></label>
                                <input type="text" class="form-control" name="specification[]" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                <label>Beneficiary Age <span class="required">*</span></label>
                                <input type="text" class="form-control" name="speci_value[]" required>
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
            "hidden_id": "{{ $id }}",
             },
        success:function(response) {
            console.log("hgcjhgjs");
            console.log(response);
            var specification = $.parseJSON(response);
            $.each( specification, function( key, val ) {
                var html = `<div class="block">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                <label>Beneficiary Name <span class="required">*</span></label>
                                <input type="text" class="form-control" value="`+val.specification+`" name="specification[]" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                <label>Beneficiary Age <span class="required">*</span></label>
                                <input type="text" class="form-control" value="`+val.speci_value+`" name="speci_value[]" required>
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

function setProductSlug(title)
{
    var slug = title.replace(/ /g,"-");
    $("#slug").val(slug);
}
</script>