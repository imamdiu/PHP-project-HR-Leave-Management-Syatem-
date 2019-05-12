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
	//$department=$_POST['department'];
?>

<?php	
		/* $todaySdate = $_POST['todaySdate'];
	$fromdate = $_POST['fromdate'];
	$todate = $_POST['todate'];	
	$days = $_POST['days'];		
	$joindate = $_POST['joindate'];
	$reason_leave = $_POST['reason_leave']; */
	
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

			<!--p style = "margin-left:30px; margin-top:0px;padd-top:40px font-size:14pt; font-weight:bold;">Leave Application Submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
		-->
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
<div class="box">

    <div class="box-header">
        
    </div>
    <!-- /.box-header -->
	<div class="container testimonial-group">
		<div class="box-body section-title ">

				<p>You are login as Userww ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
				<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
				<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<hr>

			<?php
			$sql = "SELECT * FROM updatee_personal_info  WHERE user_id = '$user_id'";
			$result = $conn->query($sql);
			$row = mysqli_fetch_assoc($result);
			echo "<b>Full Name &nbsp &nbsp &nbsp  &nbsp: </b>" . $row['fname'] . " ". $row['lname']. '<br>';
			
				$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
				$res = mysqli_query($conn, $SelSql);
				$r = mysqli_fetch_assoc($res);
				echo "<br><b>Department &nbsp&nbsp: </b>" ." ".$r['department'];
				echo "<br><b>Designation &nbsp&nbsp: </b>" ." ".$r['designation'];
				
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
			
			//read form users table....
			echo "<br><br><b>Leave Enjoy &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$r['emp_leave_enjoy'];
			echo "<br><b>Leave Balance &nbsp&nbsp &nbsp&nbsp: </b>" ." ".$r['emp_leave_balance'];
			echo "<br><b>Last Leave Date &nbsp&nbsp: </b>" ." ".$r['last_leave_date'];
			?>				
		</div>
		
		<!--button type="submit" id="print" onclick="printPage()">Print Your Form</button-->
	<div style = "margin:20px; padding-top:10px;">
		<td>
			<button type="button" id="print" onclick="printPage()" class="btn btn-info">Print Your Form</button>
		</td>
		<td>				
			<a href="leave_form_edit.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-primary">Edit Application</button></a>
		</td>
		<td>				
			<a href="leave_form_delete.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-danger">Delete Application</button></a>
		</td>
		
		<?php 
			//only visible to admin (For Delete User Info)
			if($_SESSION['user_role_id'] == 1){
		?>
			<td>				
				<a href="leave_accept.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-success">Accept Application</button></a>
			</td>
			<td>				
				<a href="leave_reject.php?user_id=<?php echo $rd['user_id']; ?>" target="_blank"><button type="button"  id="print" class="btn btn-danger">Reject Application</button></a>
			</td>
		<?php } ?>
		
	</div>
	<!--button type="submit" id="accept" onclick="acceptPage()"> Accept Application </button>
		<button type="submit" id="reject" action="reject.php"> Reject Application </button-->
   
   <!-- /.box-body -->
	</div>			
</div>
<!-- /.box -->

<?php require_once "leave_form_footer.php"?>
