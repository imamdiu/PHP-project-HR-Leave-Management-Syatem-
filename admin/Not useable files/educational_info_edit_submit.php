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
       // $id = mysql_real_escape_string($_POST['id']);
		$degree_title = mysql_real_escape_string($_POST['degree_title']);
		$major_group = mysql_real_escape_string($_POST['major_group']);
		$inst_name = mysql_real_escape_string($_POST['inst_name']);
		$uni_board = mysql_real_escape_string($_POST['uni_board']);
		
        $pass_year = $_POST['pass_year'];
        $grade_division = $_POST['grade_division'];
        $marks_cgpa = $_POST['marks_cgpa'];
		$remarks = $_POST['remarks'];

        if ($degree_title && $marks_cgpa)
        {	
            //echo " <br> OK... Field are not empty! "."<br>";
        if (!preg_match("#[0-9]{4}+#", $pass_year)) 
        {
            echo"Please Enter Valid Year (Ex : 2003, 2018)!";
            //header( "location:educational_info_edit.php?error=93");
            echo '<script>window.location="educational_info_edit.php?error=93"</script>';
        }
        else{

    
        $InertSql = "INSERT INTO `updatee_educational_info` 
                            (user_id, degree_title, major_group, inst_name, uni_board,
                            pass_year,grade_division,marks_cgpa,remarks)		
                    
                    VALUES ('$user_id','$degree_title','$major_group', '$inst_name', '$uni_board',
                    '$pass_year','$grade_division', '$marks_cgpa', '$remarks')";	
            
                $res = mysqli_query($conn, $InertSql);
                if($res){
                     echo '<script>window.location="educational_info_edit.php"</script>';
                    echo"Insert Educational Information Sucessfully.....thanks";
                    }else{
                    $fmsg = "Failed to update data......";
                }


               
        }
    }
    }else {
        echo "<br> you have to complete the form!";
}    
    
}

?>