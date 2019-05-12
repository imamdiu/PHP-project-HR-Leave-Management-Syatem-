<?php
session_start();

if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
{
	header('location:leave_form_view.php?lmsg=true');
	exit;
}
		require_once('../db_update_profile.inc.php');
		require_once "../db.inc.php";
		require_once "header.inc.php";
	
		$user_id = $_SESSION['user_id'];
		$user_name = $_SESSION['user_name'];
?>
<?php
	$user_id = $_SESSION['user_id'];
	//$SelSql = "SELECT * FROM `admin_info_update` WHERE user_id=$user_id";
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	$r = mysqli_fetch_assoc($res);
		
	
	if(isset($_POST) & !empty($_POST)){
		
		$todaySdate = $_POST['todaySdate'];
		$fromdate = $_POST['fromdate'];
		
		$todate = $_POST['todate'];
		$days = mysql_real_escape_string($_POST['days']);
		$reason_leave = mysql_real_escape_string($_POST['reason_leave']);
		$joindate = $_POST['joindate'];
		
			$UpdateSql = "UPDATE `leave_form_draft` 
			SET todaySdate='$todaySdate', fromdate='$fromdate',todate='$todate', days='$days', 
			
			joindate='$joindate',reason_leave='$reason_leave'
			
			WHERE user_id=$user_id";
			
			$res = mysqli_query($conn, $UpdateSql);
			if($res){
				
				//echo '<script>window.location="leave_form_view.php"</script>';
				echo"Update Information Sucessfully.....thanks...........";
				}else{
				echo"Failed to update data......";
			}

	}
?>

<!-- Main Navigation Leave content -->
<?php
$sql = "select * from users where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
?>
<br>
<div class="row">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
		<nav class="navbar navbar-inverse bg-color:green;" id="navbar">
		    <div class="container-fluid " id="navbar">
				<div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
					<ul class="nav navbar-nav">
				
					  <li class="active" style="margin-left:40px;"><a href="leave_form.php?user_id=<?php echo $row['user_id']; ?>">ApplyLeave</a></li>
					  <li><a href="leave_form_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">UpdateLeave</a></li>
					  <li><a href="leave_balance.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveBalance</a></li>
						<li><a href="leave_history.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveHistory</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>

<?php
	}
  }
?>

<!-- Main content -->
<section class="content">
	<div class="row">
	<form class="form-horizontal" action="leave_form_draft_edit.php" method="POST">	
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
						
						<?php
						//get data from leave form draft
						$user_id = $_GET['user_id'];
						$SelSql_draf = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res_draft = mysqli_query($conn, $SelSql_draf);
						$rd = mysqli_fetch_assoc($res_draft);
						?>
						
						<div class="form-group">
							<label for="todaySdate" class="col-sm-4 control-label"  required="required">Todays Date ::</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								   <input type="text" class="form-control pull-right" id="todaySdate" name="todaySdate" value="<?php echo $rd['todaySdate']; ?>">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<label for="fromdate" class="col-sm-4 control-label"  required="required">From Date ::</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="fromdate" name="fromdate" value="<?php echo $rd['fromdate']; ?>">
								</div>
							</div>	
						</div>
						<div class="form-group">
							<label for="fromdate" class="col-sm-4 control-label"  required="required">To Date ::</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="todate" name="todate" value="<?php echo $rd['todate']; ?>">
								</div>
							</div>	
						</div>
						
						<div class="form-group">
							<label for="days" class="col-sm-4 control-label"  required="required">Days ::</label>
							<div class="col-sm-7">
								  <input type="text" name="days"  class="form-control input-sm" id="days" readonly="readonly"  value="<?php echo $rd['days']; ?>" />
							</div>	
						</div>
												
					</div>
					
					<div class="box-footer">
						
					</div>
					
				
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
		  <div class=" col-md-4 col-md-offset-1">
			<!-- <div class="row">
			<button type="submit" class="btn btn-info pull-right">Apply Again for Leave</button>
		     </form>
			</div> -->
		</div>
        </div>
        <!-- /.col (right) -col-md-6----->	
		<div class="col-md-6">
			<div class="box box-primary">	
				<!-- <form class="form-horizontal" action="leave_form_draft_edit.php" method="POST"> -->

					<div class="box-body">
																												
						<div class="form-group">
							<label for="about_you" class="col-sm-4 control-label">Reason of Leave</label>
							<div class="col-sm-7">	
									<textarea class="form-control" rows="5" name="reason_leave" id="reason_leave"  placeholder="Reason if Leave ..."><?php echo $rd['reason_leave']; ?></textarea>
							</div>
						</div>
						
						
						
						<div class="form-group">
							<label for="joindate" class="col-sm-4 control-label"  required="required">Join Date</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="joindate" name="joindate"value="<?php echo $rd['joindate']; ?>">
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
					</div>
					<br>
					
					<div class="box-footer">
						
					</div>
				
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
		  
        </div>

		<!-- <div class=" col-md-6 col-md-offset-3">
			<div class="row">
			<button type="submit" class="btn btn-info pull-right">Apply Again for Leave</button>
		     
			</div>
		</div>
		</form> -->
		<div class=" col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
			<div class="row">
			<button type="submit" class="btn btn-primary btn-block">Apply Again for Leave</button>
			
			
			</div>
		</div>
		</form>

		<!-- <div class=" col-md-6 col-md-offset-3">
			<div class="row">
			<a class="btn btn-primary btn-block"> <span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></a>
	
			</div>
		</div>
		</form>	 -->
	</div>
	<!-- End Row-->
</section>
<?php require_once "leave_form_footer.php"?>	