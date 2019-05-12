<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once "header.inc.php";
	
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];
		
	
?>
<!-- Main Navigation Leave content -->
<?php
$sql = "select * from users where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
?>
<br>
<div class="row">
    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
        <nav class="navbar navbar-inverse bg-color:green;" id="navbar">
            <div class="container-fluid " id="navbar">
                <div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
                    <ul class="nav navbar-nav">

                        <li class="active" style="margin-left:40px;"><a href="leave_form.php?user_id=<?php echo $row['user_id']; ?>">ApplyLeave</a></li>
                        <!-- <li><a href="leave_form_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:20px;">UpdateLeave</a></li> -->
                        <li><a href="leave_balance.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveBalance</a></li>
                        <li><a href="leave_form_draft_view.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveDraftView</a></li>
                        <li><a href="leave_history_admin.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveHistoryAdmin</a></li>
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
<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">

<div class="col-md-12 col-sm-12 col-xs-12">   
    <div class="box box-body box-success">
		<div class="card-content table-responsive">	

           <table id="example1" class="table table-bordered table-responsive table-hover table-condensed table-striped">
				<thead>
					<tr>
						<th>ID</th> 
						<th>User ID</th>
						<th>User Name</th>
						
						<?php 
						//only visible to all (Not show Delete ICON)
						if($_SESSION['user_role_id'] == 1){
						?>
							<th>Action</th>
						<?php } ?>
						
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
						//only visible to all (Not show Delete ICON)
						if($_SESSION['user_role_id'] == 2){
					?>			
					<?php
					$user_id = $_SESSION['user_id'];
					$sql = "SELECT * FROM leave_form_history  WHERE user_id = '$user_id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['id']; ?></td> 
						<td><?php echo $r['user_id']; ?></td> 
						<td><?php echo $r['user_name']; ?></td>
										
						<td><?php echo $r['todaySdate']; ?></td> 
						<td><?php echo $r['fromdate']; ?></td> 
										
						<td><?php echo $r['todate']; ?></td> 
						<td><?php echo $r['days']; ?></td> 
						
						<td><?php echo $r['reason_leave']; ?></td> 
						
						
						<td><?php echo $r['joindate']; ?></td> 
						

					</tr>
					<?php } ?>
					<?php } ?>

					<?php 
						//only visible to admin (For Delete User Info)
						if($_SESSION['user_role_id'] == 1){
					?>
					
					<?php
					$sql = "SELECT * FROM leave_form_history ";// WHERE user_id = '$user_id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['id']; ?></td> 
						<td><?php echo $r['user_id']; ?></td> 
						<td><?php echo $r['user_name']; ?></td>
						
						<td>
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
												<a href="leave_history_delete.php?id=<?php echo $r['id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['todaySdate']; ?></td> 
						<td><?php echo $r['fromdate']; ?></td> 
										
						<td><?php echo $r['todate']; ?></td> 
						<td><?php echo $r['days']; ?></td> 

						<td><?php echo $r['reason_leave']; ?></td> 	
						<td><?php echo $r['joindate']; ?></td> 
		
					</tr>
					<?php } ?>
					<?php } ?>
					
				</tbody>
			</table>

        </div>
        <!-- /.box-body -->
    </div>
</div>
<!-- /.box -->

<?php require_once "leave_form_footer.php"?>