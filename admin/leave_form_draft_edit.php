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

<?php 		 	
	//$user_id = $_SESSION['user_id'];
	
	//if(isset($_POST) & !empty($_POST)){
		
		$todaySdate = $_POST['todaySdate'];
		
		$fromdate = $_POST['fromdate'];
		$todate = $_POST['todate'];	
		$days = $_POST['days'];
		
		$reason_leave =$_POST['reason_leave'];
		$joindate = $_POST['joindate'];		
		
		 
		$update_application = "UPDATE `leave_form_draft` SET todaySdate='$todaySdate', 
													 fromdate='$fromdate',
													 todate='$todate',
													 days='$days', 
													 
													 reason_leave='$reason_leave',
													 joindate='$joindate'

		WHERE user_id=$user_id";
					
		//$res = mysqli_query($conn, $UpdateSql);
		if(mysqli_query($conn,$update_application))
		{
			echo '<script>window.location="leave_form_view.php"</script>';
			echo "Update Leave Application Sucessfully .....yes";		
		}
	else{
		echo "NOooooooooo";
	}
	
?>
 
 
<?php require_once "leave_form_footer.php"?>	
	
		