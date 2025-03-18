@include('driver/header');
@include('driver/sidebar');
<style>
    .card-body {
    padding: 0.8rem!important;
}
</style>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Order List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @if(count($order) > 0)
                    @foreach($order as $value)
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12" style="font-weight: bold;margin-bottom: 10px;"><a href="driver-view-order/{{ $value->order_id }}">View Order</a></div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col-6"><h4>{{ $value->fname }} {{ $value->lname }}</h4></div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col-6"><h4>₹{{ $value->grand_total }}</h4></div>
                                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12 col-6"><h4>@if($value->payment_method == '1') Pay On delivery @else Online @endif</h4></div>
                                </div>
                                <p>
                                {{$value->sfname}} {{$value->slname}} , {{$value->address}}
                                {{$value->city}} , {{$value->state}} , {{$value->zip}},{{$value->phone}}
                                </p>
                                
                                @if($value->order_status == 2)
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-6">
                                        
                                        <button class="btn btn-info btn-sm" onclick="cconfirmchangeOrderStatus('{{$value->order_id}}',3,'',{{$value->user_id}});" style="width:100%;">Mark as shipped</button>
                                    </div>
                                    <!-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-6">
                                    <button class="btn btn-danger btn-sm" onclick="cconfirmchangeOrderStatus('{{$value->order_id}}',6);" style="width:100%;">Return Order</button>
                                    </div> -->
                                </div>
                                @endif
                                @if($value->order_status == 3)
                                <div class="row">
                                   
                                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-6">
                                    @if($value->payment_method == 1)
                                        <input type="radio" name="payment_type" value="1" checked> Pay On delivery
                                        <input type="radio" name="payment_type" value="2"> Online
                                    @endif
                                    <button class="btn btn-primary btn-sm" onclick="cconfirmchangeOrderStatus('{{$value->order_id}}',4,'{{$value->payment_method}}',{{$value->user_id}});" style="width:100%;">Mark as delivered</button>
                                    </div>
                                    <!-- <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 col-6">
                                    <button class="btn btn-danger btn-sm" onclick="cconfirmchangeOrderStatus('{{$value->order_id}}',6);" style="width:100%;">Return Order</button>
                                    </div> -->
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row text-center">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 col-12">
                                    <h4>No order available</h4>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
@include('driver/footer');
<script>
function cconfirmchangeOrderStatus(orderid,status,payment_method,user_id)
   {
    var paymenttype = $('input[name="payment_type"]:checked').val();

    if(payment_method == 'online')
    {
        paymenttype = '';
    }
    else
    {
        paymenttype = paymenttype;
    }
     swal({
            title: "Are you sure ?",
            text: "Want to change status !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            changeOrderStatus(orderid,status,paymenttype,user_id);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeOrderStatus(orderid,status,paymenttype,user_id)
   {
       if(paymenttype == undefined || paymenttype == 'undefined')
       {
           paymenttype = '';
       }
      $.ajax({
             url: "{{ route('driver.changeorderstatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "orderid":orderid,
                 "user_id":user_id,
                 "status":status,
                 "payment_via":paymenttype
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