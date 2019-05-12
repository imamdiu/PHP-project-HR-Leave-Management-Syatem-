<?php 	
		//session_start();		
		if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
		{
			header('location:index.php?lmsg=true');
			exit;
		}	
		include('db.php');
		require_once('../db.inc.php');
		require_once "islogin.inc.php";
		//require_once ('header.inc.php');
		//require_once('left_sidebar.php');
		
		$user_id = $_SESSION['user_id'];
		$user_name = $_SESSION['user_name'];
		
		$upload_dir = 'uploads/';

?>

<?php

 
 ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HRLMS (JSBL) | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="admin-theme/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="admin-theme/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="admin-theme/bower_components/Ionicons/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="admin-theme/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <!-- jvectormap -->
    <link rel="stylesheet" href="admin-theme/bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="admin-theme/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="admin-theme/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- jQuery 3 -->
    <script src="admin-theme/bower_components/jquery/dist/jquery.min.js"></script>

    <!----for Left Sidebar all important links are here----->
    <?php// require_once "left_sidebar.php";?>

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper ">

        <header class="main-header">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <!--a class="" href="#myPage" style="padding-top:5px;"> <img src="admin-theme/dist/img/jsbl_logo_compress_Width.png" alt="JSBL LOGO"> </a><!-- /.navbar-brand -->
                <!-- mini logo for sidebar mini 50x50 pixels     <b>HRLMS</b>(JSBL)   -->
                <span class="logo-mini">
                    <b>HRLMS</b>(JSBL)
                    <!--img src="admin-theme/dist/img/jsbl_faveicon_32_PX_4.jpg" alt="JSBL LOGO"> </a-->
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">

                    <img src="admin-theme/dist/img/jsbl_logo_compress_width_6.png" alt="JSBL LOGO">

                </span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="admin-theme/dist/img/user2-160x160.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="admin-theme/dist/img/user3-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="admin-theme/dist/img/user4-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="admin-theme/dist/img/user3-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="admin-theme/dist/img/user4-128x128.jpg" class="img-circle"
                                                        alt="User Image">
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here
                                                that may not fit into the
                                                page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                                                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                        role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                        aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <?php
					$sql = "select * from users where user_id = '$user_id'";
					$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_assoc($result)){
				?>
                                <img src="<?php echo $upload_dir.$row['profile_image'] ?>" class="user-image" alt="Image">

                                <!--img src="admin-theme/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"-->
                                <span class="hidden-xs">
                                    <?php echo ($_SESSION['user_name']); ?></span>
                            </a>

                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">

                                    <img src="<?php echo $upload_dir.$row['profile_image'] ?>" class="img-circle" alt="User Image">

                                    <p>
                                        <?php echo ($_SESSION['user_name']); ?> - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>

                                <?php
					  }
					}
                ?>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="row">
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Followers</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Sales</a>
                                        </div>
                                        <div class="col-xs-4 text-center">
                                            <a href="#">Friends</a>
                                        </div>
                                    </div>
                                    <!-- /.row -->
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <!-- <a href="change_password_index.php" target="_Blank" class="btn btn-default btn-flat">Preferences</a>
                                        -->
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Preferences</button>
                                    </div>
                                    <div class="pull-right">
                                        <a href="logout.php" type="button" class="btn btn-success">Sign out</a>
                                    </div>
                                </li>


                                <!-- Trigger the modal with a button -->
                                <!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open
                                        Modal</button> -->



                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Update Your Password</h4>
                    </div>
                    <div class="modal-body">
                        
                        <form class="form-horizontal" action="change_pass_submit.php" method="POST">
                            <div class="box-body">

                                <div class="form-group">
                                    <label for="opass" class="col-sm-4 control-label">Old Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="opass" class="form-control" id="opass" placeholder="Old Password"
                                            require="require" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="npass" class="col-sm-4 control-label">New Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="npass" class="form-control" id="npass" placeholder="New Password"
                                            require="require" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cnpass" class="col-sm-4 control-label">Confirm Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" name="cnpass" class="form-control" id="cnpass"
                                            placeholder="Confirm Password" require="require" />
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer">
                                <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
                                <button type="submit" class="btn btn-info pull-right" name="submit">Update Password</button>
                                <!--input type="submit" name="submit"-->
                            </div>

                        </form>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <aside class="main-sidebar ">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <!--li class="active treeview menu-open"-->

                    <li class="active menu-open">

                        <br>
                        <a href="index.php">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                        <a href="chatting_users.php">
                            <i class="fa fa-dashboard"></i> <span>Cahting Option</span>
                        </a>
                        <?php 
  //only visible to employee
  if($_SESSION['user_role_id'] == 2){
?>
                        <a href="user_index_view.php">
                            <i class="fa fa-dashboard"></i> <span>View User Info</span>
                            <!--li><a href="user_index_view.php"><i class="fa fa-circle-o"></i> See Users Info Details</a></li-->
                        </a>
                        <?php }?>

                        <!-- <a href="change_pass.php">
                            <i class="fa fa-dashboard"></i> <span>Password Change</span>
                        </a> -->
                        <!--a href="personal_info_view.php">
						<i class="fa fa-dashboard"></i> <span>Profile</span>
					</a-->
                        <a href="personal_info_view.php">
                            <i class="fa fa-dashboard"></i> <span>View Your Profile</span>
                        </a>


                        <?php
					$sql = "select * from users where user_id = '$user_id'";
					$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_assoc($result)){
				?>
                        <a href="personal_info_edit.php?user_id=<?php echo $row['user_id']; ?>">
                            <i class="fa fa-dashboard"></i> <span>Update Your Profile</span>
                        </a>
                        <?php
					  }
					}
                ?>
                    </li>

                    <?php 
                    //only visible to employee
                    if($_SESSION['user_role_id'] == 1 || $_SESSION['user_role_id'] == 2){
                    ?>
                    <li>
                        <a href="leave_form.php?user_id=<?php echo $row['user_id']; ?>">
                            <i class="fa fa-dashboard"></i> <span>Apply For Leave</span>
                        </a>
                    </li>
                    <?php }?>



                    <?php 
                    //only visible to admin (For Delete User Info)
                    if($_SESSION['user_role_id'] == 1){
                    ?>

                    <li>
                        <a href="leave_balance.php?user_id=<?php echo $row['user_id']; ?>">
                            <i class="fa fa-dashboard"></i> <span>All Leave Info (Admin)</span>
                        </a>
                    </li>
                    <li>
                        <a href="user_index_view.php">
                            <i class="fa fa-dashboard"></i> <span>All User Info (Admin)</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>View/Edit All Profile</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>

                        <ul class="treeview-menu">
                            <!--li><a href="personal_info_index.php"><i class="fa fa-circle-o"></i> Personal Info Update</a></li-->
                            <li><a href="personal_info_view_admin.php"><i class="fa fa-circle-o"></i> Personal Info
                                </a></li>
                            <!--li><a href="personal_info_edit.php"><i class="fa fa-circle-o"></i> Personal Edit</a></li-->

                            <!--li><a href="contact_info_index.php"><i class="fa fa-circle-o"></i> Contact/Address Update</a></li-->
                            <li><a href="contact_info_view_admin.php"><i class="fa fa-circle-o"></i> Contact Info </a></li>
                            <!--li><a href="contact_info_edit.php"><i class="fa fa-circle-o"></i> Contact/Address Edit </a></li-->

                            <li><a href="educational_info_view_admin.php"><i class="fa fa-circle-o"></i> Education Info</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Training</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Employment</a></li>
                            <li><a href="profile_image_view_admin.php"><i class="fa fa-circle-o"></i> Profile Image</a></li>
                        </ul>
                    </li>

                    <!-- <li class="treeview">
                        <a href="#">
                            <i class="fa fa-pie-chart"></i>
                            <span>View/Edit All Leave</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <--li><a href="user_index_view2.php" target="_blank"><i class="fa fa-circle-o"></i> See User INFO</a></li>
                            <li><a href="leave_balance.php" target="_blank"><i class="fa fa-circle-o"></i> See Your
                                    Leave Balance</a></li>
                            <li><a href="leave_history.php" target="_blank"><i class="fa fa-circle-o"></i> See Your
                                    Leave History</a></li>
                            <li><a href="leave_form_draft_view.php" target="_blank"><i class="fa fa-circle-o"></i>
                                    Draft Leave Form View</a></li>
                            <--li><a href="user_index_view_leave_form.php" target="_blank"><i class="fa fa-circle-o"></i> User Index Draft Leave Form View</a></li->
                            <li><a href="leave_for_apply.php" target="_blank"><i class="fa fa-circle-o"></i> Apply For
                                    Leave</a></li>
                        </ul>
                    </li> -->


                    <?php } ?>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">