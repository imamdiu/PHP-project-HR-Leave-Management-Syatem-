<?php require_once "header.login.inc.php"?>


<div class="login-box">
  <div class="login-logo">
    <!--a href="login.php"><b>HR</b>LMS(JSBL)</a-->
	<a href="login.php">
		<img src="admin-theme/dist/img/jsbl_logo_compress_width_6.png" alt="JSBL LOGO"> 
	</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
  
    <p class="login-box-msg">Sign in to start your session</p>
	<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==1){
	?>	
	<p class="login-box-msg text-red">Your email & password are not match with our data base , try again please</p>
	<?php }?>
	
    <form action="loginsubmit.php" method="post">
      
	  <div class="form-group has-feedback 
	  <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==1)
	  
        echo "has-error"; ?>
	 
	  ">
	  
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
	  
      <div class="form-group has-feedback 
	  <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==1)
	  
        echo "has-error"; ?>
	 
	  ">
        <input type="password" class="form-control" placeholder="Password" name="pass">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
    <a href="register.php" class="text-center">Register a new membership</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<?php require_once "footer.login.inc.php"?>