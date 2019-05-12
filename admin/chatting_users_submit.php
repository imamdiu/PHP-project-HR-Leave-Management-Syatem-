<?php
session_start();

if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
{
	header('location:userID_index.php?lmsg=true');
	exit;
}	

		require_once('../db_update_profile.inc.php');
		require_once "header.inc.php";
		require_once('left_sidebar.php');
?>

<?php
$user_name=$_SESSION["user_name"];



/* if(isset($_REQUEST['submit'])) 
    { */
		$title=$_REQUEST["title"];
		$content=$_REQUEST["content"];
			$query=mysql_query("SELECT * from users where user_name='$user_name'");
			$row=mysql_fetch_array($query);
			$user_id=$row['user_id'];
			$user_name=$row['user_name'];
			
		mysql_query("insert into post(user_id,user_name,title,content) value('$user_id','$user_name','$title','$content')");                     
		echo '<script>window.location="chatting_users.php"</script>';
		//echo "YEs";
	/* }
	else
	{
		echo"NOoooo";
	} */
?>

<?php require_once "leave_form_footer.php"?>