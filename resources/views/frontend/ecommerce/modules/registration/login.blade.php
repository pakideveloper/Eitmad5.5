 <!--Login Modal-->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
            <h2>Login or <a href="#">Registerss</a></h2>
            <p class="large">Use social accounts</p>
            <div class="social-login">
            	<a class="facebook" href="#"><i class="fa fa-facebook-square"></i></a>
            	<a class="google" href="#"><i class="fa fa-google-plus-square"></i></a>
            	<a class="twitter" href="#"><i class="fa fa-twitter-square"></i></a>
            </div>
          </div>
          <div class="modal-body">
          <form class="login-form" method="post" action = "{{route('login')}}">
            <div class="form-group group">
            	<label for="log-email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"  required>
              <a class="help-link" href="#">Forgot email?</a>
            </div>
            <div class="form-group group">
            	<label for="log-password">Password</label>
              <input type="text" class="form-control" name="password" id="password" placeholder="Enter your password" required>
              <a class="help-link" href="#">Forgot password?</a>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="remember"> Remember me</label>
            </div>
            <input class="btn btn-success" type="submit" value="Login">
          </form>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
