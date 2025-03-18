@include('admin/header')
@include('admin/sidebar')
<style>
  i.fa.fa-check{
    color:green;
  }
  .dropdown-toggle:after{
      display:none!important;
  }
</style>
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Product List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Product List</li>
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
                    <a class="btn btn-success text-white" href="add-new-product">Add new product</a>
                </div>
            </div>
            </div>
            </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered product_list">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Offer Price</th>
                                                <th>Stock</th>
                                                <th>Is Best Seller ?</th>
                                                <th>Is Featured ?</th>
                                                <th>Is Trending</th>
                                                <th>Is Today Deal ?</th>
                                                <th>Status</th>
                                                <th>Action</th>
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
                                                <td>{{ $value->price }}</td>
                                                <td>{{ $value->offer_price }}</td>
                                                <td>{{ $value->stock }}</td>
                                                <td>
                                                @if ($value->is_best_seller == 1)
                                                        <i class="fa fa-check"></i>
                                                      @endif
                                                </td>
                                                <td>
                                                @if ($value->is_featured == 1)
                                                        <i class="fa fa-check"></i>
                                                      @endif
                                                </td>
                                                <td>
                                                @if ($value->is_trending == 1)
                                                        <i class="fa fa-check"></i>
                                                      @endif
                                                </td>
                                                <td>
                                                @if ($value->is_todays_deal == 1)
                                                <i class="fa fa-check"></i>
                                                      @endif
                                                </td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td>
                                                <ul class="dropdown" style="list-style: none;display: flex;padding: 0;">
                                                    <li><a title="View Product Detail" href="product-detail/{{ $value->id }}"><i class="fa fa-eye"></i></a></li>
                                                    <li><a title="Edit Product Detail" href="edit-product/{{ $value->id }}"><i class="fa fa-edit"></i></a></li>
                                                      <li class=""><i class="fa fa-plus dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                      </i>
                                                      <ul class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(56px, 25px, 0px);">
                                                      <li><a class="dropdown-item" href="add-product-gallery/{{ $value->id }}">Add gallery image</a></li>
                                                      
                                                      @if ($value->is_best_seller == 0)
                                                        <li><a class="dropdown-item" href="#" onclick="cconfirmchangeProductType('{{ $value->id }}',1)">Set as best seller</a></li>
                                                      @else
                                                      <li><a class="dropdown-item" href="#" onclick="cconfirmremoveProductType('{{ $value->id }}',1)">Remove from best seller</a></li>
                                                      @endif

                                                      @if ($value->is_trending == 0)
                                                        <li><a class="dropdown-item" href="#" onclick="cconfirmchangeProductType('{{ $value->id }}',2)">Set as trending</a></li>
                                                      @else
                                                      <li><a class="dropdown-item" href="#" onclick="cconfirmremoveProductType('{{ $value->id }}',2)">Remove from trending</a></li>
                                                      @endif

                                                      @if ($value->is_featured == 0)
                                                        <li><a class="dropdown-item" href="#" onclick="cconfirmchangeProductType('{{ $value->id }}',3)">Set as featured</a></li>
                                                      @else
                                                      <li><a class="dropdown-item" href="#" onclick="cconfirmremoveProductType('{{ $value->id }}',3)">Remove from featured</a></li>
                                                      @endif

                                                      @if ($value->is_todays_deal == 0)
                                                        <li><a class="dropdown-item" href="#" onclick="cconfirmchangeProductType('{{ $value->id }}',4)">Set as todays deal</a></li>
                                                      @else
                                                      <li><a class="dropdown-item" href="#" onclick="cconfirmremoveProductType('{{ $value->id }}',4)">Remove from todays deal</a></li>
                                                      @endif
                                                      </ul>
                                                      </li>
                                                    </ul>
                                                </td>
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
@include('admin/footer')
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