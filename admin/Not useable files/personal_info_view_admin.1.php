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
        <h4 class="md-headline ng-binding">Personal Info View By Admin (All Users) </h4>
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
						
						<th>Full Name</th> 		
						
						<th>Father's Name</th> 
						<th>Mother's Name</th> 
										
						<th>Gender</th>
						<th>Marital Status</th>
						
						<th>DOB</th>
						<th>AGE</th>
											
						<th>Blood Group</th>
						<th>Religion</th>
						
						<th>Nationality</th>
						<th>National ID</th>
						
						<th>____About_You____</th>
						
						
					</tr>
				</thead>
				<tbody>
					<?php //only visible to all (Not show Delete ICON)
						if($_SESSION['user_role_id'] == 2){
					?>			
					<?php
					$user_id = $_SESSION['user_id'];
					$sql =" SELECT  id,user_id, fname, lname, father_name,mother_name,
									gender,marital_status, dob,
									blood,religion,nationality,nid,about_you,
									
									TIMESTAMPDIFF( YEAR, dob, now() ) as age , 
									--TIMESTAMPDIFF( MONTH, dob, now() ) % 12 as month , 
									--FLOOR( TIMESTAMPDIFF( DAY, dob, now() ) % 30.4375 ) as days 
							
							FROM `updatee_personal_info` WHERE user_id = '$user_id'";
					   
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['id']; ?></td> 
						<td><?php echo $r['user_id']; ?></td> 
						<td>
							<a href="personal_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Profile</a>
						
							<?php 
							//only visible to admin (Show all aceess)
							if($_SESSION['user_role_id'] == 1){?>
								<button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php echo $r['id']; ?>">Delete</button>
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
												<a href="personal_info_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td> 
						<td><?php echo $r['father_name']; ?></td> 
						<td><?php echo $r['mother_name']; ?></td> 
										
						<td><?php echo $r['gender']; ?></td> 
						<td><?php echo $r['marital_status']; ?></td> 
						
						<td><?php echo $r['dob']; ?></td> 
						<td><?php echo $r['age']; ?></td> 
			
						<!--td><?php// echo $r['yearr']." years, ".$r['monthh']." months, ".$r['dayy']." days"; ?></td--> 
					
						<td><?php echo $r['blood']; ?></td> 
						<td><?php echo $r['religion']; ?></td> 
						
						<td><?php echo $r['nationality']; ?></td> 
						<td><?php echo $r['nid']; ?></td> 
						
						<td><?php echo $r['about_you']; ?></td> 
					</tr>
					<?php } ?>
					<?php } ?>
					
					<?php 
						//only visible to admin (For Delete User Info)
						if($_SESSION['user_role_id'] == 1){
					?>
					
					<?php
					//$sql = "SELECT * FROM updatee_personal_info ";// WHERE user_id = '$user_id'";
					
					$sql =" SELECT  id,user_id, fname, lname, father_name,mother_name,
									gender,marital_status, dob,
									blood,religion,nationality,nid,about_you,
									
									TIMESTAMPDIFF( YEAR, dob, now() ) as years , 
									TIMESTAMPDIFF( MONTH, dob, now() ) % 12 as months , 
									FLOOR( TIMESTAMPDIFF( DAY, dob, now() ) % 30.4375 ) as days 
							
							FROM `updatee_personal_info`";
							
					$result = $conn->query($sql);
					while($r = mysqli_fetch_assoc($result))
					{
					?>
					<tr>
						<td scope="row"><?php echo $r['id']; ?></td> 
						<td><?php echo $r['user_id']; ?></td> 
						
						<td>
							<a href="personal_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span>Update Profile</a>
						
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
												<a href="personal_info_delete.php?user_id=<?php echo $r['user_id']; ?>"><button type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
											</div>
										</div>
										
									</div>
								</div>	
							<?php }?>	
						</td>
						
						<td><?php echo $r['fname'] . " " . $r['lname']; ?></td> 
						<td><?php echo $r['father_name']; ?></td> 
						<td><?php echo $r['mother_name']; ?></td> 
										
						<td><?php echo $r['gender']; ?></td> 
						<td><?php echo $r['marital_status']; ?></td> 
						
						<td><?php echo $r['dob']; ?></td> 
						<td><?php echo $r['years']." year, ".$r['months']." mnth, ".$r['days']." days"; ?></td> 
						
						
						<!--td><?php// echo $r['yearr']." years, ".$r['monthh']." months, ".$r['dayy']." days"; ?></td--> 
						
						<td><?php echo $r['blood']; ?></td> 
						<td><?php echo $r['religion']; ?></td> 
						
						<td><?php echo $r['nationality']; ?></td> 
						<td><?php echo $r['nid']; ?></td> 
						
						<td><?php echo $r['about_you']; ?></td> 
					</tr>
					<?php } ?>
					<?php } ?>
					
				</tbody>
			</table>

		</div>
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->

<?php require_once "footer.inc.php"?>
<?php// require_once "leave_form_footer.php"?>
