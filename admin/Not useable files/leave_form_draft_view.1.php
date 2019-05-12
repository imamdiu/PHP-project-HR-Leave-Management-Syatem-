<?php
session_start();

if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
{
	header('location:leave_form_draft_view.php?lmsg=true');
	exit;
}
	require_once('../db_update_profile.inc.php');
	require_once "../db.inc.php";
	require_once "header.inc.php";
	require_once('left_sidebar.php');
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];
?>
<?php //require_once "header.inc.php"?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">Apply for Leave</h3>
    </div>
			
    <!-- /.box-header -->
    <div class="box-body">
		<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
		<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
		<p>You are login as User Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
				<tr>
					<th>ID</th>
					<th>User ID</th> 					
					<th>User Name</th> 
					<th>Apply Date</th>
					
					<th>View Your Leave Form</th>
					
					<?php 
					//only visible to usersss (For edit////Delete User Info)
					 if($_SESSION['user_role_id'] == 2){
					?>
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
					<th scope="row"><?php echo $r['id']; ?></th> 
					<th scope="row"><?php echo $r['user_id']; ?></th> 
					<th scope="row"><?php echo $r['user_name']; ?></th>
					<th scope="row"><?php echo $r['todaySdate']; ?></th>					
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button-->
						<a href="leave_form_view.php?user_id=<?php echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> View Your Draft Leave Form (USER)</button></a>
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
					<th scope="row"><?php echo $r['id']; ?></th> 
					<th scope="row"><?php echo $r['user_id']; ?></th> 
					<th scope="row"><?php echo $r['user_name']; ?></th> 
					<th scope="row"><?php echo $r['todaySdate']; ?></th> 
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button>
						<a href="leave_form_view.php?user_id=<?php //echo $r['user_id']; ?>"><button type="button"  class="btn btn-info"> View Your Draft Leave Form</button></a-->
						
						<a href="leave_accept.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-success">Accept Application</button></a>
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
    <!-- /.box-body -->
</div>
<!-- /.box -->

<?php require_once "footer.inc.php"?>
<?php// require_once "leave_form_footer.php"?>
