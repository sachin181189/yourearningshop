@include('admin/header');
@include('admin/sidebar');
@if( $id != '')

    @if($subcategoryvariant)
        @php 
        
        $countvar = count($subcategoryvariant);
        if($countvar == 1)
        {
            $variant1 = $subcategoryvariant[0]->variant_name;
            $variant2 = '';
        }
        elseif($countvar == 2)
        {
            $variant1 = $subcategoryvariant[0]->variant_name;
            $variant2 = $subcategoryvariant[1]->variant_name;
        }
        else
        {
            $variant1 = '';
            $variant2 = '';
        }
        @endphp
    @else
    $variant1 = '';
    $variant2 = '';
    @endif
    
    @foreach($subcategory as $value)
        @php 
            $id = $value['id'];
            $categoryid = $value['category'];
            $subcategoryname = $value['subcategory'];
            $status = $value['status'];
            $slug = $value['slug'];
            $image_icon = $value['image_icon'];
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $subcategoryname = '';
        $categoryid = '';
        $slug = '';
        $status = '';
        $image_icon = '';
        $variant1 = '';
        $variant2 = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Category Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new Subcategory</li>
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
                            <form class="form-horizontal" action="{{ route('update-subcategory') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-subcategory" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Subcategory</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="fname" name="subcategory" placeholder="Subategory Name Here" value="{{ $subcategoryname }}" onblur="setProductSlug(this.value)" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label">Slug</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Name Here" value="{{ $slug }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Category</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="category" required>
                                            @foreach($category as $cat)
                                            <option value="{{$cat->id}}" @if($cat->id == $categoryid) selected @endif>{{$cat->category}}</option>
                                            @endforeach
                                            </select>
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
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label">Variant 1 (Optional)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="variant1" name="variant[]" placeholder="First variant (optional)" value="{{$variant1}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label">Variant 2 (Optional)</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="variant2" name="variant[]" placeholder="Second variant (optional)" value="{{$variant2}}">
                                        </div>
                                    </div>
                                    <!--<div class="row">-->
                                    <!--    <div class="card col-md-12">-->
                                    <!--      <div class="card-header">ADD PRODUCT SPECIFICATION</div>-->
                                    <!--        <div class="card-body" style="background: blanchedalmond!important;">-->
                                    <!--            <div class="form-group row">-->
                                    <!--                <div class="col-md-12">-->
                                    <!--                    <div class="optionBox">-->
                                    <!--            <div class="block">-->
                                    <!--                <div class="add text-primary" style="cursor:pointer;padding: 0px 0px 8px 0px;">Add Specification +</div>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--                </div>-->
                                    <!--            </div>-->
                                    <!--      </div>-->
                                    <!--    </div>-->
                                    <!-- </div>-->
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)">
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$image_icon}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <div class="form-group row" id="imageDiv">
                                    <img id="proimage" class="proimage" src="{{ URL::asset('/sub_category_image' )}}/{{$image_icon}}" alt="your image" style="width: 200px;height: 200px;" />
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer');     
<script type="text/javascript">
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
</script>