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
            <h3>Register Account</h3>
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
                <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('save-users') }}" autocomplete="off">
                @csrf
                    <fieldset id="account">
                        <legend>Your Personal Details</legend>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Full Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-firstname" placeholder="First Name" value="" name="fname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">Gender</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="gender">
                                            <option value="Female">Female</option>
                                             <option value="Male">Male</option>
                                        </select>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="input-email" placeholder="Email" value="" name="email" readonly autocomplete="false" onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input_phone" placeholder="Phone" value="" name="phone" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Password</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-password" placeholder="Password" value="" name="password" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">Confirm Password</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control" id="input-confirm" placeholder="Password Confirm" value="" name="confirm_password" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Referred By</label>
                                    <div class="col-sm-9">
                                        @if(isset($_GET['r']) && $_GET['r'] != '')
                                        <input type="text" class="form-control" id="input_referral" placeholder="Referred By" value="{{base64_decode($_GET['r'])}}" name="referred_by" onblur="checkReferralCode(this.value)">
                                        @else
                                        <input type="text" class="form-control" id="input_referral" placeholder="Referred By" value="" name="referred_by" onblur="checkReferralCode(this.value)">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row" id="referral_message">
                                    
                                </div>
                            </div>
                        </div>
    
                    </fieldset>
                    <hr>
                    <fieldset id="address">
                        <legend>Your Address</legend>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-address-2" placeholder="Address" value="" name="address" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Flat</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-address-3" placeholder="Flat" value="" name="flat" required>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Area</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-address-4" placeholder="Area" value="" name="area" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Landmark</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-address-6" placeholder="Landmark" value="" name="landmark" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-city" placeholder="City" value="" name="city" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">State</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-state" placeholder="State" value="" name="state" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-lastname" class="col-sm-3 control-label">Zip/Pincode</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="input-postcode" placeholder="Zip/PinCode" value="" name="pincode" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <label for="input-firstname" class="col-sm-3 control-label">Address Type</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="address_type">
                                        <option value="1">Office</option>
                                        <option value="2">Home</option>
                                </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-10">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="buttons">
                        <div class="pull-right">I have read and agree to the <a class="agree" href="#"><b>Privacy Policy</b></a>
                            <input type="checkbox" value="1" name="agree" checked disabled>
                            &nbsp;
                            <input type="submit" class="btn btn-primary" value="Continue">
                        </div>
                    </div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
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
function checkReferralCode(referral_code)
{
        $.ajax({
             url: "{{ route('check-referral') }}",
             type: 'POST',
             data: {
                "_token": "{{ csrf_token() }}",
                'referral_code':referral_code
                },
             error: function() {
             },
             success: function(res) {
                //  alert(res.otp);
                if(res.length > 0)
                {
                    $("#referral_message").html('<label for="input-firstname" class="col-sm-6 control-label text-success">Referral code available</label>');
                }
                else
                {
                   $("#referral_message").html('<label for="input-firstname" class="col-sm-6 control-label text-danger">Invalid referral code</label>'); 
                }
             }
          });
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
             url: "{{ route('send-otp') }}",
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
                    // $.toast({heading: 'Success!',text: 'Otp send',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else
                {
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
}
function verifyOtp()
{
    var mobile = $("#input_mobile").val();
    var otp = $("#input_otp").val();
        $.ajax({
             url: "{{ route('verify-otp') }}",
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
                    // $.toast({heading: 'Success!',text: 'Otp send',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});
                }
                else
                {
                    alert(res.msg);
                    // $.toast({heading: 'Success!',text: 'Something went wrong',position: 'top-center',stack: false,icon: 'success',showHideTransition: 'slide',});

                }
             }
          });
}
</script> 
