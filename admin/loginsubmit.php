<?php
session_start();
//require_once('inc/config.php');
require_once "../db.inc.php";

if(isset($_POST['login']))
{
	if(!empty($_POST['email']) && !empty($_POST['pass']))
	{
		$email 	= trim($_POST['email']);
		$pass 	= trim($_POST['pass']);		
		$md5pass = md5($pass);	
		$sql = "select * from users where email = '".$email."' and pass = '".$md5pass."'";
		$rs = mysqli_query($conn,$sql);
		$getNumRows = mysqli_num_rows($rs);		
		if($getNumRows == 1)
		{
			$getUserRow = mysqli_fetch_assoc($rs);
			unset($getUserRow['pass']);
			
			$_SESSION = $getUserRow;
						
			header('location:dashboard.php');
			echo "Secess..";
			exit;
		}
		else
		{
			$errorMsg = "Wrong email or pass";
		}
	}
	else
		{
			$errorMsg = "Emplty email or pass";
		}
}
if(isset($_GET['logout']) && $_GET['logout'] == true)
{
	session_destroy();
	header("location:index.php");
	exit;
}
if(isset($_GET['lmsg']) && $_GET['lmsg'] == true)
{
	$errorMsg = "Login required to access dashboard";
}


/*
require_once "../db.inc.php";
if (!isset($_REQUEST['email']) && !isset($_REQUEST['pass'])) die("Wrong URL");

$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];


$sql = "SELECT * FROM users where email= '$email' and pass='$pass'";

$result = $conn->query($sql);
if ($result->num_rows!=1) //die("No specific record found");
{	
	header( "location:login.php?error=1");
}

else
{	
	$data=mysqli_fetch_assoc($result);
	session_start();
	$_SESSION['email']=$data['email'];
	$_SESSION['user_name']=$data['user_name'];
    header( "location:index.php");
}	
//print_r($_POST);

*/
?>

