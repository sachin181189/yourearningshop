@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($brand_detail as $value)
        @php 
            $id = $value['id'];
            $brand_name = $value['brand_name'];
            $image = $value['image'];
            $short_description = $value['short_description'];
            $description = $value['description'];
            $slug = $value['slug'];
            $status = $value['status'];
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $brand_name = '';
        $image = '';
        $short_description = "";
        $description = "";
        $slug = "";
        $status = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Brand Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new brand</li>
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
                            <form class="form-horizontal" action="{{ route('update-brand') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-brand" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">Brand</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="brand_name" name="brand_name" placeholder="Brand Name Here" value="{{ $brand_name }}" onblur="setProductSlug(this.value)" required>
                                        </div>
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">Slug</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Slug Here" value="{{ $slug }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">Short Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="short_description" rows="5" class="form-control">{{ $short_description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control summernote">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="status">
                                            <option value="1" @if($status == "1") selected @endif>Active</option>
                                            <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4">
                                            <img id="proimage" class="proimage" src="{{ URL::asset('/brand_image')}}/{{$image}}" alt="your image" style="width: 200px;height: 200px;" />
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$image}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer') 
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
</script>