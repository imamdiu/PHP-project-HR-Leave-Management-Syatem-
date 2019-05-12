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
	
		$user_id = $_SESSION['user_id'];
		$user_name = $_SESSION['user_name'];

		require_once ('leave_form_navbar.php');
?>

<?php 
		 	
	$user_id = $_SESSION['user_id'];
	//$SelSql = "SELECT * FROM `admin_info_update` WHERE user_id=$user_id";
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST)){
		//$emp_id = mysql_real_escape_string($_POST['emp_id']);		
		$emp_name = mysql_real_escape_string($_POST['emp_name']);
		
		$department = mysql_real_escape_string($_POST['department']);
		$designation = mysql_real_escape_string($_POST['designation']);	
		
		$emp_leave_balance = mysql_real_escape_string($_POST['emp_leave_balance']);
		$last_leave_date = mysql_real_escape_string($_POST['last_leave_date']);		
		
			//echo '<script>window.location="leave_form.php"</script>';
		
	}
	
?>

<!-- Main Navigation Leave content -->
   


<!-- Main content -->
<section class="content">
	<div class="row">
		<form class="form-horizontal" action="leave_form_draft.php" method="POST">

		<div class="col-md-6">
			<div class="box box-primary">
					<div class="box-body">
						
						<div class="form-group">
							<label for="fname" class="col-sm-4 control-label"> Name</label>
							<div class="col-sm-7">
								<?php
								$user_id = $_SESSION['user_id'];
								$sql = "SELECT * FROM updatee_personal_info  WHERE user_id = '$user_id'";
								$result = $conn->query($sql);
								$rr = mysqli_fetch_assoc($result);
								?>
								<input type="text" name="fname" class="form-control"id="fname" value="<?php echo $rr['fname']. " " . $rr['lname']; ?>" placeholder="Name form DB(updatee_personal_info) ..." disabled="disabled"/>
							</div>
						</div>
						<div class="form-group">
							<label for="department" class="col-sm-4 control-label">Department</label>
							<div class="col-sm-7">
							
								 <input type="text" name="department" class="form-control"id="department" value="<?php echo $r['department']; ?>" placeholder="Department form DB(users) ..." disabled="disabled"/>
						
							</div>
						</div>
						<div class="form-group">
							<label for="department" class="col-sm-4 control-label">Designation</label>
							<div class="col-sm-7">
								<input type="text" name="designation" class="form-control"id="designation" value="<?php echo $r['designation']; ?>" placeholder="Designation form DB(users) ..." disabled="disabled"/>
			
							</div>
						</div>
											
						<div class="form-group">
							<label for="todaySdate" class="col-sm-4 control-label"  required="required">Todays Date </label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								   <input type="text" class="form-control pull-right" id="todaySdate" name="todaySdate">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<label for="fromdate" class="col-sm-4 control-label"  required="required">From Date </label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="fromdate" name="fromdate">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<label for="fromdate" class="col-sm-4 control-label"  required="required">To Date </label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="todate" name="todate">
								</div>
							</div>	
						</div>
						
						<div class="form-group">
							<label for="days" class="col-sm-4 control-label"  required="required">Days </label>
							<div class="col-sm-7">
								
								  <input type="text" name="days"  class="form-control input-sm" id="days" readonly="readonly"  placeholder="Days from calculating From Date & To Date" readonly/>
								
							</div>	
						</div>
						<br>


					</div>	
				</div>
			</div>

			<div class="col-md-6">
			<div class="box box-primary">	
				<!-- <form class="form-horizontal" action="leave_form_draft_edit.php" method="POST"> -->

					<div class="box-body">
					<div class="form-group">
							<label for="about_you" class="col-sm-4 control-label">Reason of Leave</label>
							<div class="col-sm-7">	
									<textarea class="form-control" rows="3" name="reason_leave" id="reason_leave"  placeholder="Reason if Leave ..."></textarea>
							</div>
						</div>
						
						
						
						<div class="form-group">
							<label for="joindate" class="col-sm-4 control-label"  required="required">Join Date</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="joindate" name="joindate">
								</div>
							</div>	
						</div>
						
						<div class="form-group">
							<label for="emp_leave_enjoy" class="col-sm-4 control-label">Leave Enjoy</label>
							<div class="col-sm-7">
								<input type="text" name="emp_leave_enjoy"  class="form-control" id="input1" value="<?php echo $r['emp_leave_enjoy']; ?>"placeholder="Leave  Balance form DB(users) ..." disabled="disabled"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="emp_leave_balance" class="col-sm-4 control-label">Leave Balance</label>
							<div class="col-sm-7">
								<input type="text" name="emp_leave_balance"  class="form-control" id="input1" value="<?php echo $r['emp_leave_balance']; ?>"placeholder="Leave  Balance form DB(users) ..." disabled="disabled"/>
							</div>
						</div>
						<div class="form-group">
							<label for="emp_leave_balance" class="col-sm-4 control-label">Last Leave Date</label>
							<div class="col-sm-7">
								 <input type="text" name="last_leave_date"  class="form-control" id="input1" value="<?php echo $r['last_leave_date']; ?>"placeholder="Last Leave Date form DB(users) ..." disabled="disabled"/>
							</div>
						</div>

						<div class="form-group">
						  <div class="col-sm-offset-4 col-sm-7">
							<div class="checkbox">
							  <label>
								<input type="checkbox"> Remember me
							  </label>
							</div>
						  </div>
						</div>

					</div>
					<br>					
				<!-- /.box-body -->
			</div>
          <!-- /.box -->	  
        </div>

		<div class=" col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
			<div class="row">
			<button type="submit" class="btn btn-primary btn-block">Apply for Leave</button>			
			</div>
		</div>
		</form>

	</div>
</section>
			
<?php require_once "leave_form_footer.php"?>	
	
		