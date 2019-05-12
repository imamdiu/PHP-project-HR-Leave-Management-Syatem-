<?php
//require_once('DB_&_TABLE/connect.php');
require_once "../db.inc.php";
$user_id = $_GET['user_id'];

$DelSql = "DELETE FROM `post` WHERE user_id=$user_id";
$res = mysqli_query($conn, $DelSql);

if($res){
	//header('location: personal_info_edit.php');
	echo '<script>window.location="chatting_users_view.php"</script>';
}else{
	echo "Failed to delete";
}
?>