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

        if ($degree_title && $marks_cgpa)
        {	
            echo " <br> OK... Field are not empty! "."<br>";
            if (!preg_match("#[0-9]{4}+#", $pass_year)) 
        {
            echo"Please Enter Valid Year (Ex : 2003, 2018)!";
            //header( "location:educational_info_edit.php?error=93");
            echo '<script>window.location="educational_info_edit.php?error=93"</script>';
        }
        else{

    $sql = "SELECT * FROM updatee_educational_info  WHERE id = '$id' & user_id = '$user_id'";
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result))
    {
        $id=$r['id'];
        $user_name=$r['user_name'];
        $user_nuser_idame=$r['user_id'];
        $degree_title=$r['degree_title'];
        
 
    }

    echo "User Educational info ID:: "." ".$id ."<br>";
    echo "User IDDD :: "." ".$user_id ."<br>";
    echo "User Name info :: "." ".$user_name ."<br>";
    echo "Degree Title :: "." ".$degree_title ."<br>";
    $idd = $_SESSION['user_id'];
    echo "SESSION Title :: "." ".$idd ."<br>";
    
     if($idd == '1' && $degree_title == 'S.S.C')
    {
        echo "Essionoooo:" ." ".$_SESSION['user_id'] ."<br>";
        echo"Sorry SSC Alrady entereee";
    }
    else if($degree_title == 'H.S.C' && $idd == '1')
    {
        echo"Sorry HSC Alrady enter";
    }
    else{     
        echo"okkk";
        $InertSql = "INSERT INTO `updatee_educational_info` 
                            (user_id, degree_title, major_group, inst_name, uni_board,
                            pass_year,grade_division,marks_cgpa,remarks)		
                    
                    VALUES ('$user_id','$degree_title','$major_group', '$inst_name', '$uni_board',
                    '$pass_year','$grade_division', '$marks_cgpa', '$remarks')";	
            
                $res = mysqli_query($conn, $InertSql);
                if($res){
                // echo '<script>window.location="educational_info_edit.php"</script>';
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
} 
?>