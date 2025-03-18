@include('header')
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
            <h3>New Business Partner</h3>
            <p><strong>Register Account</strong></p>
            <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
            <a class="btn btn-primary" href="{{URL::to('register')}}">Continue</a></div>
        </div>
        <div class="col-sm-6">
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
          <div class="well">
            <h3>Business Partner</h3>
            <p><strong>I am a business partner</strong></p>
            <form method="post" action="{{ route('user-login') }}" autocomplete="off">
              @csrf
              <div class="form-group">
                <label for="input-email" class="control-label">Mobile</label>
                <input type="text" class="form-control" id="input-email" placeholder="Mobile" value="" name="auth_id" autocomplete="off">
              </div>
              <div class="form-group">
                <label for="input-password" class="control-label">Password</label>
                <input type="password" class="form-control" id="input-password" placeholder="Password" value="" name="password" autocomplete="new-password">
                <a href="{{ route('forget-password') }}">Forgotten Password</a></div>
              <input type="submit" class="btn btn-primary" value="Login">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@include('footer')
