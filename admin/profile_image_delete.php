<?php
// require_once "../db.inc.php";
// $user_id = $_GET['user_id'];

// $res = "DELETE user_name, profile_image

//  FROM user_id 
//  WHERE user_id='$user_id'";

// $result=mysql_query($res);

// if(mysql_affected_rows()){
//     echo "successfully deleted";
    
// 	//echo '<script>window.location="profile_image_view_admin.php"</script>';
//     }else{
//     echo "Failure";
// 	}
	
//require_once('DB_&_TABLE/connect.php');
require_once "../db.inc.php";
$user_id = $_GET['user_id'];

$DelSql = "DELETE  FROM `users` WHERE user_id= '$user_id' ";
$res = mysqli_query($conn, $DelSql);

if($res){
	//header('location: personal_info_edit.php');
	echo '<script>window.location="profile_image_view_admin.php"</script>';
	echo"Okkk";
}else{
	echo "Failed to delete";
}
?>