@include('admin/header')
@include('admin/sidebar')
<style>
    .table th, .table thead th {
    font-weight: 700!important;
}
.table td, .table th
{
    padding:0.5rem!important;
}
</style>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Business Partner Detail</h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Business Partner Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Customer Detail</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Orders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Earnings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3">Connections</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container-fluid tab-pane active"><br>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                              <tr>
                                <th>Name</th>
                                <td>{{$customer_detail['fname']}} {{$customer_detail['lname']}}</td>
                                <th>Email</th>
                                <td>{{$customer_detail['email']}}</td>
                              </tr>
                              <tr>
                                <th>Address</th>
                                <td>{{$customer_detail['address']}}</td>
                                <th>Flat</th>
                                <td>{{$customer_detail['flat']}}</td>
                              </tr>
                              <tr>
                                <th>Area</th>
                                <td>{{$customer_detail['area']}}</td>
                                <th>Landmark</th>
                                <td>{{$customer_detail['landmark']}}</td>
                              </tr>
                              <tr>
                                <th>City</th>
                                <td>{{$customer_detail['city']}}</td>
                                <th>Sate</th>
                                <td>{{$customer_detail['state']}}</td>
                              </tr>
                              <tr>
                                <th>Zip</th>
                                <td>{{$customer_detail['zip']}}</td>
                                <th>Referral code</th>
                                <td>{{$customer_detail['referral_code']}}</td>
                              </tr>
                             <tr>
                                <th>Parent Referral Code</th>
                                <td>{{$customer_detail['parent_referral_code']}}</td>
                                <th>Status</th>
                                <td>
                                    @if ($customer_detail['status'] == 1)
                                    <button class="btn btn-success btn-sm">Active</button>
                                    @else
                                    <button class="btn btn-danger btn-sm">Inactive</button>
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <th>Image</th>
                                <td><i class="fa fa-eye" onclick="show_image('{{$customer_detail['image']}}' , '{{URL::asset('user_image')}}');"></i></td>
                                <th>Aadhar Front</th>
                                <td><i class="fa fa-eye" onclick="show_image('{{$customer_detail['aadhar_front']}}' , '{{URL::asset('customer_aadhar')}}');"></i></td>
                              </tr>
                              <tr>
                                <th>Aadhar Back</th>
                                <td><i class="fa fa-eye" onclick="show_image('{{$customer_detail['aadhar_front']}}' , '{{URL::asset('customer_aadhar')}}');"></i></td>
                              </tr>
                              
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <b>Shipping Address</b>
            <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table table-bordered zero_config">
                                <thead>
                                  <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Flat</th>
                                    <th>Area</th>
                                    <th>Landmark</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Address Type</th>
                                    <th>Is Default ?</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($customer_address as $ca)
                                      <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$ca->fname}} {{$ca->lname}}</td>
                                        <td>{{$ca->phone}}</td>
                                        <td>{{$ca->email}}</td>
                                        <td>{{$ca->address}}</td>
                                        <td>{{$ca->flat}}</td>
                                        <td>{{$ca->area}}</td>
                                        <td>{{$ca->landmark}}</td>
                                        <td>{{$ca->city}}</td>
                                        <td>{{$ca->state}}</td>
                                        <td>{{$ca->zip}}</td>
                                        <td>
                                            @if ($ca->address_type == 2)
                                                Office
                                            @else
                                                Home
                                            @endif
                                        </td>
                                        <td>
                                            @if ($ca->is_default == 1)
                                            YES
                                            @else
                                            No
                                            @endif
                                        </td>
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
        <div class="row">
            <b>Billing Address</b>
            <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <table class="table table-bordered zero_config">
                                <thead>
                                  <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>City</th>
                                    <th>State</th>
                                    <th>Zip</th>
                                    <th>Is Default ?</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach($billing_address as $ba)
                                      <tr>
                                        <td>{{$i}}</td>
                                        <td>{{$ba->user_name}}</td>
                                        <td>{{$ba->phone}}</td>
                                        <td>{{$ba->email}}</td>
                                        <td>{{$ba->address}}</td>
                                        <td>{{$ba->city}}</td>
                                        <td>{{$ba->state}}</td>
                                        <td>{{$ba->zip}}</td>
                                        <td>
                                            @if ($ba->is_default == 1)
                                            YES
                                            @else
                                            No
                                            @endif
                                        </td>
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
    <div id="menu1" class="container-fluid tab-pane fade"><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero_config">
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
    </div>
    <div id="menu2" class="container-fluid tab-pane fade"><br>
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4>Wallet Amount : {{ $customer_wallet->wallet_amount??0 }}</h4>
                            <h4>YES Amount : {{ $customer_wallet->yes_amount??0 }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="text-align: center;border-bottom: 1px solid lightgray;padding-bottom: 8px;">Earning From Referral User</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero_config">
                                    <thead>
                                        <tr>
                                            <th>SR.</th>
                                            <th>User name</th>
                                            <th>Settlement Date</th>
                                            <th>Settlement Time</th>
                                            <th>Amount</th>
                                            <th>Level</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $i = 1;
                                    @endphp

                                    @foreach($customer_bp_transaction as $cbt)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $cbt->fname }} {{ $cbt->lname }}</td>
                                            <td>{{ $cbt->settlement_date }}</td>
                                            <td>{{ $cbt->settlement_time }}</td>
                                            <td>{{ $cbt->level }}</td>
                                            <td>{{ $cbt->type }}</td>
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
      <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 style="text-align: center;border-bottom: 1px solid lightgray;padding-bottom: 8px;">Earning From Referral Vendor</h5>
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero_config">
                                    <thead>
                                        <tr>
                                            <th>SR.</th>
                                            <th>Vendor name</th>
                                            <th>Settlement Date</th>
                                            <th>Settlement Time</th>
                                            <th>Amount</th>
                                            <th>Level</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @php
                                    $i = 1;
                                    @endphp

                                    @foreach($customer_dp_transaction as $cbt)
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $cbt->vendor_name }}</td>
                                            <td>{{ $cbt->settlement_date }}</td>
                                            <td>{{ $cbt->settlement_time }}</td>
                                            <td>{{ $cbt->level }}</td>
                                            <td>{{ $cbt->type }}</td>
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
    </div>
    <div id="menu3" class="container tab-pane fade"><br>
      <h3>connections</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>

    
    <div class="container-fluid">

    </div>
    
    <!-- Modal -->
  <div class="modal fade" id="imageModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body text-center" id="image">
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
    
</div>
@include('admin/footer') 
<script>

    function show_image(image,url)
    {
        var full_image = url+"/"+image;
        var html = `<img src="`+full_image+`" style="width:200px;">`;
        $("#image").html(html);
        $("#imageModal").modal('show');
    }
</script>