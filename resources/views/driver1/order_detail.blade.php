@include('driver/header');
@include('driver/sidebar');
@foreach($order as $value)
        @php 
            $id = $value['id'];
            $order_id = $value['order_id'];
            $coupon_code = $value['coupon_code'];
            $coupon_amount = $value['coupon_amount'];
            $shipping_charge = $value['shipping_charge'];
            $payment_id = $value['payment_id'];
            $sub_total = $value['sub_total'];
            $grand_total = $value['grand_total'];
            $ship_method = $value['ship_method'];
            $order_status = $value['order_status'];
            $payment_status = $value['payment_status'];
            $fname = $value['fname'];
            $lname = $value['lname'];
            $payment_method = $value['payment_method'];
            $order_date = $value['order_date'];

            $sfname = $value['sfname'];
            $slname = $value['slname'];
            $email = $value['email'];
            $phone = $value['phone'];
            $address = $value['address'];
            $city = $value['city'];
            $state = $value['state'];
            $zip = $value['zip'];
            $addr_type = $value['addr_type'];
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
                                    <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                        @if($order_status != 4)
                            <button class="btn btn-success btn-sm" onclick="cconfirmchangeOrderStatus('{{$id}}',4);">Mark as delivered</button>
                            <button class="btn btn-danger btn-sm" onclick="cconfirmchangeOrderStatus('{{$id}}',5);">Cancel Order</button>
                        @else
                        <button class="btn btn-success btn-sm" type="button">Order delivered</button>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Username</div>
                                <div class="col-md-6">{{$fname}} {{$lname}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Order id</div>
                                <div class="col-md-6">{{$order_id}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Grand total</div>
                                <div class="col-md-6">{{$grand_total}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Sub total</div>
                                <div class="col-md-6">{{$sub_total}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Coupon amount</div>
                                <div class="col-md-6">{{$coupon_amount}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Shipping charge</div>
                                <div class="col-md-6">{{$shipping_charge}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Transaction id</div>
                                <div class="col-md-6">{{$payment_id}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Payment method</div>
                                <div class="col-md-6">{{$payment_method}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Shipping address</div>
                                <div class="col-md-6">
                                {{$sfname}} {{$slname}} , {{$email}} , {{$phone}} , {{$address}}
                                {{$city}} , {{$state}} , {{$zip}}
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Order status</div>
                                <div class="col-md-6">
                                @if ($order_status == 1)
                                <button class="btn btn-success btn-sm">Confirmed</button>
                                @elseif($order_status == 2)
                                <button class="btn btn-danger btn-sm">Packed</button>
                                @elseif($order_status == 3)
                                <button class="btn btn-danger btn-sm">Shipped</button>
                                @elseif($order_status == 4)
                                <button class="btn btn-danger btn-sm">Delivered</button>
                                @elseif($order_status == 5)
                                <button class="btn btn-danger btn-sm">Canceled</button>
                                @elseif($order_status == 6)
                                <button class="btn btn-danger btn-sm">Returned</button>
                                @endif
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Payment status</div>
                                <div class="col-md-6">
                                @if ($payment_status == 1)
                                <button class="btn btn-success btn-sm">Paid</button>
                                @elseif($payment_status == 2)
                                <button class="btn btn-danger btn-sm">Failed</button>
                                @elseif($payment_status == 3)
                                <button class="btn btn-danger btn-sm">Refund</button>
                                @endif
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Order date</div>
                                <div class="col-md-6">{{$order_date}}</div>
                            </div>
                            <div class="row" style="padding-bottom: 15px;">
                                <div class="col-md-6">Coupon code</div>
                                <div class="col-md-6">{{$coupon_code}}</div>
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
                                                <th>Product name</th>
                                                <th>Product price</th>
                                                <th>Offer price</th>
                                                <th>Color</th>
                                                <th>Size</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($product as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->product_name }}</td>
                                                <td>{{ $value->product_price }}</td>
                                                <td>{{ $value->offer_price }}</td>
                                                <td>{{ $value->color }}</td>
                                                <td>{{ $value->size }}</td>
                                            </tr>
                                        @php
                                        $i++;
                                        @endphp
                                        @endforeach

                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('driver/footer');      
<script>
function cconfirmchangeOrderStatus(orderid,status)
   {
     swal({
            title: "Are you sure ?",
            text: "Want to change status !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            changeOrderStatus(orderid,status);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeOrderStatus(orderid,status)
   {
      $.ajax({
             url: "{{ route('changeorderstatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "orderid":orderid,
                 "status":status
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "Order status changed !",
                         type: "success"}).then(okay => {
                           if (okay) {
                            location.reload();
                          }
                        });
                }
                  else
                  {
                    swal("", "Something is wrong !", "error");
                  }
             }
          });
   }
</script>