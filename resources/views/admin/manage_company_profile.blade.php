@include('admin/header')
@include('admin/sidebar')
    @foreach($company_profile as $value)
        @php 
            $id = $value['id'];
            $company_name = $value['company_name'];
            $logo = $value['logo'];
            $address = $value['address'];
            $conatct_no = $value['conatct_no'];
            $email = $value['email'];
            $phone = $value['phone'];
            $aatmnirbhar_mahila_no = $value['aatmnirbhar_mahila_no'];
            $whatsapp_no = $value['whatsapp_no'];
            $facebook_link = $value['facebook_link'];
            $twitter_link = $value['twitter_link'];
            $linkdin_link = $value['linkdin_link'];
        @endphp
    @endforeach
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Company Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update company </li>
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
                            <form class="form-horizontal" action="{{ route('update-company-profile') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="company_name" class="col-sm-2 text-right control-label col-form-label">Company Description</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="company_name" name="company_name" rows="5" placeholder="Company Name Here">{{ $company_name }}</textarea>
                                        </div>
                                    </div>
                                    <!--<div class="form-group row">-->
                                    <!--    <label for="address" class="col-sm-2 text-right control-label col-form-label">Address</label>-->
                                    <!--    <div class="col-sm-10">-->
                                    <!--        <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" value="{{ $address }}">-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 text-right control-label col-form-label">Address</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="address" name="address" placeholder="Address Here" value="{{ $address }}">
                                        </div>
                                        <label for="conatct_no" class="col-sm-2 text-right control-label col-form-label">Toll Free No</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="conatct_no" name="conatct_no" placeholder="Contact No Here" value="{{ $conatct_no }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="conatct_no" class="col-sm-2 text-right control-label col-form-label">Aatam Nirhar Mahila No</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="aatmnirbhar_mahila_no" name="aatmnirbhar_mahila_no" placeholder="Aatmnirbhar Mahila Contact No Here" value="{{ $aatmnirbhar_mahila_no }}">
                                        </div>
                                        <label for="email" class="col-sm-2 text-right control-label col-form-label">Email</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Email Here" value="{{ $email }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 text-right control-label col-form-label">WhatsApp No 1</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="WhatsApp No Here" value="{{ $phone }}">
                                        </div>
                                        <label for="whatsapp_no" class="col-sm-2 text-right control-label col-form-label">WhatsApp No 2</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" placeholder="WhatsApp No Here" value="{{ $whatsapp_no }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="facebook_link" class="col-sm-2 text-right control-label col-form-label">Facebook Link</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="facebook_link" name="facebook_link" placeholder="Facebook Link Here" value="{{ $facebook_link }}">
                                        </div>
                                        <label for="twitter_link" class="col-sm-2 text-right control-label col-form-label">Twitter Link</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="twitter_link" name="twitter_link" placeholder="Twitter Link Here" value="{{ $twitter_link }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="linkdin_link" class="col-sm-2 text-right control-label col-form-label">Linkdin Link</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="linkdin_link" name="linkdin_link" placeholder="Linkdin Here" value="{{ $linkdin_link }}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file" class="form-control" onchange="readURL(this)">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4" id="imageDiv">
                                            <img id="proimage" class="proimage" src="{{ URL::asset('/company_image' )}}/{{$logo}}" alt="your image" style="width: 200px;height: 200px;" />
                                        </div>
                                    </div>
                                    <input type="hidden" value="{{$logo}}" name="hidden_image" class="form-control">
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control"> 
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Update</button>
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