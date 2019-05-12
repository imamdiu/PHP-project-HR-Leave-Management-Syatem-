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
<br>
<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->

<div class="container-fluid">
    <!-- Content here -->
    <div layout="column" layout-gt-sm="row" flex="" layout-align="center center" md-colors="{background:'teal-50'}"
        class="md-whiteframe-3dp ng-scope layout-gt-sm-row layout-align-center-center layout-column flex" style="background: rgb(224, 242, 241); color: rgba(0, 0, 0, 0.87);">
        <h4 class="md-headline ng-binding">List Of All Users </h4>
    </div>
</div>
<br>

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
						<th>Registration Date</th>					
		
						<!--th>Pass</th-->
						<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 1){
						?>
						<th>Update Admin Info</th>
						<!-- <th>View Leave Form (AD)</th>
						<th>View Leave History (AD)</th> -->
						<?php }?>
						
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
						<td scope="row"><?php echo $r['user_id']; ?></td> 
						
						<td><?php echo $r['user_role_id'] ?></td> 
						<td><?php echo $r['user_name']; ?></td> 
						<td><?php echo $r['email']; ?></td>
						<td><?php echo $r['regDate']; ?></td> 					
						<!--td><?php //echo $r['pass']; ?></td--> 
						
						<td>				
							<a href="user_admin_index_edit.php?user_id=<?php echo $r['user_id']; ?>" target=""><button type="button"  class="btn btn-success">Admin Info Change</button></a>
						</td>
						<!-- <td>				
							<a href="leave_form_view_admin.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-info">Leave Form View (AD)</button></a>
						</td>
						<td>				
							<a href="leave_history_admin.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-warning">Leave History View (AD)</button></a>
						</td> -->
						
						<td>
							<a href="user_index_edit.php?user_id=<?php echo $r['user_id']; ?>" target=""><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							
							<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 1){
								?>
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['user_id']; ?>">Delete</button>
								<!--Modal -->
								<div class="modal fade" id="myModal<?php echo $r['user_id']; ?>" role="dialog">
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
												<a href="user_index_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
					</tr>
					<?php } ?>
					<?php } ?>
					
					<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 2){
					?>
					<?php
					$sql = "SELECT * FROM users where user_id='$user_id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['user_id']; ?></td> 
						
						<td><?php echo $r['user_role_id'] ?></td> 
						<td><?php echo $r['user_name']; ?></td> 
						<td><?php echo $r['email']; ?></td> 
						<td><?php echo $r['regDate']; ?></td> 	
						<!--td><?php //echo $r['pass']; ?></td--> 
						
						<!--td>				
							<a href="change_password_index.php?user_id=<?php //echo $r['user_id']; ?>" target="_blank"><button type="button"  class="btn btn-success">Password Change</button></a>
						</td-->
						
						<td>
							<a href="user_index_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
							
							<?php 
							//only visible to admin (For Delete User Info)
							if($_SESSION['user_role_id'] == 1){
								?>
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['user_id']; ?>">Delete</button>
								<!--Modal -->
								<div class="modal fade" id="myModal<?php echo $r['user_id']; ?>" role="dialog">
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
												<a href="user_index_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
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

<?php require_once "footer.inc.php"?>
<?php// require_once "leave_form_footer.php"?>
