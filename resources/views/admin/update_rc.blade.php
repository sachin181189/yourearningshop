@include('admin/header');
@include('admin/sidebar');
@if( $id != '')
    @foreach($rcimage as $value)
        @php 
            $hidden_id = $value['id'];
            $rc_image = $value['rc_image'];
            $driver_image = $value['driver_image'];
        @endphp
    @endforeach
@else
    @php 
            $hidden_id = '';
            $rc_image = '';
            $driver_image = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">RC Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update RC</li>
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
                            <form class="form-horizontal" action="{{ route('update-rc') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="rc_image" class="col-sm-3 text-right control-label col-form-label">RC Image</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="rc_image" onchange="readURL(this)">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <img id="proimage" class="proimage" src="{{ URL::asset('/driver_rc_image' )}}/{{$rc_image}}" alt="your image" style="width: 200px;height: 200px;" />
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="driver_image" class="col-sm-3 text-right control-label col-form-label">Driver Image</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="driver_image" onchange="readURL1(this)">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <img id="proimage1" class="proimage" src="{{ URL::asset('/driver_image' )}}/{{$driver_image}}" alt="your image" style="width: 200px;height: 200px;" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidden_id" value="{{$id}}">
                                        <input type="hidden" name="hidden_rc_image" value="{{$rc_image}}">
                                        <input type="hidden" name="hidden_driver_image" value="{{$driver_image}}">
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <a href="{{URL::to('admin/edit-driver-aadhar')}}/{{$id}}" class="btn btn-success">Back</a>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer');     
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#proimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
}
function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#proimage1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
}
</script>