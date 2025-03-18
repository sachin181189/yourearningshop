<!DOCTYPE html>
<html dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/assets/images/favicon.png')}}">
    <title>YES vendor login</title>
    <link href="{{asset('admin/dist/css/style.min.css') }}" rel="stylesheet">
</head>
<style>
    .bg-dark {
    background-color: #343a403b!important;
}
</style>
<body>
    <div class="main-wrapper">
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark" style="background: linear-gradient(358deg, #9abdeb, #80f9b7);height: 100vh!important;">
            <div class="auth-box bg-dark border-top border-secondary" style="background-color: #0000003b!important;">
                <div id="loginform">
                @if (session('msg'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong> {{ session('msg') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success !</strong> {{ session('success') }}
                    </div>
                @endif
                    <!-- <div class="text-center p-t-20 p-b-20">
                        <span class="db"><img src="{{asset('assets/images/logo.png')}}" alt="logo" /></span>
                    </div> -->
                    <div class="text-center p-t-20 p-b-20">
                        <span class="db p-l-20"><img src="https://yourearningshop.com/public/logo/logo.png" alt="logo" style="width:200px;" /></span>
                    </div>
                    <form class="form-horizontal m-t-20" id="loginform" method="POST" action="{{ route('driver/login') }}">
                    @csrf
                        <div class="row p-b-30">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-success text-white" id="basic-addon1" style="background-color: #9abdeb!important;"><i class="ti-user"></i></span>
                                    </div>
                                    <input type="tel" class="form-control form-control-lg" name="mobile" placeholder="Mobile" aria-label="Mobile" aria-describedby="basic-addon1" required="">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-warning text-white" id="basic-addon2" style="background-color: #9abdeb!important;"><i class="ti-pencil"></i></span>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" name="password" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1" required="">
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-secondary">
                            <div class="col-12">
                                <div class="form-group">
                                    <div class="p-t-20">
                                        <button class="btn float-right" type="submit" style="background-color: #b6d6ff!important;">Login</button>
                                    </div>
                                </div>
                            </div>
                            <span class="text-white">Forget Password ? </span> <a href="{{URL::to('driver/forget-password')}}"> Click Here</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('admin/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script>

    $('[data-toggle="tooltip"]').tooltip();
    $(".preloader").fadeOut();
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $('#to-login').click(function(){
        
        $("#recoverform").hide();
        $("#loginform").fadeIn();
    });
    </script>

</body>

</html>