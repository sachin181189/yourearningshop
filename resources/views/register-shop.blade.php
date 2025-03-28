@include('header');
<style>
    .mb-10
    {
        margin-bottom:10px;
    }
    .alert {
        padding: 8px 14px 13px 30px;
    }
</style>
<div class="container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Store</a></li>
        <li><a href="#"> Request</a></li>
    </ul>
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
        <div class="col-sm-1 hidden-xs column-left">
        </div>
        <div class="col-sm-10" id="content">
            <h2>Store Request</h2>
            <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('send-request') }}">
            @csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-firstname" placeholder="Enter Your Full Name" value="" name="fullname">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-2 control-label">Phone</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input-phone" placeholder="Enter Your Mobile Number" value="" name="phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="input-email" placeholder="Enter Your Email" value="" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="input-lastname" placeholder="Enter Your Address" value="" name="address">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-firstname" class="col-sm-2 control-label">Pincode</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="input-pin" placeholder="Enter Your Pincode" value="" name="pincode">
                                </div>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="buttons">
                    <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
                        <input type="checkbox" value="1" name="agree" checked disabled>
                        &nbsp;
                        <input type="submit" class="btn btn-primary" value="Continue">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-1 hidden-xs column-left">
        </div>
    </div>
</div>
@include('footer');