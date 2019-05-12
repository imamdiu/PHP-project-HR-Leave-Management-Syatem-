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
	
		$user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['user_name'];
        
        require_once ('leave_form_navbar.php');
?>

<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->

<!-- Main Navigation Leave content -->

<?php 
    //only visible for all user (Employee)
    if($_SESSION['user_role_id'] == 2){
?>
<?php 	 	
	$user_id = $_SESSION['user_id'];
	//$SelSql = "SELECT * FROM `admin_info_update` WHERE user_id=$user_id";
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
?>

<div class="col-md-6 col-md-offset-3">
    <div class="box box-primary">

        <table style="border:0;" class="table table-condensed">
            <tbody>
                <div class=" text-center">
                    <h5 class="box-title"><strong>In Breaf Leave Info</strong></h5>

                    <tr>
                        <td>
                            <?php echo "<b>Leave Enjoy<b/>"?>
                        </td>
                        <td>
                            <?php echo $r['emp_leave_enjoy']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<b>Leave Balance <b/>"?>
                        </td>
                        <td>
                            <?php echo $r['emp_leave_balance']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<b>Last Leave Date<b/>"?>
                        </td>
                        <td>
                            <?php echo $r['last_leave_date']?>
                        </td>
                    </tr>

                </div>
            </tbody>
        </table>
    </div>
    <!-- /.box -->
</div>
<?php }?>


<?php 
    //only visible for only Admin ()
    if($_SESSION['user_role_id'] == 1){
?>
<!-- Left col -->
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="box box-body box-success">
        <div class="card-content table-responsive">

            <table id="example1" class="table table-bordered  table-striped">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Role ID</th>

                        <th>User Name</th>
                        <th>Email</th>
                        <th>Joining Date</th>

                        <th>Department</th>
                        <th>Designation</th>
                        
                        <th>Leave Enjoy</th>
                        <th>Leave Balance</th>
                        <th>Last Leave Date</th>

                        <th>Update</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php 
						//only visible to admin (For Delete User Info)
						if($_SESSION['user_role_id'] == 1){
					?>
                    <?php
					$sql = "SELECT * FROM users";// where id='$id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
                    <tr>
                        <td scope="row">
                            <?php echo $r['user_id']; ?>
                        </td>

                        <td>
                            <?php echo $r['user_role_id'] ?>
                        </td>
                        <td>
                            <?php echo $r['user_name']; ?>
                        </td>
                        <td>
                            <?php echo $r['email']; ?>
                        </td>
                        <td>
                            <?php echo $r['joining_date']; ?>
                        </td>
                        <td><?php echo $r['department']; ?></td>
                        <td><?php echo $r['designation']; ?></td>

                        <td><?php echo $r['emp_leave_enjoy']; ?></td>
                        <td><?php echo $r['emp_leave_balance']; ?></td>
                        <td><?php echo $r['last_leave_date']; ?></td>

        
                        <td>
                            <a href="user_admin_index_edit.php?user_id=<?php echo $r['user_id']; ?>" target=""><span class="glyphicon glyphicon-edit"
                                    aria-hidden="true"></span></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
 
                </tbody>
            </table>

        </div>
    </div>
</div>
<!-- /.box -->

<?php }?>

<?php require_once "footer.inc.php"?>
<?php //require_once "leave_form_footer.php"?>