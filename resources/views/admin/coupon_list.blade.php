@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Coupon List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Coupon List</li>
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
                    <a class="btn btn-success text-white" href="add-new-coupon">Add new coupon</a>
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
                                                <th>coupon_name</th>
                                                <th>coupon_code</th>
                                                <th>coupon_type</th>
                                                <th>coupon_val</th>
                                                <th>description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($couponlist as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->coupon_name }}</td>
                                                <td>{{ $value->coupon_code }}</td>
                                                <td>{{ $value->coupon_type }}</td>
                                                <td>{{ $value->coupon_val }}</td>
                                                <td>{{ $value->description }}</td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td>
                                                    <a title="Edit Coupon" href="{{URL::to('admin/edit-coupon')}}/{{ $value->id }}"><i class="fa fa-edit"></i></a>
                                                    <a title="Delete Coupon" href="#" onclick="confirmremove({{ $value->id }});"><i class="fa fa-trash"></i></a>
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
    function confirmremove(couponid)
   {
     swal({
            title: "Are you sure ?",
            text: "Want to remove coupon !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            removeCoupon(couponid);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function removeCoupon(couponid)
   {
      $.ajax({
             url: "{{ route('removecoupon') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "couponid":couponid
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "Coupon removed !",
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