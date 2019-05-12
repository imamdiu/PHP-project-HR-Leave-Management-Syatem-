<?php
session_start();

if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
{
	header('location:personal_info_index.php?lmsg=true');
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
		<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>

        <table id="example1" class="table table-bordered table-striped">
            <thead>
				<tr>
					
					<th>User ID</th>
					<th>User Name</th>
					
				
					<th>Apply For Leave</th>
					<th>Leave History</th>

					<!--th>Action</th-->
					
				</tr>
            </thead>
            <tbody>
				<?php 
					//All User............)
					 if($_SESSION['user_role_id'] == 2){
				 ?>
				<?php
				//$user_id = $_SESSION['user_id'];
				$user_id = $_SESSION['user_id'];
				//$sql = "SELECT	* FROM admin_info_update where user_id='$user_id'";
				$sql = "SELECT	* FROM users where user_id='$user_id'";

				$result = $conn->query($sql);
						  
				while($r = mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<th scope="row"><?php echo $r['user_id']; ?></th> 
					<th scope="row"><?php echo $r['user_name']; ?></th> 
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button-->
						<a href="leave_form.php?user_id=<?php echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> Yes..! Apply</button></a>
						
						
					
					</td>
					<td>
						<a href="leave_history.php"><button type="button"  class="btn btn-success"> Leave History</button></a>
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
				$sql = "SELECT	* FROM users where user_id='$user_id'";

				$result = $conn->query($sql);
						  
				while($r = mysqli_fetch_assoc($result))
				{
				?>
				<tr>
					<th scope="row"><?php echo $r['user_id']; ?></th> 
					<th scope="row"><?php echo $r['user_name']; ?></th> 
					
					<td>
						<!--button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal<?php// echo $r['id']; ?>">Apply</button-->
						<a href="leave_form.php?user_id=<?php echo $r['user_id']; ?>"><button type="button"  class="btn btn-success"> Yes..! Apply</button></a>
						
						
					
					</td>
					<td>
						<a href="leave_history.php"><button type="button"  class="btn btn-success"> Leave History</button></a>
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

<?php require_once "leave_form_footer.php"?>
