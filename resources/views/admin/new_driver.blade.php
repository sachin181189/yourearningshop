@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($driver as $value)
        @php 
            $hidden_id = $value['id'];
            $driver_name = $value['driver_name'];
            $email = $value['email'];
            $mobile = $value['mobile'];
            $password = $value['password'];
            $driving_licence_front = $value['driving_licence_front'];
            $driving_licence_back = $value['driving_licence_back'];
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
@else
    @php 
            $hidden_id = '';
            $driver_name = '';
            $email = '';
            $mobile = '';
            $password = '';
            $driving_licence_front = '';
            $driving_licence_back = '';
            $address = '';
            $city = '';
            $state = '';
            $zip = '';
            $alternate_mobile = '';
            $bank_name = '';
            $account_no = '';
            $branch_name = '';
            $ifsc_code = '';
            $account_holder = '';
            $account_type = '';
            $status = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Driver Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    @if( $id != '')
                                    <li class="breadcrumb-item active" aria-current="page">Update driver</li>
                                    @else
                                    <li class="breadcrumb-item active" aria-current="page">Add new driver</li>
                                    @endif
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
                            <form class="form-horizontal" action="{{ route('update-driver') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="{{ route('save-driver') }}" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="driver_name" class="col-sm-4 text-right control-label col-form-label">Driver Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="driver_name" name="driver_name" placeholder="Driver Name Here" value="{{ $driver_name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-4 text-right control-label col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Here" value="{{ $email }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-4 text-right control-label col-form-label">Mobile</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Here" value="{{ $mobile }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="alternate_mobile" class="col-sm-4 text-right control-label col-form-label">Alternate Mobile</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="alternate_mobile" name="alternate_mobile" placeholder="Alternate Mobile Here" value="{{ $alternate_mobile }}">
                                                </div>
                                            </div>
                                        </div>
                                       
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-4 text-right control-label col-form-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="password Here" value="{{ $password }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-4 text-right control-label col-form-label">Address</label>
                                                <div class="col-sm-8">
                                                <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" value="{{ $address }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="city" class="col-sm-4 text-right control-label col-form-label">City</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="city" name="city" placeholder="City Here" value="{{ $city }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="state" class="col-sm-4 text-right control-label col-form-label">State</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="state" name="state" placeholder="State Here" value="{{ $state }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="zip" class="col-sm-4 text-right control-label col-form-label">Zip</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Here" value="{{ $zip }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="status" class="col-sm-4 text-right control-label col-form-label">Status</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="status">
                                                    <option value="1" @if($status == "1") selected @endif>Active</option>
                                                    <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="bank_name" class="col-sm-4 text-right control-label col-form-label">Bank Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank Name Here" value="{{ $bank_name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_no" class="col-sm-4 text-right control-label col-form-label">Account No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="account_no" name="account_no" placeholder="Account No Here" value="{{ $account_no }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="branch_name" class="col-sm-4 text-right control-label col-form-label">Branch Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="branch_name" name="branch_name" placeholder="Branch Name Here" value="{{ $branch_name }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="ifsc_code" class="col-sm-4 text-right control-label col-form-label">IFSC Code</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="IFSC Here" value="{{ $ifsc_code }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_holder" class="col-sm-4 text-right control-label col-form-label">Account Holder</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="account_holder" name="account_holder" placeholder="Account Holder Here" value="{{ $account_holder }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_type" class="col-sm-4 text-right control-label col-form-label">Account Type</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="account_type" name="account_type" placeholder="Account Type Here" value="{{ $account_type }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="account_holder" class="col-sm-4 text-right control-label col-form-label">Driving Licence Front</label>
                                                    <div class="col-sm-8">
                                                        <input type="file" class="form-control" name="driving_licence_front" onchange="readURL(this)">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="account_holder" class="col-sm-4 text-right control-label col-form-label"></label>
                                                    <div class="col-sm-8">
                                                        <img id="proimage" class="proimage" src="{{ URL::asset('/driver_licence' )}}/{{$driving_licence_front}}" alt="your image" style="width: 200px;height: 200px;" />
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_type" class="col-sm-4 text-right control-label col-form-label">Driving Licence Back</label>
                                                <div class="col-sm-8">
                                                    <input type="file" class="form-control" name="driving_licence_back" onchange="readURL1(this)">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label for="account_holder" class="col-sm-4 text-right control-label col-form-label"></label>
                                                <div class="col-sm-8">
                                                    <img id="proimage1" class="proimage" src="{{ URL::asset('/driver_licence' )}}/{{$driving_licence_back}}" alt="your image" style="width: 200px;height: 200px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$hidden_id}}" name="hidden_id" class="form-control">
                                    <input type="hidden" value="{{$driving_licence_front}}" name="hidden_driving_licence_front" class="form-control">
                                    <input type="hidden" value="{{$driving_licence_back}}" name="hidden_driving_licence_back" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="btn btn-primary">Next</button>
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
}
function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#proimage1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
}
</script>