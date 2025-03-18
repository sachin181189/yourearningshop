@include('admin/header')
@include('admin/sidebar')
    @foreach($income_plan as $value)
        @php 
            $id = $value->id;
            $content = $value->content;
            $image1 = $value->image1;
            $image2 = $value->image2;
            $image3 = $value->image3;
            $image4 = $value->image4;
        @endphp
    @endforeach
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Royality Income Plan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Update Royality Income Plan </li>
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
                            <form class="form-horizontal" action="{{ route('update-income-plan') }}" method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="company_name" class="col-sm-2 text-right control-label col-form-label">Content</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control summernote" id="content" name="content" rows="5" placeholder="Company Name Here">{{ $content }}</textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image1</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file1" class="form-control">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4">
                                            @if($image1 != '')
                                            <img class="proimage" src="{{ URL::asset('/business_plan' )}}/{{$image1}}" alt="your image" style="width: 200px;height: 200px;" />
                                            <a href="remove-plan-image/0/image1/{{$id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image2</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file2" class="form-control">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4">
                                            @if($image2 != '')
                                            <img class="proimage" src="{{ URL::asset('/business_plan' )}}/{{$image2}}" alt="your image" style="width: 200px;height: 200px;" />
                                            <a href="remove-plan-image/0/image2/{{$id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image3</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file3" class="form-control">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4">
                                            @if($image3 != '')
                                            <img class="proimage" src="{{ URL::asset('/business_plan' )}}/{{$image3}}" alt="your image" style="width: 200px;height: 200px;" />
                                            <a href="remove-plan-image/0/image3/{{$id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label">Image4</label>
                                        <div class="col-sm-4">
                                            <input type="file" name="file4" class="form-control">
                                        </div>
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <div class="col-sm-4">
                                            @if($image4 != '')
                                            <img class="proimage" src="{{ URL::asset('/business_plan' )}}/{{$image4}}" alt="your image" style="width: 200px;height: 200px;" />
                                            <a href="remove-plan-image/0/image4/{{$id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <input type="hidden" value="{{$image1}}" name="image1" class="form-control">
                                    <input type="hidden" value="{{$image2}}" name="image2" class="form-control">
                                    <input type="hidden" value="{{$image3}}" name="image3" class="form-control">
                                    <input type="hidden" value="{{$image4}}" name="image4" class="form-control">
                                    
                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control"> 
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="col-sm-2 btn btn-primary">Update</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
@include('admin/footer')    