@include('admin/header')
@include('admin/sidebar')
<div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Business Partner List</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Business Partner List</li>
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
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Aadhar</th>
                                                <th>Connection</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                        $i = 1;
                                        @endphp
                                        @foreach($customerList as $value)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $value->fname }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->phone }}</td>
                                                <td><i class="fa fa-eye" onclick="show_aadhar('{{$value->aadhar_front}}','{{$value->aadhar_back}}','{{ URL::asset("/customer_aadhar" )}}');"></i></td>
                                                <td><i class="fa fa-eye" onclick="show_connection('{{$value->referral_code}}','{{ URL::asset("/user_image" )}}')"></i></td>
                                                @if ($value->status == 1)
                                                <td><button class="btn btn-success btn-sm">Active</td>
                                                @else
                                                <td><button class="btn btn-danger btn-sm">Inactive</td>
                                                @endif
                                                <td>
                                                @if ($value->status == 1)
                                                <i title="Change Status" class="fa fa-toggle-on" onclick="confirmStatus('{{ $value->id }}',0);"></i>
                                                @else
                                                <i title="Change Status" class="fa fa-toggle-on" onclick="confirmStatus('{{ $value->id }}',1);"></i>
                                                @endif
                                                <a href="customer-detail/{{ $value->id }}"><i title="View detail" class="fa fa-eye"></i></a>
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
            
            
<div class="modal" id="connectionModal">
  <div class="modal-dialog" style="max-width: 1000px;">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Connections</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
            <div class="row" id="connection_list">
                
            </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

            
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Aadhar Card</h4>
        <button type="button" class="close" data-dismiss="modal" onclick="hide_aadhar();">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div class="row">
            <div class="col-md-6" id="aadhar_front">
                
            </div>
            <div class="col-md-6" id="aadhar_back">
                
            </div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="hide_aadhar();">Close</button>
      </div>

    </div>
  </div>
</div>
@include('admin/footer') 

<script>
function show_connection(referral_id,base_url)
{
    $.ajax({
         url: "{{ route('show-connection') }}",
         type: 'POST',
         data: {
            "_token": "{{ csrf_token() }}",
             "referral_id":referral_id
            },
         error: function() {
            // swal("OOPS !", "Something is wrong !", "error");
         },
         success: function(data) {
            if(data.length > 0)
            {
                var html = ``;
                $.each(JSON.parse(data), function (key, val) {
                    if(val.image == null)
                    {
                        var image = 'default_user_image.png';
                    }
                    else
                    {
                        var image = val.image;
                    }
                    html += `<div class="col-md-3 text-center">
                        <div class="row" style="border: 1px solid lightgray;">
                            <div class="col-md-12">
                                <img src="`+base_url+`/`+image+`" style="border-radius: 50%;width: 100px;height: 100px;">
                            </div>
                            <div class="col-md-12"><b>`+val.fname+`</b></div>
                        </div>
                    </div>`;
                });
                $("#connection_list").html(html);
                $("#connectionModal").modal('show');
            }
            else
            {
                var html = 'No connection yet';
                $("#connection_list").html(html);
            }
         }
    });
}
function show_aadhar(aadhar_front,aadhar_back,base_url)
{
    var aadhar_front_html = `<img src="`+base_url+"/"+aadhar_front+`" style="width:100%;">`;
    var aadhar_back_html = `<img src="`+base_url+"/"+aadhar_back+`" style="width:100%;">`;
    $("#aadhar_front").html(aadhar_front_html);
    $("#aadhar_back").html(aadhar_back_html);
    $("#myModal").show();
}
function hide_aadhar()
{
    $("#myModal").hide();
}
function confirmStatus(userid,status)
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
            changeStatus(userid,status);
          } else { 
            swal("","Action cancelled!");
          }
        });
   }
   function changeStatus(userid,status)
   {
      $.ajax({
             url: "{{ route('changestatus') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                 "userid":userid,
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