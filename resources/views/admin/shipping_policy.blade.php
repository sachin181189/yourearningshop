@include('admin/header')
@include('admin/sidebar')
    @foreach($shipping_policy as $value)
        @php 
            $id = $value->id;
            $content = $value->content;
            $banner = $value->banner;
        @endphp
    @endforeach
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Shipping Policy Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Shipping Policy</li>
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
                            <form class="form-horizontal" action="{{ route('update-shipping-policy') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                    <label for="content" class="col-sm-2 text-right control-label col-form-label">Banner</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                    <label for="content" class="col-sm-2 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control summernote" id="content" name="content" placeholder="Content">{{ $content }}</textarea>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <input type="hidden" value="{{$banner}}" name="hidden_image" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <img id="proimage" class="proimage" src="{{ URL::asset('/banner_image')}}/{{$banner}}" alt="your image" style="width: 200px;height: 200px;" />

@include('admin/footer')
