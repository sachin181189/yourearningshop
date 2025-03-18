@include('admin/header');
@include('admin/sidebar');
@if( $id != '')

    @foreach($achivers as $value)
        @php 
            $id = $value->id;
            $user_id = $value->user_id;
            $rank = $value->rank;
            $status = $value->status;
            $about = $value->about;
        @endphp
    @endforeach
@else
    @php 
        $id = '';
        $user_id = '';
        $rank = '';
        $status = '';
        $about = '';
    @endphp
@endif
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Achivers Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new achivers</li>
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
                            <form class="form-horizontal" action="{{ route('update-achivers') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="{{ route('save-achivers') }}" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-3 text-right control-label col-form-label">User</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="user" required>
                                            @foreach($user as $u)
                                            <option value="{{$u->id}}" @if($u->id == $user_id) selected @endif>{{$u->fname}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="fname" class="col-sm-3 text-right control-label col-form-label">Rank</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rank" name="rank" placeholder="User rank" value="{{ $rank }}" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="slug" class="col-sm-3 text-right control-label col-form-label">About</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control summernote" name="about">{{ $about }}</textarea>
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

                                    <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                </div>
                                <div class="border-top">
                                    <div class="card-body">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer');     
