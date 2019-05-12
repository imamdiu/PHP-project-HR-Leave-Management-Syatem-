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

<br>
<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->

<div class="container-fluid">
    <!-- Content here -->
    <div layout="column" layout-gt-sm="row" flex="" layout-align="center center" md-colors="{background:'teal-50'}"
        class="md-whiteframe-3dp ng-scope layout-gt-sm-row layout-align-center-center layout-column flex" style="background: rgb(224, 242, 241); color: rgba(0, 0, 0, 0.87);">
        <h4 class="md-headline ng-binding">Contact Info View By Admin (All Users) </h4>
    </div>
</div>
<br>


<div class="col-md-12 col-sm-12 col-xs-12">   
    <div class="box box-body box-success">  	
		<div class="card-content table-responsive">
			
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr> 
						<th>ID</th>
						<th>User ID</th>	
						
						<th>Action</th>	
						
						<th>Mobile NO.</th> 
						<th>Mobile No 2 (Optional)</th> 
						<th>Email 2 (Optional)</th>
						
						<th>Name of Person</th> 
						<th>Mobile NO.</th>
						<th>Mobile No 2 (Optional)</th> 
						<th>Email</th> 
						
						<th>Address</th> 
						<th>Thana</th>
						<th>District</th> 
						<th>Division</th> 
						
						<th>P. Address</th> 
						<th>P. Thana</th>
						<th>P. District</th> 
						<th>P. Division</th> 
										
											
					</tr> 
				</thead> 
					<tbody> 
						<?php 
						//only visible to all (Not show Delete ICON)
						if($_SESSION['user_role_id'] == 2){
						?>			
						<?php
						$user_id = $_SESSION['user_id'];
						$sql = "SELECT * FROM updatee_contact_info  WHERE user_id = '$user_id'";
						$result = $conn->query($sql);
						while($r = mysqli_fetch_assoc($result))
						{
						?>
						<tr> 
							<td scope="row"><?php echo $r['id']; ?></td> 
							<td><?php echo $r['user_id']; ?></td>
							
							<td>
								<a href="contact_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Profile</a>
							
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
													<a href="contact_info_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
												</div>
											</div>
											
										</div>
									</div>	
								<?php }?>	
							</td>
							
							<td><?php echo $r['mobile']; ?></td> 
							<td><?php echo $r['mobile2']; ?></td> 
							<td><?php echo $r['email2']; ?></td> 
							
							<td><?php echo $r['em_name']; ?></td> 
							<td><?php echo $r['em_mobile']; ?></td> 
							<td><?php echo $r['em_mobile2']; ?></td> 
							<td><?php echo $r['em_email']; ?></td> 
												
							<td><?php echo $r['address']; ?></td> 
							<td><?php echo $r['thana']; ?></td> 
							<td><?php echo $r['district']; ?></td> 
							<td><?php echo $r['division']; ?></td> 
															
							<td><?php echo $r['paddress']; ?></td> 
							<td><?php echo $r['pthana']; ?></td> 
							<td><?php echo $r['pdistrict']; ?></td> 
							<td><?php echo $r['pdivision']; ?></td> 
							
							
						</tr>
						<?php } ?>
						<?php } ?>	
						
						<?php 
						//only visible FOR 	ADMIN (ALL icon ICON are visible)
						if($_SESSION['user_role_id'] == 1){
						?>			
						<?php
						$user_id = $_SESSION['user_id'];
						$sql = "SELECT * FROM updatee_contact_info";
						$result = $conn->query($sql);
						while($r = mysqli_fetch_assoc($result))
						{
						?>
						<tr> 
							<td scope="row"><?php echo $r['id']; ?></td> 
							<td><?php echo $r['user_id']; ?></td>
							
							<td>
								<a href="contact_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Profile</a>
							
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
													<a href="contact_info_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
												</div>
											</div>
											
										</div>
									</div>	
								<?php }?>	
							</td>
							
							<td><?php echo $r['mobile']; ?></td> 
							<td><?php echo $r['mobile2']; ?></td> 
							<td><?php echo $r['email2']; ?></td> 
							
							<td><?php echo $r['em_name']; ?></td> 
							<td><?php echo $r['em_mobile']; ?></td> 
							<td><?php echo $r['em_mobile2']; ?></td> 
							<td><?php echo $r['em_email']; ?></td> 
												
							<td><?php echo $r['address']; ?></td> 
							<td><?php echo $r['thana']; ?></td> 
							<td><?php echo $r['district']; ?></td> 
							<td><?php echo $r['division']; ?></td> 
															
							<td><?php echo $r['paddress']; ?></td> 
							<td><?php echo $r['pthana']; ?></td> 
							<td><?php echo $r['pdistrict']; ?></td> 
							<td><?php echo $r['pdivision']; ?></td> 
							
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