<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once "header.inc.php";
	//require_once('left_sidebar.php');
	
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];	

	require_once ('leave_form_navbar.php');
?>
<?php

 /* $days=$_POST['days'];//same
echo $days;  */
?>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
   
                <form class="form-horizontal" method="POST">
                    <div class="box-body">
                        <?php
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						$r = mysqli_fetch_assoc($res);
						?>


                        <?php	
						// echo "<br><b>This User ID  &nbsp &nbsp &nbsp &nbsp: </b>" ." ".$r['user_id'];
						// echo "<br><b>This User Name  &nbsp: </b>" ." ".$r['user_name'];
						// echo "<br><b>Todays Date &nbsp &nbsp: </b>" ." ".$r['todaySdate'];
						// echo "<br><b>From Date  &nbsp: </b>" ." ".$r['fromdate'];
						// echo "<br><b>To Date Date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['todate'];
						// echo "<br><b>Total Dayss  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['days'];
						
						// echo "<br><b>Reason Leave  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['reason_leave'];
						// echo "<br><b>Jonin Date  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: </b>" ." ".$r['joindate'];
						
						
						echo "<br>".$user_id = $r['user_id'];
						echo "<br>".$user_name = $r['user_name'];
						
						echo "<br>".$todaySdate = $r['todaySdate'];
						echo "<br>".$fromdate = $r['fromdate'];
						echo "<br>".$days = $r['days'];
						echo "<br>".$todate = $r['todate'];
						
						echo "<br>".$reason_leave = $r['reason_leave'];
						echo "<br>".$joindate = $r['joindate'];
	

						//print_r($days);
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						$r = mysqli_fetch_assoc($res);
						
						//read form users table....
						$r['emp_leave_enjoy'];
						$r['emp_leave_balance'];
					
					$emp_leave_enjoy = $r['emp_leave_enjoy'];
					$emp_leave_enjoy=$emp_leave_enjoy+$days;
					
					$emp_leave_balance = $r['emp_leave_balance'];
					$emp_leave_balance=$emp_leave_balance-$days;
	
					$todate;
					
					$UpdateSql = "UPDATE `users` SET emp_leave_enjoy='$emp_leave_enjoy',emp_leave_balance='$emp_leave_balance', last_leave_date='$todate'
					WHERE user_id=$user_id";
					
						if(mysqli_query($conn,$UpdateSql)){
						?>
						
						<!-- echo '<script>window.location="leave_history_admin.php"</script>'; -->
						<a href="leave_history_admin.php?user_id=<?php echo $r['user_id']; ?>" target=""><button type="button"  class="btn btn-success">Leave History View (AD)</button></a>
					
						<?php
						echo "<br>"."<b>Accept Application Sucessfully.....<b>";
						}else{
						$fmsg = "Failed to update data......";
						}
					

					$insert_user="insert into leave_form_history (user_id,user_name,todaySdate,fromdate,todate,days,reason_leave,joindate) 
					VALUE ('$user_id','$user_name','$todaySdate','$fromdate','$todate','$days','$reason_leave','$joindate')";
					$res_insert = mysqli_query($conn,$insert_user); 
					if($res_insert){
						echo"";
					}else{
						echo "Failed to insert into leave_form_history";
					}
					
					$DelSql = "DELETE FROM `leave_form_draft` WHERE user_id=$user_id";
					$res = mysqli_query($conn, $DelSql);
					if($res){
						//header('location: personal_info_edit.php');
						echo '<script>window.location="leave_balance.php"</script>';
						echo"doneeeeee";
					}else{
						echo "Failed to delete";
					}
					?>


                    </div>

                    <!-- <div class="box-footer">
                        <a href="index.php?target=" _self">
                            <button type="button" class="btn btn-success pull-right">.....Back Your Home Page.....</button></a>
                    </div> -->

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