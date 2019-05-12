<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once ('header.inc.php');
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];	
	
	require_once ('leave_form_navbar.php');
?>

<!-- Main Navigation Leave content -->


<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">

<div class="col-md-12 col-sm-12 col-xs-12">   
    <div class="box box-body box-success">
		<div class="card-content table-responsive">				
					
		<table id="example1" class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>ID</th>
					<th>User ID</th> 					
					<th>User Name</th> 
					<th>Apply Date</th>
					<?php 
					//only visible to usersss (For edit////Delete User Info)
					 if($_SESSION['user_role_id'] == 1){
					?>
					<th>Accept Application</th>
					<th>Reject Application</th>
					<?php }?>
					<?php 
					//only visible to usersss (For edit////Delete User Info)
					 if($_SESSION['user_role_id'] == 2){
					?>
					<th>View Your Leave Form</th>
					<th>Edit Your Leave Form</th>

					<th>View L. History (US)</th>
					 <?php }?>
					
					<?php 
					//only visible to usersss (For edit////Delete User Info)
					 if($_SESSION['user_role_id'] == 1){
					?>					
					<th>View L. Form (AD)</th>
					<th>View L. History (AD)</th>
					<?php }?>
					<!--th>Action</th-->
					
				</tr>
            </thead>
            <tbody>
				<?php 
					//only visible to usersss (For edit////Delete User Info)
					 if($_SESSION['user_role_id'] == 2){
				 ?>
				<?php
				//$user_id = $_SESSION['user_id'];
				$user_id = $_SESSION['user_id'];
				//$sql = "SELECT	* FROM admin_info_update where user_id='$user_id'";
				$sql = "SELECT	* FROM leave_form_draft where user_id='$user_id'";

				$result = $conn->query($sql);
						  
				while($r = mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<td scope="row"><?php echo $r['id']; ?></td> 
					<td scope="row"><?php echo $r['user_id']; ?></td> 
					<td scope="row"><?php echo $r['user_name']; ?></td>
					<td scope="row"><?php echo $r['todaySdate']; ?></td>					
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button-->
						<a href="leave_form_view.php?user_id=<?php echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> View Your Draft Leave Form (USER)</button></a> 
					</td>	
					<td>
						<a href="leave_form_edit.php?user_id=<?php echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> Edit Your Draft Leave Form (USER)</button></a>
						
					</td>
					
					<td>				
						<a href="leave_history.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-info">Leave History View (user)</button></a>
					</td>
				</tr>
				<?php } ?>
				<?php } ?>
				
				
				<?php 
					//only visible to admin (For Delete User Info)
					 if($_SESSION['user_role_id'] == 1){
				 ?>
				<?php
				//$user_id = $_SESSION['user_id'];
				$user_id = $_SESSION['user_id'];
				//$sql = "SELECT	* FROM admin_info_update where user_id='$user_id'";
				$sql = "SELECT	* FROM leave_form_draft";

				$result = $conn->query($sql);
						  
				while($r = mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<td scope="row"><?php echo $r['id']; ?></td> 
					<td scope="row"><?php echo $r['user_id']; ?></td> 
					<td scope="row"><?php echo $r['user_name']; ?></td> 
					<td scope="row"><?php echo $r['todaySdate']; ?></td> 
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button>
						<a href="leave_form_view.php?user_id=<?php //echo $r['user_id']; ?>"><button type="button"  class="btn btn-info"> View Your Draft Leave Form</button></a-->
						
						<a href="leave_accept.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-success">Accept Application</button></a>
					</td>	
					<td>	
						<a href="leave_form_reject_admin.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-danger">Reject Application</button></a>
						<!--a href="leave_form_edit.php?user_id=<?php //echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> Edit Draft Leave Form (US)</button></a>
						<a href="leave_history_admin.php?user_id=<?php //echo $r['user_id']; ?>"><button type="button"  class="btn btn-info">Leave History (AD)</button></a-->
					</td>
					<td>				
						<a href="leave_form_view_admin.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-info">Leave Form View (AD)</button></a>
					</td>
					<td>				
						<!--a href="personal_info_view_admin.php?user_id=<?php //echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-success">Leave History View (AD)</button></a-->
						<a href="leave_history_admin.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-success">Leave History View (AD)</button></a>
					</td>
				</tr>
				<?php } ?>
				<?php } ?>
            </tbody>
        </table>
				
		</div>							
			
	</div>
</div>


<?php require_once "footer.inc.php"?>
<?php// require_once "leave_form_footer.php"?>
