<?php
//require_once('DB_&_TABLE/connect.php');
require_once "../db.inc.php";
$user_id = $_GET['user_id'];

    $sql = "SELECT * FROM updatee_educational_info  WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result))
    {
        $id=$r['id'];
        $user_name=$r['user_name'];
        $degree_title=$r['degree_title'];


echo "User Educational info ID:: "." ".$id ."<br>";
echo "User IDDD :: "." ".$user_id ."<br>";
echo "User Name info :: "." ".$user_name ."<br>";
echo "User Degree Title :: "." ".$degree_title ."<br>";
    }

?>