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
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];		
?>
<div class="box">
    <div class="box-header">
        <h3 class="box-title">See Your Contact INFO</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
			
		    <p>You are login as Userww ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
			<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
			<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
            <thead>
				<tr> 
					<th>ID</th>
					<th>User ID</th>	
					<th>User Name</th> 
					
					<th>Action</th>	
					
					<th>Post Tile</th>
					<th>Content</th>
										
				
				</tr> 
			</thead> 
				<tbody> 
					<?php 
					//only visible to all (Not show Delete ICON)
					if($_SESSION['user_role_id'] == 2){
					?>			
					<?php
					$user_id = $_SESSION['user_id'];
					$sql = "SELECT * FROM post  WHERE user_id = '$user_id'";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr> 
						<th scope="row"><?php echo $r['id']; ?></th> 
						<td><?php echo $r['user_id']; ?></td>
						<td><?php echo $r['user_name']; ?></td> 
						
						<td>
							<a href="chatting_users_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Chatt</a>
						
							<?php 
							//only visible to admin (Show all aceess)
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
												<a href="chatting_users_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['title']; ?></td> 
						<td><?php echo $r['content']; ?></td> 
						

					</tr>
					<?php } ?>
					<?php } ?>	
					
					
					
					<?php 
					//only visible FOR 	ADMIN (ALL icon ICON are visible)
					if($_SESSION['user_role_id'] == 1){
					?>			
					<?php
					$user_id = $_SESSION['user_id'];
					$sql = "SELECT * FROM post";
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr> 
						<th scope="row"><?php echo $r['id']; ?></th> 
						<td><?php echo $r['user_id']; ?></td>
						<td><?php echo $r['user_name']; ?></td>
						<td>
							<a href="chatting_users_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Chatt</a>
						
							<?php 
							//only visible to admin (Show all aceess)
							if($_SESSION['user_role_id'] == 1)
							{
							?>
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>
								<!--Modal -->
								<div class="modal fade" id="myModal<?php echo $r['id']; ?>" role="dialog">
									<div class="modal-dialog">
										
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Delete Chatt</h4>
											</div>
											<div class="modal-body">
												<p>Are you sure?</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<a href="chatting_users_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['title']; ?></td> 
						<td><?php echo $r['content']; ?></td> 
						 
											
					
					</tr>
					<?php } ?>
					<?php } ?>	
					
				</tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<?php require_once "leave_form_footer.php"?>