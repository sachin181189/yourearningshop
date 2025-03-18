@include('header');
<style>
   .alert {
        padding: 8px 14px 13px 30px;
    }
</style>
<div class="container">
  <div class="row">
    <div class="col-sm-12" id="content">
      <div class="row">
        <div class="col-sm-6">
          <div class="well">
            <p><strong>Already Registered ?</strong></p>
            <a class="btn btn-primary" href="{{URL::to('login')}}">Login</a></div>
        </div>
        <div class="col-sm-6">
          <div class="well">
            <h3>Returning Customer</h3>
            <p><strong>I am a returning customer</strong></p>
            <form method="post" action="{{ route('user-login') }}">
              @csrf
              <div class="form-group">
                <label for="input-email" class="control-label">Email</label>
                <input type="text" class="form-control" id="input-email" placeholder="E-Mail" value="" name="auth_id">
              </div>
              <div class="form-group">
                <label for="input-password" class="control-label">Password</label>
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password">
                <a href="forgetpassword.html">Forgotten Password</a></div>
              <input type="submit" class="btn btn-primary" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer');
