@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($slider as $value)
        @php 
            $id = $value['id'];
            $title = $value['title'];
            $slider_image = $value['slider_image'];
            $status = $value['status'];
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $title = '';
        $slider_image = '';
        $status = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Slider Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new slider</li>
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
                            <form class="form-horizontal" action="{{ route('update-slider') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="save-slider" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 text-right control-label col-form-label">Title</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Title Here" value="{{ $title }}" required>
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" name="status">
                                                <option value="1" @if($status == "1") selected @endif>Active</option>
                                                <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4" id="imageDiv">
                                            <img id="proimage" class="proimage" src="{{ URL::asset('/slider_image')}}/{{$slider_image}}" alt="your image" style="width: 200px;height: 200px;" />
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$slider_image}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer')
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#proimage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
        $("#imageDiv").removeClass('d-none');
}
</script>