<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once "header.inc.php";
	require_once('left_sidebar.php');
	
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];	
?>
<?php

 /* $days=$_POST['days'];//same
echo $days;  */
?>
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
				  <h3 class="box-title">Accept Leave Application Center</h3>
				<hr>
				<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
				<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
				<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<hr>
				</div>
				
				
				<form class="form-horizontal" method="POST">
					<div class="box-body">
						<?php
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						$r = mysqli_fetch_assoc($res);
						?>
						
						
					<?php	
						echo "<br><b>This User ID  &nbsp &nbsp &nbsp &nbsp: </b>" ." ".$r['user_id'];
						echo "<br><b>This User Name  &nbsp: </b>" ." ".$r['user_name'];
						echo "<br><b>Todays Date &nbsp &nbsp: </b>" ." ".$r['todaySdate'];
						echo "<br><b>From Date  &nbsp: </b>" ." ".$r['fromdate'];
						echo "<br><b>To Date Date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['todate'];
						echo "<br><b>Total Dayss  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['days'];
						
						echo "<br><b>Reason Leave  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['reason_leave'];
						echo "<br><b>Jonin Date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['joindate'];
						
						
						echo "<br>".$user_id = $r['user_id'];
						echo "<br>".$user_name = $r['user_name'];
						
						echo "<br>".$todaySdate = $r['todaySdate'];
						echo "<br>".$fromdate = $r['fromdate'];
						echo "<br>".$days = $r['days'];
						echo "<br>".$todate = $r['todate'];
						
						echo "<br>".$reason_leave = $r['reason_leave'];
						echo "<br>".$joindate = $r['joindate'];
						// echo "<br>".$joindate = $r['joindatesss'];
						// echo "<br>".$joindate = $r['joindatesss'];
						// echo "<br>".$joindate = $r['joindatesss'sss];
						// echo "<br>".$joindate = $r['joindatesss'];


						//print_r($days);
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						$r = mysqli_fetch_assoc($res);
						
						//read form users table....
						echo "<br><br><b>Leave Enjoy &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$r['emp_leave_enjoy'];
						echo "<br><b>Leave Balance  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['emp_leave_balance'];
					
					echo "<br>".$emp_leave_enjoy = $r['emp_leave_enjoy'];
					echo "<br>".$emp_leave_enjoy=$emp_leave_enjoy+$days;
					
					echo "<br>".$emp_leave_balance = $r['emp_leave_balance'];
					echo "<br>".$emp_leave_balance=$emp_leave_balance-$days;
					//echo $days;
					//echo $days[] = $r['days'];
					//echo $r['$emp_leave_balance']=$r['$emp_leave_balance']-$r['days'];
					//echo $emp_leave_balance;
					//echo "<br><b>Update Leave Balance  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$emp_leave_balance;
					//, email='$email'
					
					echo "<br><b> To Date is : ".$todate."<br>";
					
					$UpdateSql = "UPDATE `users` SET emp_leave_enjoy='$emp_leave_enjoy',emp_leave_balance='$emp_leave_balance', last_leave_date='$todate'
					WHERE user_id=$user_id";
					
					if(mysqli_query($conn,$UpdateSql)){
						//echo '<script>window.location="user_index_view.php"</script>';
						echo "<br>"."<b>Accept Application Sucessfully.....thanks<b>";
						}else{
						$fmsg = "Failed to update data......";
						}
					
					/* $todaySdate = $_POST['todaySdate'];
		
					$fromdate = $_POST['fromdate'];
					$todate = $_POST['todate'];	
					$days = $_POST['days'];
					
					$reason_leave =$_POST['reason_leave'];
					$joindate = $_POST['joindate'];	 */
					
					$insert_user="insert into leave_form_history (user_id,user_name,todaySdate,fromdate,todate,days,reason_leave,joindate) 
					VALUE ('$user_id','$user_name','$todaySdate','$fromdate','$todate','$days','$reason_leave','$joindate')";
					$res_insert = mysqli_query($conn,$insert_user); 
					if($res_insert){
						echo"doneeeeee";
					}else{
						echo "Failed to insert into leave_form_history";
					}
					
					$DelSql = "DELETE FROM `leave_form_draft` WHERE user_id=$user_id";
					$res = mysqli_query($conn, $DelSql);
					if($res){
						//header('location: personal_info_edit.php');
						//echo '<script>window.location="leave_form_view.php"</script>';
						echo"doneeeeee";
					}else{
						echo "Failed to delete";
					}
					?>	
						
						
					</div>
					
					<div class="box-footer">
						<!--button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button-->
						<!--button type="submit" class="btn btn-info pull-right">Accept Precess</button-->
					<a href="index.php?target="_self">
					<button type="button"  class="btn btn-success pull-right">.....Back Your Home Page.....</button></a>
					
					</div>
					
				</form>
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->	
	</div>
	<!-- End Row-->
</section>
<?php require_once "leave_form_footer.php"?>	