<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once "header.inc.php";
	require_once('left_sidebar.php');
	//$id = $_SESSION['id'];
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];
		
?>

<div class="box">
    <div class="box-header">
        <h3 class="box-title">See Your Personal INFO</h3>
    </div>
    <!-- /.box-header -->
    <div class="container testimonial-group">
        <div class="box-body section-title ">
            <table id="example1" class="table table-bordered table-striped">

                <p>You are login as Userww ID : <strong>
                        <?php echo $_SESSION['user_id']; ?></strong></p>
                <p>You are login as Role ID : <strong>
                        <?php echo $_SESSION['user_role_id']; ?></strong></p>
                <p>You are login as USer Name : <strong>
                        <?php echo $_SESSION['user_name']; ?></strong></p>

                <hr>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>User Name</th>

                        <th>Action</th>

                        <th>Today's Date</th>
                        <th>From Date</th>
                        <th>To Date</th>

                        <th>Days</th>
                        <th>Reason of Leave</th>

                        <th>Join Date</th>
                    </tr>
                </thead>
                <tbody>


                    <?php 
					//only visible to admin (For Delete User Info)
					//if($_SESSION['user_role_id'] == 1){
				?>

                    <?php
				
						$user_id = $_GET['user_id'];
						$user_id = $_GET['user_id'];
						$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
						$res = mysqli_query($conn, $SelSql);
						
						$ree = mysqli_fetch_assoc($res);
						
						echo "<b>This USer ID : </b>" ." ".$ree['user_id'];
						echo "<br><b>This USer Name : </b>" ." ".$ree['user_name'];
				?>
                    <hr>
                    <?php
				
				$sql = "SELECT * FROM leave_form_history  WHERE user_id = '$user_id'";
				$result = $conn->query($sql);
				while($r = mysqli_fetch_assoc($result))
				{
				?>
                    <tr>
                        <th scope="row">
                            <?php echo $r['id']; ?>
                        </th>
                        <td>
                            <?php echo $r['user_id']; ?>
                        </td>

                        <td>
                            <?php echo $r['user_name']; ?>
                        </td>
                        <td>
                            <a href="personal_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span
                                    class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Leave History</a>

                            <?php 
						//only visible to admin (For Delete User Info)
						if($_SESSION['user_role_id'] == 1){?>
                            <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>
                            <!--Modal -->
                            <div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Delete File</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <a href="leave_history_delete.php?user_id=<?php echo $r['user_id']; ?>"><button
                                                    type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php }?>
                        </td>

                        <td>
                            <?php echo $r['todaySdate']; ?>
                        </td>
                        <td>
                            <?php echo $r['fromdate']; ?>
                        </td>

                        <td>
                            <?php echo $r['todate']; ?>
                        </td>
                        <td>
                            <?php echo $r['days']; ?>
                        </td>

                        <td>
                            <?php echo $r['reason_leave']; ?>
                        </td>

                        <td>
                            <?php echo $r['joindate']; ?>
                        </td>

                    </tr>
                    <?php } ?>
                    <?php// } ?>
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
</div>
<!-- /.box -->

<?php require_once "leave_form_footer.php"?>