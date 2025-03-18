@include('header');
<style>
    .mb-10
    {
        margin-bottom:10px;
    }
    .alert {
        padding: 8px 14px 13px 30px;
    }
   #input-email[readonly]
   {
       background:#e9ecef00!important;
   }
</style>
<div class="container mt-5">
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
            <h3>Forget Password</h3>
            <p>If you already have an account with us, please login at the <a href="login">login page</a>.</p>
            <fieldset id="verifymobile">
                    <legend>Verify mobile</legend>
                    <div class="row mb-10">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input_mobile" class="col-sm-3 control-label">Mobile No</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input_mobile" placeholder="Enter mobile no" value="" maxlength="10" minlength="10" onkeypress='validate(event)'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10" id="continuebtn">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input_continue" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <button type="button" class="btn btn-info" onclick="sendOtp();">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 d-none" id="otptextbox">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input_otp" class="col-sm-3 control-label">OTP</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="input_otp" placeholder="Enter otp here">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-10 d-none" id="verifybtndiv">
                        <div class="col-md-6">
                            <div class="row">
                                <label for="input-lastname" class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <button type="button" class="btn btn-info" onclick="verifyOtp();">Verify</button>
                                    <button type="button" class="btn btn-info" onclick="sendOtp();" id="resendbtn">Resend</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <hr>
            <div class="d-none" id="register_form">
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('reset-user-password') }}" autocomplete="off">
                @csrf
                    <fieldset id="account">
                        <legend>Your Password</legend>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-password" placeholder="Password" value="" name="password" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" autocomplete="off" name="confirm_password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                    </fieldset>
                    <hr>
                    <button type="submit" class="btn btn-info">Reset</button>
                </form>
            </div>
        </div>
        <div class="col-sm-1 hidden-xs column-left">
        </div>
    </div>
</div>
@include('footer');

<script type="text/javascript"> 
function validate(evt) 
{
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function sendOtp()
{
    var mobile = $("#input_mobile").val();
    if(mobile.length < 10)
    {
        alert("Invalid mobile no. Minimum 10 digit required");
        return false;
    }
        $.ajax({
             url: "{{ route('send-forget-otp') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                'mobile':mobile
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res.otp);
                if(res.status==200)
                {
                    
                    $("#continuebtn").remove();
                    $("#otptextbox").removeClass("d-none");
                    $("#verifybtndiv").removeClass("d-none");
                    alert(res.msg);
                }
                else
                {
                    alert(res.msg);
                }
             }
          });
}
function verifyOtp()
{
    var mobile = $("#input_mobile").val();
    var otp = $("#input_otp").val();
        $.ajax({
             url: "{{ route('verify-forget-otp') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                'mobile':mobile,
                'otp':otp,
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res);
                if(res.status==200)
                {
                    
                    $("#verifymobile").remove();
                    $("#register_form").removeClass("d-none");
                    $("#input_phone").val(mobile);
                    $("#input_phone").attr('disabled','true');
                    alert(res.msg);
                }
                else
                {
                    alert(res.msg);
                }
             }
          });
}
</script> 
