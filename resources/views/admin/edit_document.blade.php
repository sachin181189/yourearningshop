@include('admin/header');
@include('admin/sidebar');
@if( $id != '')
    @foreach($document as $value)
        @php 
            $id = $value->id;
            $document_name = $value->document_name;
            $document = $value->document;
            $status = $value->status;
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $document_name = '';
        $document = '';
        $status = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Document Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update document</li>
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
                            <form class="form-horizontal" action="{{ route('update-document') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-3 text-right control-label col-form-label">Document Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="document_name" name="document_name" placeholder="Title Here" value="{{ $document_name }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Status</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="status">
                                            <option value="1" @if($status == "1") selected @endif>Active</option>
                                            <option value="0" @if($status == "0") selected @endif>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">Document</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)">
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$document}}" name="hidden_document" class="form-control">
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    <div class="form-group row" id="imageDiv">
                                        <img src="{{ URL::asset('/document')}}/{{$document}}" style="width:200px; height:200px;" frameborder="0">
                                    </div>
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
        $("#imageDiv").removeClass('d-none');
}
</script>