@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Testimonial List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Testimonial List</li>
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
                    <a class="btn btn-success text-white" href="{{URL::to('admin/add-new-testimonial')}}">Add new Testimonial</a>
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
                                                <th>Role</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp

                                        @foreach($testimonial as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->role }}</td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td><a title="Edit Brand" href="{{URL::to('admin/edit-testimonial')}}/{{ $value->id }}"><i class="fa fa-edit"></i></a>
                                                <a href="#" title="Remove Achivers" onclick="confirmremove('{{ $value->id }}');"><i class="fa fa-times"></i></a>
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
    function confirmremove(testimonialid)
   {
     swal({
            title: "Are you sure ?",
            text: "Want to remove Testimonial !", 
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            removeTestimonial(testimonialid);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function removeTestimonial(testimonialid)
   {
      $.ajax({
             url: "{{ route('remove-testimonial') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "testimonialid":testimonialid
                },
             error: function() {
                swal("OOPS !", "Something is wrong !", "error");
             },
             success: function(data) {
                if(data == "Changed")
                {
                    swal({ title: "",
                         text: "Testimonial removed !",
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