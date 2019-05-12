<?php
/* session_start();

if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
{
	header('location:userID_index.php?lmsg=true');
	exit;
}	

		require_once('../db_update_profile.inc.php');
		require_once "../db.inc.php";
		require_once "header.inc.php";
		require_once('left_sidebar.php'); */
?>

<?php

require_once "../db.inc.php";

$user_name=$_POST['user_name'];//same
$email=$_POST['email'];//same
$pass=$_POST['pass'];//same
$cpass=$_POST['cpass'];//same

 if(isset($_POST['submit'])){
	 
    if(empty($_POST['user_name'])){//here getting result from the post array after submitting the form.
		echo" Sorry username is require";
		header( "location:register.php?error=7");
		newExit();
    }
	
		if(!preg_match("/^[\.0-9a-zA-Z-]{2,9}$/i", $user_name)) { // for english chars + numbers only
			// valid username, alphanumeric & longer than or equals 5 chars						
			echo "Please enter vail username";
			header( "location:register.php?error=71");	
			newExit();			
		}
	
	$sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
	$res_u = mysqli_query($conn, $sql_u);
	 if (mysqli_num_rows($res_u) > 0) {
		
		echo" Sorry username'.$user_name.'is all  ready exist";
		header( "location:register.php?error=72");
		newExit();
	}
		
	
	if(empty($_POST['email'])){//here getting result from the post array after submitting the form.
		echo" Sorry Enail is require";
		header( "location:register.php?error=8");
		newExit();
	}
		if (!preg_match("/^[\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i",$email))
			{
			echo " Your email is not valid........check agin please";
			header( "location:register.php?error=81");
			newExit();
			}
  
	$sql_e = "SELECT * FROM users WHERE email='$email'";
	$res_e = mysqli_query($conn, $sql_e);
	if (mysqli_num_rows($res_e) > 0) {
		
		echo" Sorry Email'.$email.' is all  ready exist";
		header( "location:register.php?error=82");
		newExit();
	}
	

	if(empty($_POST['pass'])){//here getting result from the post array after submitting the form.
		echo" Sorry Password is require";
		header( "location:register.php?error=9");
		newExit();
    }
		/*if(strlen(trim($pass)) != 2)
		{
			 echo"Password must be 2 characters";
			 header( "location:register.php?error=91");
			 newExit();
		}*/
    if($pass!=$cpass){
		 echo 'pass not match';
		 header( "location:register.php?error=92");
		 newExit();
	}  
		if (!preg_match("#[0-9]+#", $pass)) {
           echo"Password must include at least one number!";
		    header( "location:register.php?error=93");
			newExit();
        }
	 
	/*else if (isset($_POST['g-recaptcha-response']))
	$captcha=$_POST['g-recaptcha-response'];
	
	if(!$captcha)
	{
		echo 'Please check your are not a robot!!!!!!!';
		header( "location:register.php?error=99");
	}*/
	
	 else 
	 {
		 if($user_name=="$user_name");
		 {
			$user_role_id=2;
		 }
		 
			//$user_role_id=2;
		$pass=md5($pass);
		 //insert the user into the database.
		$insert_user="insert into users (user_name,user_role_id,email,pass,regDate) VALUE ('$user_name','$user_role_id','$email','$pass',now())";
		if(mysqli_query($conn,$insert_user))
    
	    
		/* $user_name=$_SESSION["user_name"];
		$query=mysql_query("SELECT * from users where user_name='$user_name'");
		$row=mysql_fetch_array($query);
		$user_id=$row['user_id']; */
		
		/* $CreateSql = "INSERT INTO `updatee_personal_info` (user_id) 
		VALUES ('$user_id')";		
		$res = mysqli_query($conn, $CreateSql) or die(mysqli_error($conn));		 */
		
		echo "Thanks for your sucessfull regestration..... WEllCome";
	    header( "location:login.php");
	 }	
 }
