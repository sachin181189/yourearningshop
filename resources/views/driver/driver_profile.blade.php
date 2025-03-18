@include('driver/header');
@include('driver/sidebar');
    @foreach($driver_profile as $value)
        @php 
            $hidden_id = $value['id'];
            $driver_name = $value['driver_name'];
            $email = $value['email'];
            $mobile = $value['mobile'];
            $password = $value['password'];

            $driving_licence_front = $value['driving_licence_front'];
            $driving_licence_back = $value['driving_licence_back'];
            $aadhar_front = $value['aadhar_front'];
            $aadhar_back = $value['aadhar_back'];
            $driver_image = $value['driver_image'];
            $rc_image = $value['rc_image'];

            $address = $value['address'];
            $city = $value['city'];
            $state = $value['state'];
            $zip = $value['zip'];
            $alternate_mobile = $value['alternate_mobile'];
            $bank_name = $value['bank_name'];
            $account_no = $value['account_no'];
            $branch_name = $value['branch_name'];
            $ifsc_code = $value['ifsc_code'];
            $account_holder = $value['account_holder'];
            $account_type = $value['account_type'];
            $status = $value['status'];
        @endphp
    @endforeach
    <style>
        .mb-10
        {
            margin-bottom:10px;
        }
    </style>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Driver Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Driver profile </li>
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
                            <div class="card-body">
                                <div class="row">
                                        <div class="col-md-6 mb-10">
                                            <b>Driver Name</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$driver_name}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Email</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$email}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Mobile</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$mobile}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Address</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$address}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>City</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$city}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>State</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$state}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Zip</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$zip}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Alternate Mobile</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$alternate_mobile}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Account No</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$account_no}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Branch Name</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$branch_name}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Ifsc Code</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$ifsc_code}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Account Holder</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$account_holder}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Account Type</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            {{$account_type}}
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Profile Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$driver_image}}',1);"></i>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Licence Front Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$driving_licence_front}}',2);"></i>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Licence Back Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$driving_licence_back}}',3);"></i>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Aadhar Front Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$aadhar_front}}',4);"></i>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Aadhar Back Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$aadhar_back}}',5);"></i>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <b>Rc Image</b>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <i class="fa fa-eye" onclick="show_image('{{$rc_image}}',6);"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <form class="form-horizontal" action="{{ route('update-driver-profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-3 text-right control-label col-form-label">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password Here" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="cpassword" class="col-sm-3 text-right control-label col-form-label">Confirm Password</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password Here" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="alternate_mobile" class="col-sm-3 text-right control-label col-form-label">Alternate Mobile</label>
                                                <div class="col-sm-9">
                                                    <input type="number" class="form-control" id="alternate_mobile" name="alternate_mobile" placeholder="Alternate Mobile Here" value="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$hidden_id}}" name="hidden_id" class="form-control">
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" id="modal_image">
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
@include('driver/footer');  
<script>
    function show_image(image,type)
    {
        if(type == 1)
        {
            var html = `<img src="{{ URL::asset('/driver_image' )}}/`+image+`" style="width:100%;">`;
        }
        else if(type == 2)
        {
            var html = `<img src="{{ URL::asset('/driver_licence' )}}/`+image+`" style="width:100%;">`;
        }
        else if(type == 3)
        {
            var html = `<img src="{{ URL::asset('/driver_licence' )}}/`+image+`" style="width:100%;">`;
        }
        else if(type == 4)
        {
            var html = `<img src="{{ URL::asset('/driver_aadhar_image' )}}/`+image+`" style="width:100%;">`;
        }
        else if(type == 5)
        {
            var html = `<img src="{{ URL::asset('/driver_aadhar_image' )}}/`+image+`" style="width:100%;">`;
        }
        else if(type == 6)
        {
            var html = `<img src="{{ URL::asset('/driver_rc_image' )}}/`+image+`" style="width:100%;">`;
        }
        $('#myModal').modal('toggle');
        $("#modal_image").html(html);
    }
</script>   
