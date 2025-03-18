@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Admin User List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Admin User List</li>
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
                    <a class="btn btn-success text-white" href="add-new-user">Add new user</a>
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
                                                <th>Mobile</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach($userList as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->phone }}</td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td>
                                                @if ($value->status == 1)
                                                <i title="Change Status" class="fa fa-toggle-on" onclick="confirmStatus('{{ $value->id }}',0);"></i>
                                                @else
                                                <i title="Change Status" class="fa fa-toggle-off" onclick="confirmStatus('{{ $value->id }}',1);"></i>
                                                @endif
                                                </i>
                                                <a href="edit-user/{{ $value->id }}"><i title="Change Status" class="fa fa-edit"></i></a>
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
function confirmStatus(id,status)
   {

     swal({
            title: "Are you sure ?",
            text: "Want to change status of this user !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            changeStatus(id,status);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeStatus(id,status)
   {
      $.ajax({
             url: "{{ route('changeuserstatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "id":id,
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