<?php
$sql = "select * from users where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
?>
<br>
<?php

$pageName = basename($_SERVER['PHP_SELF']);

$personal 	   = 'personal_info_edit.php';
$contact 	   = 'contact_info_edit.php';
$educational   = 'educational_info_edit.php';
$profession    = '#';
$profile_image = 'profile_image_edit.php';

if($pageName == $personal){
	$personal_class = 'active';

}else if($pageName == $contact){

	$contact_class = 'active';

}else if($pageName == $educational){

	$educational_class = 'active';  

}else if($pageName == $profession){

	$professionl_class = 'active'; 	
	
}else if($pageName == $profile_image){

	$profile_image_class = 'active';    
}
?>						
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <nav class="navbar navbar-inverse bg-color:green;" id="navbar">
            <div class="container-fluid " id="navbar">
                <div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
                    <ul class="nav navbar-nav">

                        <li class='<?php echo $personal_class; ?>'><a href="personal_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Personalss</a></li>
                        <li class='<?php echo $contact_class; ?>'><a href="contact_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Conatct</a></li>
                        <li class='<?php echo $educational_class; ?>'><a href="educational_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Educational</a></li>
                        <li class='<?php echo $professionl_class; ?>'><a href="#" style="margin-left:40px;">Professional</a></li>
                        <li class='<?php echo $profile_image_class; ?>'><a href="profile_image_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Protograph</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<?php
	}
  }
?>