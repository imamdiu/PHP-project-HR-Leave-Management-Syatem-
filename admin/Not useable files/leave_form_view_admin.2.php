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
	/* $user_id = $_GET['user_id'];
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$ree = mysqli_fetch_assoc($res); */	
?>

<head>
		<title>Leave Application Submit</title>
		
		<style>
		
		
.container {
	width:75%;
	margin:auto;
}
		
.table {
    width: 100%;
    margin-bottom: 20px;
}	

.table-striped tbody > tr:nth-child(odd) > td,
.table-striped tbody > tr:nth-child(odd) > th {
    background-color: #f9f9f9;
}

@media print {
	#print{
		display:none;
	}
}


#print {
	 /* width: 200px;
    height: 30px;
    font-size: 18px;
    background: #2E9AFE;
	color:white;
    border-radius: 4px;
	margin-left:28px;
	margin-top:20px;
	margin-bottom:28px; */
	
	cursor:hand; 
}
	
</style>
<script>
function printPage() {
    window.print();
}
function acceptPage() {
	
    
}

</script>
		
</head>	

<div style = "margin-left:30px; margin-top:0px;">	
			<span style = "margin-left:60px; margin-top: 50px;padding-top:30px;" >
				<img src="admin-theme/dist/img/jsbl_logo_compress_width_6.png" alt="JSBL LOGO"> 
			</span>
		</div>	
		<div align="right">
		<b style="color:blue;">Submited Date:</b>
		<?php include('current-date.php'); ?>
        </div>			
		<br/>	
		
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
				<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
				<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
				<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<hr>
        
				<h3 class="box-title">View Your Leave Info</h3>
				<hr>
				</div>
				<form class="form-horizontal" method="POST">
					   
					
					<div class="box-body">
						<?php
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						
						$ree = mysqli_fetch_assoc($res);
						
						echo "<b>This USer ID : </b>" ." ".$ree['user_id'];
						echo "<br><b>This USer Name : </b>" ." ".$ree['user_name'];
						
						echo "<br><br><b>This USer Email : </b>" ." ".$ree['email'];
						
						//echo "<br><b>This USer Name : </b>" ." ".$ree['user_name'];
						echo "<br><b>This USer Department : </b>" ." ".$ree['department'];
						echo "<br><b>This USer Designation : </b>" ." ".$ree['designation'];
						
						//read form users table....
						echo "<br><br><b>Leave Enjoy &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$ree['emp_leave_enjoy'];
						echo "<br><b>Leave Balance &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$ree['emp_leave_balance'];
						echo "<br><b>Last Leave Date &nbsp&nbsp: </b>" ." ".$ree['last_leave_date'];
							/* echo "<br><b>Department &nbsp&nbsp: </b>" ." ".$ree['department'];
							echo "<br><b>Designation &nbsp&nbsp: </b>" ." ".$ree['designation']; */
						?>
						<hr>
						<?php
						$sql = "SELECT * FROM updatee_personal_info  WHERE user_id = '$user_id'";
						$result = $conn->query($sql);
						$row = mysqli_fetch_assoc($result);
						echo "<br><b>Full Name &nbsp &nbsp &nbsp  &nbsp: </b>" . $row['fname'] . " ". $row['lname']. '<br>';
						
							/* $SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
							$res = mysqli_query($conn, $SelSql);
							$ree = mysqli_fetch_assoc($res);
							echo "<br><b>Department &nbsp&nbsp: </b>" ." ".$ree['department'];
							echo "<br><b>Designation &nbsp&nbsp: </b>" ." ".$ree['designation']; */
						
						//echo "<br><br><b>Today's Date : </b>" ." ".$rd['todaySdate'];
						//echo "<br><b>From Date &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$rd['fromdate'];
						?>
						<hr>
						
						<?php
						
						$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res_draft = mysqli_query($conn, $SelSql);
						$rd = mysqli_fetch_assoc($res_draft);
						
						echo "<br><br><b>This USer ID : </b>" ." ".$rd['user_id'];
						echo "<br><b>This USer NAme : </b>" ." ".$rd['user_name'];
						
						echo "<br><br><b>Today's Date : </b>" ." ".$rd['todaySdate'];
						echo "<br><b>From Date &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$rd['fromdate'];
						echo "<br><b>To Date Date  &nbsp: </b>" ." ".$rd['todate'];
						echo "<br><b>Total Dayss  &nbsp: </b>" ." ".$rd['days'];
						echo "<br><b>Join Date &nbsp&nbsp &nbsp&nbsp : </b>" ." ".$rd['joindate'];
						echo "<br><b>Reason &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$rd['reason_leave'];
						echo "<br> <br>";
						?>
						
						<!--div class="form-group">
							<label for="user_name" class="col-sm-2 control-label">User Name</label>
							<div class="col-sm-10">
								<input type="text" name="user_name"  class="form-control" id="user_name" value="<?php //echo $r['user_name']; ?>" placeholder="Emppyee Name" />
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" name="email"  class="form-control" id="email" value="<?php// echo $r['email']; ?>" placeholder="Email" required="required"/>
							</div>
						</div-->
						
							<td>
								<button type="button" id="print" onclick="printPage()" class="btn btn-info">Print This Application</button>
							</td>
						<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 2){
						?>	
							<td>				
								<a href="leave_form_edit.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-primary">Edit Application</button></a>
							</td>
							<td>				
								<a href="leave_form_delete.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-danger">Delete Application</button></a>
							</td>
						
						<?php } ?>
						<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 1){
						?>
							<td>				
								<a href="leave_accept.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-success">Accept Application</button></a>
							</td>
							<td>				
								<a href="leave_form_reject_admin.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-danger">Reject Application</button></a>
							</td>
						<?php } ?>
					</div>
					
					<!--div class="box-footer">
						<button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
						<button type="submit" class="btn btn-info pull-right">Update</button>
					</div-->
					
				</form>
				<!-- /.box-body -->
			</div>
          <!-- /.box -->


		  <?php
						
						$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res_draft = mysqli_query($conn, $SelSql);
						$rd = mysqli_fetch_assoc($res_draft);
						
						echo "<br><br><b>This USer ID : </b>" ." ".$rd['user_id'];
						echo "<br><b>This USer NAme : </b>" ." ".$rd['user_name'];
						
						echo "<br><br><b>Today's Date : </b>" ." ".$rd['todaySdate'];
						echo "<br><b>From Date &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$rd['fromdate'];
						echo "<br><b>To Date Date  &nbsp: </b>" ." ".$rd['todate'];
						echo "<br><b>Total Dayss  &nbsp: </b>" ." ".$rd['days'];
						echo "<br><b>Join Date &nbsp&nbsp &nbsp&nbsp : </b>" ." ".$rd['joindate'];
						echo "<br><b>Reason &nbsp&nbsp&nbsp &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$rd['reason_leave'];
						echo "<br> <br>";
						?>
        </div>
        <!-- /.col (right) -col-md-6----->	

		<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="row">
                                    <table style="border:0;" class="table ">
                                        <tbody>
                                            <div class=" text-center">
                                                <h5 class="box-title"><strong>Leave Details</strong></h5>

                                                <tr>
                                                    <td>
                                                        <?php echo "<b>From Date <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['fromdate']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>To Date <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['todate']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Total Days <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['days']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Join Date <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['joindate']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="td_add">
                                                        <?php echo "<b>Reason  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['reason_leave']?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Leave Apply Date  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $rd['todaySdate']?>
                                                    </td>
                                                </tr>


                                                <div>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col 666 Right-->
	</div>
	<!-- End Row-->
</section>		


<?php //require_once "footer.inc.php"?>		
<?php require_once "leave_form_footer.php"?>
