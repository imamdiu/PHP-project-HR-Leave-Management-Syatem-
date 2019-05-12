<style>
.a:active,
.a:hover {
    background-color: #666;
    color: white;
}
</style>
<!-- Main Navigation Leave content -->
<?php
$sql = "select * from users where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
?>
<br>

<?php

$pageName = basename($_SERVER['PHP_SELF']);

$leave_form 	   = 'leave_form.php';
$leave_balance 	   = 'leave_balance.php';
$leave_form_draft_view   = 'leave_form_draft_view.php';
$leave_history = 'leave_history.php';

if($pageName == $leave_form){
	$leave_form_class = 'active';

}else if($pageName == $leave_balance){

	$leave_balance_class = 'active';

}else if($pageName == $leave_form_draft_view){

	$leave_form_draft_view_class = 'active';  

}else if($pageName == $leave_history){

	$leave_history_class = 'active'; 	
	
}
?>	
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <nav class="navbar navbar-inverse bg-color:green;" id="navbar">
            <div class="container-fluid " id="navbar">
                <div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
                    <ul class="nav navbar-nav">

                        <li class='<?php echo $leave_form_class; ?>'><a href="leave_form.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">ApplyLeave</a></li>
                        <!-- <li><a href="leave_form_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:20px;">UpdateLeave</a></li> -->
                        <li class='<?php echo $leave_balance_class; ?>'><a href="leave_balance.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveBalance</a></li>
                        <li class='<?php echo $leave_form_draft_view_class; ?>'><a href="leave_form_draft_view.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveDraftView</a></li>
                        <li class='<?php echo $leave_history_class; ?>'><a href="leave_history.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveHistory</a></li>

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