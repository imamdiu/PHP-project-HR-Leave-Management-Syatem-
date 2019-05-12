<?php 
	session_start();		
	
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
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
if(isset($_POST) & !empty($_POST)){	
$opass = md5($_POST['opass']);
$npass = $_POST['npass'];
$cnpass = $_POST['cnpass'];

echo "<br> OLD Password :" ." " .$opass ;
echo "<br> New Password :" ." " .$npass ;
echo "<br> Confirm_New_passsd Password :" ." " .$cnpass ;

	$user_name=$_SESSION["user_name"];
	$query=mysql_query("SELECT * from users where user_name='$user_name'");
	$row=mysql_fetch_array($query);
	$user_id=$row['user_id'];
	$pass=$row['pass'];
	
	echo "<br>User ID :" ." " .$user_id;
	echo "<br>Database Password :" ." " .$pass;

	
if ($opass && $npass && $cnpass)
{	
	echo " <br> OK... Field are not empty! ";
	if ($opass == $pass) 
	{	
		echo " <br> OK... Old and New match! ";
		if (strlen($npass) > 2) 
		{	
			echo " <br> Ok... Password is STRONG ";	
			/* if (!preg_match("#[0-9]+#", $npass)) 
            {   
				echo " <br> Ok... Password is STRONG with other'sss";*/ 
				if ($npass == $cnpass) 
				{
					echo " <br> OK.. Neww &&& Confirm_New_passsd are match ";
					$npass=md5($npass);
					
					$UpdateSql = "UPDATE `users` SET pass='$npass'
					
					WHERE user_id=$user_id";
					
					$res = mysqli_query($conn, $UpdateSql);
					if($res){
						//echo '<script>window.location="change_pass.php"</script>';
						echo" <br> OK...Ok.. Password Update Sucessuflly.....thanks";
						} else{
								echo "Failed to update data......";
					}
				
				} else {
						echo "<br> Your Newpasss Confirm_New_passsdon't match!";
				}
			/* } else {
						echo "<br> Password must includess at least one number!";
				} */	
		} else {
				echo "<br> Your password is too short! You need to type a password between 4 and 15 charachters!";
		}
	} else{
			echo "<br> Old andd Neww are not match!";
	}  
}else {
		echo "<br> you have to complete the form!";
}
	}
?>