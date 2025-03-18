@include('admin/header');
@include('admin/sidebar');
@foreach($vendor_detail as $value)
        @php 
            $id = $value->id;
            $vendor_name = $value->vendor_name;
            $company_name = $value->company_name;
            $email = $value->email;
            $mobile = $value->mobile;
            $phone = $value->phone;
            $alternate_mobile = $value->alternate_mobile;
            $address = $value->address;
            $city = $value->city;
            $state = $value->state;
            $zip = $value->zip;
            $service_description = $value->service_description;
            $status = $value->status;
            $parent_referral_code = $value->parent_referral_code;
            $is_verified = $value->is_verified;
            $paid_amount = $value->paid_amount;
            
            $is_paid = $value->is_paid;
            $gst_no = $value->gst_no;
            $bank_name = $value->bank_name;
            $account_no = $value->account_no;
            $branch_name = $value->branch_name;
            $ifsc_code = $value->ifsc_code;
            $account_holder = $value->account_holder;
            $account_type = $value->account_type;
            $cheque_image = $value->cheque_image;
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
                                    <li class="breadcrumb-item active" aria-current="page">Vendor Detail</li>
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
                                <div class="col-md-6">Vendor Name</div>
                                <div class="col-md-6">{{$vendor_name}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Company Name</div>
                                <div class="col-md-6">{{$company_name}}</div>
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
                                <div class="col-md-6">Phone</div>
                                <div class="col-md-6">{{$phone}}</div>
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
                                <div class="col-md-6">Service Description</div>
                                <div class="col-md-6">{{$service_description}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Parent Referral_code</div>
                                <div class="col-md-6">{{$parent_referral_code}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Is Verified</div>
                                <div class="col-md-6">@if ($is_verified == 1)
                                <button class="btn btn-success btn-sm">YES</button>
                                @else
                                <button class="btn btn-danger btn-sm">No</button>
                                @endif</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Paid Amount</div>
                                <div class="col-md-6">{{$paid_amount}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Is Paid</div>
                                <div class="col-md-6">@if ($is_paid == 1)
                                <button class="btn btn-success btn-sm">YES</button>
                                @else
                                <button class="btn btn-danger btn-sm">No</button>
                                @endif</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Gst No</div>
                                <div class="col-md-6">{{$gst_no}}</div>
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
                                <div class="col-md-6">Cheque Image</div>
                                <div class="col-md-6"><img src="{{ URL::asset('/cheque_image' )}}/{{ $cheque_image }}" style="height:70px;width:243px;"></div>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Month</th>
                                                <th>Year</th>
                                                <th>Deposit Money Percentage Income</th>
                                                <th>Sales Percentage Income</th>
                                                <th>Total Amount</th>
                                                <th>Note</th>
                                                <th>Created At</th>
                                            </tr>
                                        </thead>
                                    <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($transaction_settlement as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->month }}</td>
                                                <td>{{ $value->year }}</td>
                                                <td>{{ $value->deposit_money_percentage_income }}</td>
                                                <td>{{ $value->sales_percentage_income }}</td>
                                                <td>{{ $value->total_amount }}</td>
                                                <td>{{ $value->note }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                
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