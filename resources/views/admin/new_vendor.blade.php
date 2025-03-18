@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($vendor as $value)
        @php 
            $id = $value['id'];
            $vendor_name = $value['vendor_name'];
            $company_name = $value['company_name'];
            $email = $value['email'];
            $password = $value['password'];
            $mobile = $value['mobile'];
            $gst_no = $value['gst_no'];
            $alternate_mobile = $value['alternate_mobile'];
            $address = $value['address'];
            $city = $value['city'];
            $state = $value['state'];
            $zip = $value['zip'];
            $service_description = $value['service_description'];
            $status = $value['status'];
            $bank_name = $value['bank_name'];
            $account_no = $value['account_no'];
            $branch_name = $value['branch_name'];
            $ifsc_code = $value['ifsc_code'];
            $account_holder = $value['account_holder'];
            $account_type = $value['account_type'];
            $cheque_image = $value['cheque_image'];
            $parent_referral_code = $value['parent_referral_code'];
            $paid_amount = $value['paid_amount'];
            $is_paid = $value['is_paid'];
            
        @endphp
    @endforeach
@else
    @php 
            $id = '';
            $vendor_name = '';
            $company_name = '';
            $email = '';
            $password = '';
            $mobile = '';
            $gst_no = '';
            $alternate_mobile = '';
            $address = '';
            $city = '';
            $state = '';
            $zip = '';
            $service_description = '';
            $status = '';
            $bank_name = '';
            $account_no = '';
            $branch_name = '';
            $ifsc_code = '';
            $account_holder = '';
            $account_type = '';
            $cheque_image = '';
            $parent_referral_code = '';
            $paid_amount = '';
            $is_paid = '';
            $pincode = array();
    @endphp
@endif

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Vendor Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new vendor</li>
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
                            <form class="form-horizontal" action="{{ route('update-vendor') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-vendor" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="vendor_name" class="col-sm-4 text-right control-label col-form-label">Vendor Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="vendor_name" name="vendor_name" placeholder="Vendor Name Here" value="{{ $vendor_name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="company_name" class="col-sm-4 text-right control-label col-form-label">Company Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="company_name" name="company_name" placeholder="Company Name Here" value="{{ $company_name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-4 text-right control-label col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Here" value="{{ $email }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-4 text-right control-label col-form-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" id="password" name="password" placeholder="password Here" value="{{ $password }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden_password" value="{{ $password }}">
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
                                                <label for="gst_no" class="col-sm-4 text-right control-label col-form-label">GST No</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="GST No Here" value="{{ $gst_no }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="alternate_mobile" class="col-sm-4 text-right control-label col-form-label">Alternate Mobile</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="alternate_mobile" name="alternate_mobile" placeholder="Alternate Mobile Here" value="{{ $alternate_mobile }}">
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
                                                    <input type="text" class="form-control" id="ifsc_code" name="ifsc_code" placeholder="State Here" value="{{ $ifsc_code }}">
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
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="service_description" class="col-sm-2 text-right control-label col-form-label">Service Description</label>
                                                <div class="col-sm-10">
                                                <textarea class="form-control" rows="7" name="service_description" id="service_description" placeholder="Service Description Here">{{$service_description}}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="service_description" class="col-sm-2 text-right control-label col-form-label">Pincode</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control select" name="pincode[]" multiple="multiple" required>
                                                            @foreach($pincode as $p)
                                                                <option value="{{$p->pincode}}" selected>{{$p->pincode}}</option>
                                                            @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group row">
                                                <label for="lname" class="col-sm-2 text-right control-label col-form-label">Cheque Image</label>
                                                <div class="col-sm-4">
                                                    <input type="file" name="file" class="form-control" onchange="readURL(this)" @if($id == "") required @endif>
                                                </div>
                                                <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                                <div class="col-sm-4" id="imageDiv">
                                                    <img id="proimage" class="proimage" src="{{ URL::asset('/cheque_image' )}}/{{$cheque_image}}" alt="your image" style="width: 200px;height: 200px;" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_holder" class="col-sm-4 text-right control-label col-form-label">Paid Amount</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="paid_amount" name="paid_amount" placeholder="Enter Paid Amount ( It's a Total Amount )"  value="{{$paid_amount}}"  @if($paid_amount != '') readonly @endif>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="account_type" class="col-sm-4 text-right control-label col-form-label">Is Paid</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control select" name="is_paid" @if(1 == $is_paid) disabled @endif>
                                                        <option value="0" @if(0 == $is_paid) selected @endif>Not Paid Yet</option>
                                                        <option value="1" @if(1 == $is_paid) selected @endif>Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <input type="hidden" value="{{$cheque_image}}" name="hidden_image" class="form-control">
                                        <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                        <input type="hidden" value="{{$parent_referral_code}}" name="hidden_referral_code" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer')
<script>
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

$(".select").select2({
    tags: true,
    tokenSeparators: [',', ' ']
})
</script>