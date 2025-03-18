@include('admin/header');
@include('admin/sidebar');

<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Product Selling Report</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product Selling Report</li>
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
                <div class="alert alert-danger">
                    <div class="row">
                        <div class="col-md-6"><b><h5>Total Selling Price</h5></b></div>
                        <div class="col-md-6">₹{{$total_price}}</div>
                        <div class="col-md-6"><b><h5>Total Qty</h5></b></div>
                        <div class="col-md-6">{{$total_qty}}</div>
                    </div>
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
                                                <th>Product Name</th>
                                                <th>Total Sell (₹)</th>
                                                <th>Total Qty</th>
                                                <th>Vendor</th>
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
                                                @if ($value->total_price == '')
                                                <td>0.00</td>
                                                @else
                                                <td>{{$value->total_price}}</td>
                                                @endif
                                                @if ($value->total_qty == '')
                                                <td>0</td>
                                                @else
                                                <td>{{$value->total_qty}}</td>
                                                @endif
                                                <td>{{ $value->vendor_name }}</td>
                                                <td>{{ $value->color }}</td>
                                                <td>{{ $value->size }} {{ $value->unit }}</td>
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
@include('admin/footer');    
<script>
function cconfirmchangeProductType(productid,status)
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
            changeStatus1(productid,status);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeStatus1(productid,status)
   {
      $.ajax({
             url: "{{ route('changeproductstatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "productid":productid,
                 "status":status
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "User status changed !",
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
   function cconfirmremoveProductType(productid,status)
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
            changeStatus(productid,status);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeStatus(productid,status)
   {
      $.ajax({
             url: "{{ route('removeproductstatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "productid":productid,
                 "status":status
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "User status changed !",
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