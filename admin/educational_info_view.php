<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
	require_once ('header.inc.php');
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
					  <li><a href="leave_form_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">UpdateLeave</a></li>
					  <li><a href="leave_balance.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveBalance</a></li>
					   <li><a href="leave_history.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">LeaveHistory</a></li>
					
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
						
						<th>Degree Name</th> 		
						<th>Concentration/ Major/Group  </th> 
						<th>Institute</th> 			
						<th>University/Board</th>

						<th>Passing Year</th>
						<th>Grade/Class/Devision</th>
                        <th>Marks/CGPA</th>
						<th>Remarks</th>
					</tr>
				</thead>
				<tbody>
					
					<?php 
						//only visible to all (Not show Delete ICON)
						if($_SESSION['user_role_id'] == 2){
					?>			
					<?php
					$user_id = $_SESSION['user_id'];
					$sql = "SELECT * FROM updatee_educational_info  WHERE user_id = '$user_id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['id']; ?></td> 
						<td><?php echo $r['user_id']; ?></td> 
						<td><?php echo $r['user_name']; ?></td>
										
						<td><?php echo $r['degree_title']; ?></td> 
						<td><?php echo $r['major_group']; ?></td> 			
						<td><?php echo $r['inst_name']; ?></td> 
						<td><?php echo $r['uni_board']; ?></td>

						<td><?php echo $r['pass_year']; ?></td> 
						<td><?php echo $r['grade_division']; ?></td> 
						<td><?php echo $r['marks_cgpa']; ?></td> 
						<td><?php echo $r['remarks']; ?></td> 
					</tr>
					<?php } ?>
					<?php } ?>

					<?php 
						//only visible to admin (For Delete User Info)
						if($_SESSION['user_role_id'] == 1){
					?>
					
					<?php
					$sql = "SELECT * FROM updatee_educational_info ";// WHERE user_id = '$user_id'";
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
												<a href="leave_history_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['degree_title']; ?></td> 
						<td><?php echo $r['major_group']; ?></td> 			
						<td><?php echo $r['inst_name']; ?></td> 
						<td><?php echo $r['uni_board']; ?></td>

						<td><?php echo $r['pass_year']; ?></td> 
						<td><?php echo $r['grade_division']; ?></td> 
						<td><?php echo $r['marks_cgpa']; ?></td> 
						<td><?php echo $r['remarks']; ?></td>  
		
					</tr>
					<?php } ?>
					<?php } ?>
					
				</tbody>
			</table>
				
		</div>							
			
	</div>
</div>


<?php require_once "footer.inc.php"?>
<?php// require_once "leave_form_footer.php"?>
