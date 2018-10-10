<!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h2>Login or <a href="register.html">Register</a></h2>
            <p class="large">Use social accounts</p>
            <div class="social-login">
            	<a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
            	<a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
            	<a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
            </div>
          </div>
          <div class="modal-body">
          <form class="login-form" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group group">
            	<label for="log-email">Email</label>
              <input type="email" class="form-control" name="email" id="log-email" placeholder="Enter your email" required value="{{ old('email') }}">
              @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              <a class="help-link" href="#">Forgot email?</a>
            </div>
            <div class="form-group group">
            	<label for="log-password">Password</label>
              <input type="text" class="form-control" name="password" id="log-password" placeholder="Enter your password" required>
              @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              <a class="help-link" href="#">Forgot password?</a>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember me</label>
            </div>
            <input class="btn btn-success" type="submit" value="Login">
          </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
