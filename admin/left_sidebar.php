<?php 
	//session_start();	
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}			
	require_once('../db.inc.php');
	require_once ('header.inc.php');
	//require_once('left_sidebar.php'); 	

	$upload_dir = 'uploads/';
?>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar ">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image ">
				<?php
					$sql = "select * from users where user_id = '$user_id'";
					$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_assoc($result)){
				?>
				
				<li class="user-header">
					<img src="<?php echo $upload_dir.$row['image'] ?>" height="50"  width="50" class="img-circle" alt="User Image">
				</li>
				
				
				<?php
					  }
					}
                ?>
			</div>
			<div class="pull-left info">
			  <p><?php echo " &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp". ($_SESSION['user_name']); ?></p>
			  <a href="#"><?php echo " &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp ";?> <i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="..Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
					  <i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<!--li class="active treeview menu-open"-->
			
			<li class="active menu-open">
				<a href="index.php">
					<i class="fa fa-dashboard"></i> <span>Dashboard</span>
				</a>
				<a href="chatting_users.php">
					<i class="fa fa-dashboard"></i> <span>Cahting Option</span>
			    </a>
					<a href="user_index_view.php">
						<i class="fa fa-dashboard"></i> <span>View User Info</span>
						<!--li><a href="user_index_view.php"><i class="fa fa-circle-o"></i> See Users Info Details</a></li-->
					</a> 
				<a href="change_pass.php">
					<i class="fa fa-dashboard"></i> <span>Password Change</span>
			    </a>
					<!--a href="personal_info_view.php">
						<i class="fa fa-dashboard"></i> <span>Profile</span>
					</a-->
				<a href="personal_info_view.php">
					<i class="fa fa-dashboard"></i> <span>View Your Profile</span>
				</a> 
			</li>
		   
			<li class="treeview">
				<a href="#">
					<i class="fa fa-pie-chart"></i>
					<span>Update Your Profile</span>
					<span class="pull-right-container">
					   <i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				  
				<ul class="treeview-menu">
					<!--li><a href="personal_info_index.php"><i class="fa fa-circle-o"></i> Personal Info Update</a></li-->
					<li><a href="personal_info_view_admin.php"><i class="fa fa-circle-o"></i> Personal Info View/Update</a></li>
					<!--li><a href="personal_info_edit.php"><i class="fa fa-circle-o"></i> Personal Edit</a></li-->
					
					<!--li><a href="contact_info_index.php"><i class="fa fa-circle-o"></i> Contact/Address Update</a></li-->
					<li><a href="contact_info_view.php"><i class="fa fa-circle-o"></i> Contact Info View/Update</a></li>
					<!--li><a href="contact_info_edit.php"><i class="fa fa-circle-o"></i> Contact/Address Edit </a></li-->
					
					<li><a href="#"><i class="fa fa-circle-o"></i> Education</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> Training</a></li>
					<li><a href="#"><i class="fa fa-circle-o"></i> Employment</a></li>
					<li><a href="profile_image_view.php"><i class="fa fa-circle-o"></i> Profile Image</a></li>
				</ul>
			</li>
			
			
				
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-pie-chart"></i>
				<span>Apply For Leave</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<!--li><a href="user_index_view2.php" target="_blank"><i class="fa fa-circle-o"></i> See User INFO</a></li-->
				<li><a href="leave_balance.php" target="_blank"><i class="fa fa-circle-o"></i> See Your Leave Balance</a></li>
				<li><a href="leave_history.php" target="_blank"><i class="fa fa-circle-o"></i> See Your Leave History</a></li>
				<li><a href="leave_form_draft_view.php" target="_blank"><i class="fa fa-circle-o"></i> Draft Leave Form View</a></li>
				<!--li><a href="user_index_view_leave_form.php" target="_blank"><i class="fa fa-circle-o"></i> User Index Draft Leave Form View</a></li-->
				<li><a href="leave_for_apply.php" target="_blank"><i class="fa fa-circle-o"></i> Apply For Leave</a></li>
			  </ul>       
			</li>
			
		

		<?php 
		//only visible to admin
		if($_SESSION['user_role_id'] == 1){?>
			<li class="treeview">
			  <a href="#">
				<i class="fa fa-pie-chart"></i>
				<span>For Admin Only</span>
				<span class="pull-right-container">
				  <i class="fa fa-angle-left pull-right"></i>
				</span>
			  </a>
			  <ul class="treeview-menu">
				<li><a href="user_index_view.php" target="_blank"><i class="fa fa-circle-o"></i> View Update Emplyee Info (Update)</a></li>
				<li><a href="emplyee_info_index.php" target="_blank"><i class="fa fa-circle-o"></i> Update Emplyee Info</a></li>				
				<li><a href="emplyee_info_view.php" target="_blank"><i class="fa fa-circle-o"></i> View Update Emplyee Info</a></li>
				
				<!--li><a href="user_leave_form.php" target="_blank"><i class="fa fa-circle-o"></i> Update Leave Info</a></li>
				<li><a href="user_leave_form.php" target="_blank"><i class="fa fa-circle-o"></i> Process of Leave</a></li-->
			  </ul>       
			</li>
		<?php } ?>
			
		</ul>
    </section>
    <!-- /.sidebar -->
</aside>
