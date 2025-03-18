@include('admin/header');
@include('admin/sidebar');
@if( $id != '')
    @foreach($aadhar as $value)
        @php 
            $hidden_id = $value['id'];
            $aadhar_front = $value['aadhar_front'];
            $aadhar_back = $value['aadhar_back'];
        @endphp
    @endforeach
@else
    @php 
            $hidden_id = '';
            $aadhar_front = '';
            $aadhar_back = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Aadhar Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Aadhar</li>
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
                            <form class="form-horizontal" action="{{ route('update-aadhar') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label for="aadhar_front" class="col-sm-3 text-right control-label col-form-label">Driving Licence Front</label>
                                                    <div class="col-sm-9">
                                                        <input type="file" class="form-control" name="aadhar_front" onchange="readURL(this)">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <img id="proimage" class="proimage" src="{{ URL::asset('/driver_aadhar_image' )}}/{{$aadhar_front}}" alt="your image" style="width: 200px;height: 200px;" />
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="aadhar_back" class="col-sm-3 text-right control-label col-form-label">Driving Licence Back</label>
                                                <div class="col-sm-9">
                                                    <input type="file" class="form-control" name="aadhar_back" onchange="readURL1(this)">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <img id="proimage1" class="proimage" src="{{ URL::asset('/driver_aadhar_image' )}}/{{$aadhar_back}}" alt="your image" style="width: 200px;height: 200px;" />
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidden_id" value="{{$id}}">
                                        <input type="hidden" name="hidden_aadhar_front" value="{{$aadhar_front}}">
                                        <input type="hidden" name="hidden_aadhar_back" value="{{$aadhar_back}}">
                                    </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <a href="{{URL::to('admin/edit-driver')}}/{{$id}}" class="btn btn-success">Back</a>
                                        <button type="submit" class="btn btn-primary">Next</button>
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