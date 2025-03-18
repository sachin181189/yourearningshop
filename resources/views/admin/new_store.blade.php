@include('admin/header')
@include('admin/sidebar')

@if( $id != '')
    @foreach($store as $value)
        @php 
            $id = $value->id;
            $fullname = $value->fullname;
            $email = $value->email;
            $mobile = $value->mobile;
            $address = $value->address;
            $pincode = $value->pincode;
            $store_id = $value->store_id;
            $status = $value->status;
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $fullname = '';
        $email = '';
        $mobile = "";
        $address = "";
        $pincode = "";
        $store_id = '';
        $status = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Store Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new store</li>
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
                            <form class="form-horizontal" action="{{ route('update-store') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="{{ route('save-store') }}" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="fullname" class="col-sm-2 text-right control-label col-form-label">Store Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Store Name Here" value="{{$fullname}}" required>
                                        </div>
                                        
                                        <label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Email Here" value="{{$email}}" required>
                                        </div>
                                        
                                        <label for="phone" class="col-sm-2 text-right control-label col-form-label">Phone</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Here" value="{{$mobile}}" required>
                                        </div>
                                        
                                        <label for="address" class="col-sm-2 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" value="{{$address}}" required>
                                        </div>
                                        
                                        <label for="pincode" class="col-sm-2 text-right control-label col-form-label">Pincode</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Pincode Here" value="{{$pincode}}" required>
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="status">
                                            <option value="1" @if($status == "1") selected @endif>Active</option>
                                            <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <input type="hidden" value="{{$store_id}}" name="store_id" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer')