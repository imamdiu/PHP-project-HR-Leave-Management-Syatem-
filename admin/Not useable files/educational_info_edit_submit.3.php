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
?>


<?php	
if(isset($_POST['submit'])){
	if(isset($_POST) & !empty($_POST)){
        $id = mysql_real_escape_string($_POST['id']);
		$degree_title = mysql_real_escape_string($_POST['degree_title']);
		$major_group = mysql_real_escape_string($_POST['major_group']);
		$inst_name = mysql_real_escape_string($_POST['inst_name']);
		$uni_board = mysql_real_escape_string($_POST['uni_board']);
		
        $pass_year = $_POST['pass_year'];
        $grade_division = $_POST['grade_division'];
        $marks_cgpa = $_POST['marks_cgpa'];
		$remarks = $_POST['remarks'];



    $sql = "SELECT * FROM updatee_educational_info  WHERE id = '$id' & user_id = '$user_id'";
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result))
    {
        $id=$r['id'];
        $user_name=$r['user_name'];
        $degree_title=$r['degree_title'];

        echo "User ddd Educational info ID:: "." ".$id ."<br>";
 
    }
    echo "Degree Title :: "." ".$degree_title ."<br>";
    echo "User Educational info ID:: "." ".$id ."<br>";
echo "User IDDD :: "." ".$user_id ."<br>";
echo "User Name info :: "." ".$user_name ."<br>";
echo "User Degree Title :: "." ".$degree_title ."<br>";

    if($degree_title == 'S.S.C')
    {
        echo"Sorry SSC Alrady enter";
    }
    else{
       
        echo"okkk";

               
        }
    
}
} 
?>