f<?php 
// $idletime=60;//after 60 seconds the user gets logged out

// if (time()-$_SESSION['timestamp']>$idletime){
//     session_destroy();
//     session_unset();
// }else{
//     $_SESSION['timestamp']=time();
// }

// //on session creation
// $_SESSION['timestamp']=time();



	session_start();
	
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:login.php?lmsg=true');
		exit;
	}		
	
	require_once('../db.inc.php');
	require_once ('header.inc.php');

?>
<section class="content-header">
      <!--h1>
        Dashboard
        <small>Version 2.0</small>
      </h1-->
    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
    </ol>
	  
	<h1>Welcome to <b>Jalalabad Steel Building Ltd.</b></h1>
		<hr>
	<h1>You are login as <b><?php echo ($_SESSION['user_name']); ?></b></h1> 
	
</section>

<!-- Main content -->
<section class="content">
	<!-- Info boxes -->
	<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">CPU Traffic</span>
              <span class="info-box-number">90<small>%</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus "></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Leave Application</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">New Members</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
</section>
<!-- /.content -->


<?php require_once"leave_form_footer.php"; ?>	