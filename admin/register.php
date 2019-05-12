<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="admin-theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin-theme/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="admin-theme/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin-theme/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin-theme/plugins/iCheck/square/blue.css">

  <script src='https://www.google.com/recaptcha/api.js'></script>
  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
	  <div class="register-logo">
		<!--a href="login.php"><b>HR</b>LMS(JSBL)</a-->
		<a href="register.php">
		
			<img src="admin-theme/dist/img/JSBL Tranperent.png" alt="JSBL LOGO" width="250"> 
			
		</a>	
	  </div>

  <div class="register-box-body">
    <p class="login-box-msg"><h4>Register a new membership</h4></p>
	
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==1){
		?>	
		<p class="login-box-msg text-red">Please fill all fil fist, And try again Thnaks....11</p>
		<?php }?>
	
	<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==2){
	?>	
	<p class="login-box-msg text-red">Sorry for same username , And try again Thnaks....22</p>
	<?php }?>
	
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==3){
		?>	
		<p class="login-box-msg text-red">Sorry for same Emailss , And try again Thnaks....33</p>
		<?php }?>
	

			<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==4){
			?>	
			<p class="login-box-msg text-red">Sorry for Password Fill are empty, And try again Thnaks....44</p>
			<?php }?>
	
			
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==7){
		?>	
		<p class="login-box-msg text-red">Name is emapty, And try again Thnaks....777(Empty)</p>
		<?php }?>
		
			<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==71){
			?>	
			<p class="login-box-msg text-red">Please enter valid user name (Caracters & Nombers Only), And try again Thnaks....7171(UserName)</p>
			<?php }?>
			
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==72){
		?>	
		<p class="login-box-msg text-red">Name is is already exist, Please enter new userName Thnaks....7272(Exist)</p>
		<?php }?>
		

		
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==8){
		?>	
		<p class="login-box-msg text-red">Email is emapty, And try again Thnaks....88</p>
		<?php }?>
		
			<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==81){
			?>	
			<p class="login-box-msg text-red">Please enter a valid email address ,Please enther new email Thnaks....8181</p>
			<?php }?>
			
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==82){
		?>	
		<p class="login-box-msg text-red">Email is already exist,Please enther new email Thnaks....8282</p>
		<?php }?>
	  
	   
	   
	   <?php if(isset($_REQUEST['error']) && $_REQUEST['error']==9){
		?>	
		<p class="login-box-msg text-red">Password fil is empty , Please enter password Thnaks....99</p>
		<?php }?>
		
			<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==91){
			?>	
			<p class="login-box-msg text-red">Password must be 2 characters , Please enter strong password again Thnaks....9191</p>
			<?php }?>
	   
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==92){
		?>	
		<p class="login-box-msg text-red">Sorry for Password are not match, And try again Thnaks....9292</p>
		<?php }?>
			
			<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==93){
			?>	
			<p class="login-box-msg text-red">Password must include at least one number!, And try again Thnaks....9393</p>
			<?php }?>
		
		
		<?php if(isset($_REQUEST['error']) && $_REQUEST['error']==99){
		?>	
		<p class="login-box-msg text-red">Please check your are not a robot!!!!!!! .9999</p>
		<?php }?>
	
	
	<form action="registerSubmit.php" method="post">
  
		<div class="form-group has-feedback
		   <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==7 && $_REQUEST['error']==71 && $_REQUEST['error']==72)
			echo "has-error"; ?>
		  ">
			<input type="text" class="form-control" placeholder="User name" name="user_name">
			<span class="glyphicon glyphicon-user form-control-feedback"></span>
		</div>
		  
		<div class="form-group has-feedback
		   <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==8 && $_REQUEST['error']==81 && $_REQUEST['error']==82)
			echo "has-error"; ?>
		  ">
			<input type="email" class="form-control" placeholder="Email" name="email">
			<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
		</div>
		  
		<div class="form-group has-feedback  
		   <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==9 && $_REQUEST['error']==91 && $_REQUEST['error']==93)
			echo "has-error"; ?>
		   ">
			<input type="password" class="form-control" placeholder="Password" name="pass">
			<span class="glyphicon glyphicon-lock form-control-feedback"></span>
		</div>
		  
		<div class="form-group has-feedback
		  <?php if (isset($_REQUEST['error']) && $_REQUEST['error']==92)
			echo "has-error"; ?> 
		  ">
			<input type="password" class="form-control" placeholder="Retype password" name="cpass">
			<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
		</div>
		  
		  <!------For Checking You are robot ot NOT !!!------->
		  <div class="g-recaptcha" data-sitekey="6LcDh2MUAAAAADsVGHFhp9r7Q_RjKodReTU8LF3r
		  "></div>  <br>
		  
		  <div class="row">
			<!-- <div class="col-sm-8 col-xs-8">
			  <div class="checkbox icheck">
				<label>
				  <input type="checkbox"> I agree to the <a href="#">terms</a>
				</label>
			  </div>
			</div> -->
			<!-- /.col -->
			<div class="col-sm-4 col-xs-4 ">
			  <button type="submit"  name="submit" class="btn btn-primary btn-block btn-flat">submit</button>
			</div>
			<!-- /.col -->
		  </div>
	  
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.php" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="admin-theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin-theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="admin-theme/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
