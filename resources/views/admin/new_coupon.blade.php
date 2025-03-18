@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($coupon_detail as $value)
        @php 
            $id = $value['id'];
            $coupon_name = $value['coupon_name'];
            $coupon_code = $value['coupon_code'];
            $coupon_val = $value['coupon_val'];
            $coupon_type = $value['coupon_type'];
            $description = $value['description'];
            $for_all_user = $value['for_all_user'];
            $status = $value['status'];
        @endphp
    @endforeach
@else
    @php 
            $id = '';
            $coupon_name = '';
            $coupon_code = '';
            $coupon_val = '';
            $coupon_type = '';
            $description = '';
            $status = '';
            $for_all_user = 0;
    @endphp
@endif
<style>
    span.select2.select2-container.select2-container--default
    {
        width:100%!important;
    }
</style>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Coupon Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new coupon</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Success!</strong> {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
            <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Error!</strong> {{ session('error') }}
                </div>
            @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            @if( $id != '')
                            <form class="form-horizontal" action="{{ route('update-coupon') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-coupon" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="coupon_name" class="col-sm-2 text-right control-label col-form-label">Coupon Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="coupon_name" name="coupon_name" placeholder="Coupon Name Here" value="{{ $coupon_name }}" required>
                                        </div>
                                        <label for="coupon_code" class="col-sm-2 text-right control-label col-form-label">Coupon Code</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="coupon_code" name="coupon_code" placeholder="Coupon Code Here" value="{{ $coupon_code }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Coupon Type</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="coupon_type">
                                            <option value="1" @if($coupon_type == "1") selected @endif>Percent</option>
                                            <option value="0" @if($coupon_type == "0") selected @endif>Flat</option>
                                            </select>
                                        </div>
                                        <label for="coupon_val" class="col-sm-2 text-right control-label col-form-label">Coupon Value</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="coupon_val" name="coupon_val" placeholder="Coupon Value Here" value="{{ $coupon_val }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" rows="5" class="form-control">{{ $description }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="status">
                                            <option value="1" @if($status == "1") selected @endif>Active</option>
                                            <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Coupon For</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="for_all_user" onchange="get_selected_user(this.value);">
                                            <option value="0" @if($for_all_user == "0") selected @endif>All User</option>
                                            <option value="1" @if($for_all_user == "1") selected @endif>Selected User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row  @if($for_all_user == "0") d-none @endif" id="selecteduser">
                                        <label for="brand_name" class="col-sm-2 text-right control-label col-form-label">User List</label>
                                        <div class="col-sm-10">
                                            <select class="form-control select" name="user_id[]" id="user_list" multiple="multiple">
                                                @foreach($user as $p)
                                                    <option value="{{$p->id}}" @if(in_array($p->id, $coupon_user_id)) selected @endif>{{$p->fname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$id}}" name="coupon_id" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer') 
<script>
function get_selected_user(val)
{
    if(val == 0)
    {
        $("#selecteduser").addClass('d-none');
        $("#user_list").val([]).change();
    }
    else
    {
        $("#selecteduser").removeClass('d-none');
    }
}
$(".select").select2({
          placeholder: "Select user",
          allowClear: true
});
</script>