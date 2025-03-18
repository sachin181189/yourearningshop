@include('admin/header');
@include('admin/sidebar');
@foreach($driver_detail as $value)
        @php 
            $id = $value->id;
            $driver_name = $value->driver_name;
            $driving_licence_front = $value->driving_licence_front;
            $email = $value->email;
            $mobile = $value->mobile;
            $aadhar_front = $value->aadhar_front;
            $driving_licence_back = $value->driving_licence_back;
            $rc_image = $value->rc_image;
            $aadhar_back = $value->aadhar_back;
            $address = $value->address;
            $aadhar_back = $value->aadhar_back;
            $state = $value->state;
            $city = $value->city;
            $zip = $value->zip;
            $driver_image = $value->driver_image;
            $status = $value->status;
            $alternate_mobile = $value->alternate_mobile;

            $bank_name = $value->bank_name;
            $account_no = $value->account_no;
            $branch_name = $value->branch_name;
            $ifsc_code = $value->ifsc_code;
            $account_holder = $value->account_holder;
            $account_type = $value->account_type;
        @endphp
    @endforeach
    
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Order Detail</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Delivery Partner Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Driver Name</div>
                                <div class="col-md-6">{{$driver_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Email</div>
                                <div class="col-md-6">{{$email}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Mobile</div>
                                <div class="col-md-6">{{$mobile}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Alternate Mobile</div>
                                <div class="col-md-6">{{$alternate_mobile}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Address</div>
                                <div class="col-md-6">{{$address}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">City</div>
                                <div class="col-md-6">{{$city}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">State</div>
                                <div class="col-md-6">{{$state}}
                                </div>
                            </div>
                            
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Status</div>
                                <div class="col-md-6">
                                @if ($status == 1)
                                <button class="btn btn-success btn-sm">Active</button>
                                @else
                                <button class="btn btn-danger btn-sm">Inactive</button>
                                @endif
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Zip</div>
                                <div class="col-md-6">{{$zip}}</div>
                            </div>

                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Bank Name</div>
                                <div class="col-md-6">{{$bank_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">account_no</div>
                                <div class="col-md-6">{{$account_no}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Branch Name</div>
                                <div class="col-md-6">{{$branch_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Ifsc Code</div>
                                <div class="col-md-6">{{$ifsc_code}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Account Holder</div>
                                <div class="col-md-6">{{$account_holder}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Account Type</div>
                                <div class="col-md-6">{{$account_type}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Driving Licence Front</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_licence' )}}/{{ $driving_licence_front }}" style="height:70px;width:243px;"></div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Aadhar Front</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_aadhar_image' )}}/{{ $aadhar_front }}" style="height:70px;width:243px;"></div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Driving Licence Back</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_licence' )}}/{{ $driving_licence_back }}" style="height:70px;width:243px;"></div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">RC Image</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_rc_image' )}}/{{ $rc_image }}" style="height:70px;width:243px;"></div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Aadhar Back</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_aadhar_image' )}}/{{ $aadhar_back }}" style="height:70px;width:243px;"></div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Driver Image</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/driver_image' )}}/{{ $driver_image }}" style="height:70px;width:243px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>User name</th>
                                                <th>Order id</th>
                                                <th>Order date</th>
                                                <th>Sub Total</th>
                                                <th>Amount</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($order as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->fname }} {{ $value->lname }}</td>
                                                <td>{{ $value->order_id }}</td>
                                                <td>{{ $value->order_date }}</td>
                                                <td>{{ $value->sub_total }}</td>
                                                <td>{{ $value->grand_total }}</td>
                                                <td>
                                                @if ($value->order_status == 1)
                                                <button class="btn btn-success btn-sm">Confirmed</button>
                                                @elseif($value->order_status == 2)
                                                <button class="btn btn-danger btn-sm">Packed</button>
                                                @elseif($value->order_status == 3)
                                                <button class="btn btn-danger btn-sm">Shipped</button>
                                                @elseif($value->order_status == 4)
                                                <button class="btn btn-danger btn-sm">Delivered</button>
                                                @elseif($value->order_status == 5)
                                                <button class="btn btn-danger btn-sm">Canceled</button>
                                                @elseif($value->order_status == 6)
                                                <button class="btn btn-danger btn-sm">Returned</button>
                                                @endif
                                                </td>
                                                <td><a title="View Order" href="view-order/{{ $value->order_id }}"><i class="fa fa-eye"></i></a></td>
                                            </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('admin/footer');      