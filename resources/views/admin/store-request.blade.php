@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Store Request List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Store Request List</li>
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
                            <a class="btn btn-success text-white" href="{{URL::to('admin/add-new-store')}}">Add new Store</a>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile No.</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($storeRequest as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->fullname }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->mobile }}</td>
                                                <td>{{ $value->address }}</td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</button></td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</button></td>
                                                @endif
                                                <td>
                                                    @if ($value->status == 0)
                                                        <button class="btn btn-warning btn-sm" onclick="openForm('{{ $value->email }}','{{ $value->mobile }}','{{ $value->pincode }}','{{ $value->fullname }}')">Approved</button>
                                                        <a title="Delete Store"  onclick="confirmremove('{{ $value->id }}');">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    @else
                                                        <button class="btn btn-success btn-sm">Provided</button>
                                                    @endif
                                                    <a title="Edit Store" href="{{URL::to('admin/edit-store')}}/{{ $value->id }}"><i class="fa fa-edit"></i></a>
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

    <div class="modal fade" id="crediential" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Provide There Login Crediential</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ URL::to('admin/provide-credential') }}" method="POST">
                    @csrf
                    <div class="form-group row">
                            <label for="fullname" class="col-sm-2 text-right text-dark control-label col-form-label">fullname</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="fullname" name="fullname" placeholder="fullname">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 text-right text-dark control-label col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 text-right text-dark control-label col-form-label">Mobile</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 text-right text-dark control-label col-form-label">Pincode</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="pincode" name="pincode" placeholder="Enter Pincode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-sm-2 text-right text-dark control-label col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deposit_amount" class="col-sm-2 text-right text-dark control-label col-form-label">Deposit Amount</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="deposit_amount" name="deposit_amount" placeholder="Deposit Amount">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
<script type="text/javascript">
    function openForm(email,mobile,pincode,fullname){
        $("#crediential").modal("show");
        $('#fullname').val(fullname);
        $('#email').val(email);
        $('#mobile').val(mobile);
        $('#pincode').val(pincode);
    };
</script>

<script>
    function confirmremove(requestId)
   {
     swal({
            title: "Are you sure ?",
            text: "Want to Delete Request !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            removeRequest(requestId);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function removeRequest(requestId)
   {
      $.ajax({
             url: "{{ route('deleteRequest') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "requestId":requestId
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "Request Deleted !",
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