@include('admin/header')
@include('admin/sidebar')
@if( $id != '')
    @foreach($user as $value)
        @php 
            $id = $value['id'];
            $name = $value['name'];
            $email = $value['email'];
            $password = $value['password'];
            $phone = $value['phone'];
            $role = $value['role'];
            $plain_password = $value['plain_password'];
        @endphp
    @endforeach
@else
    @php 
            $id = '';
            $name = '';
            $email = '';
            $password = '';
            $phone = '';
            $role = '';
            $plain_password = '';
    @endphp
@endif

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">User Info</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add new user</li>
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
                            <form class="form-horizontal" action="{{ route('update-user') }}" method="post" enctype="multipart/form-data">
                            @else
                            <form class="form-horizontal" action="{{ route('save-user') }}" method="post" enctype="multipart/form-data">
                            @endif
                            @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="vendor_name" class="col-sm-4 text-right control-label col-form-label">Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="Name Here" value="{{ $name }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="email" class="col-sm-4 text-right control-label col-form-label">Email</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email Here" value="{{ $email }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-4 text-right control-label col-form-label">Phone</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Here" value="{{ $phone }}" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="password" class="col-sm-4 text-right control-label col-form-label">Password</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" id="password" name="password" placeholder="password Here" value="{{ $plain_password }}" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-4 text-right control-label col-form-label">Role</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" name="role">
                                                        <option value="">Role</option>
                                                        <option value="1" @if($role == "1") selected @endif>Admin</option>
                                                        <option value="2" @if($role == "2") selected @endif>Operator</option>
                                                        <option value="3" @if($role == "3") selected @endif>Content Manager</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="hidden_password" value="{{ $password }}">

                                    <div class="row">
                                        <input type="hidden" value="{{$id}}" name="hidden_id" class="form-control">
                                    </div>
                                    <div class="form-group row">
                                        <label for="lname" class="col-sm-2 text-right control-label col-form-label"></label>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
@include('admin/footer')