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
	require_once('left_sidebar.php');
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];
?>
<?php
	$user_id = $_GET['user_id'];
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST))
	{
		$user_name = mysql_real_escape_string($_POST['user_name']);		
		$email = mysql_real_escape_string($_POST['email']);
		
		$department = mysql_real_escape_string($_POST['department']);
		$designation = mysql_real_escape_string($_POST['designation']);	
		$joining_date = mysql_real_escape_string($_POST['joining_date']);	
		
		$emp_leave_enjoy = mysql_real_escape_string($_POST['emp_leave_enjoy']);	
		$emp_leave_balance = mysql_real_escape_string($_POST['emp_leave_balance']);	
		$last_leave_date = mysql_real_escape_string($_POST['last_leave_date']);	
		if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
		{
			if (preg_match("/^[_\.0-9a-zA-Z-][_0-9a-zA-Z]{2,9}$/i", $user_name)) 
			{	
				//$sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
				//$res_u = mysqli_query($conn, $sql_u);
				//if (mysqli_num_rows($res_u) > 1) 
				//{
					
					//Convert date  dd-mm-yy to Y-m-d..........
					$joining_date = date("Y-m-d",strtotime( $joining_date));
					$last_leave_date = date("Y-m-d",strtotime( $last_leave_date));
					//$joining_date = date("Y-m-d",strtotime( $joining_date));
					
					$UpdateSql = "UPDATE `users` SET user_name='$user_name', email='$email',
													 department='$department',designation='$designation', 
													 joining_date='$joining_date',
													 emp_leave_enjoy='$emp_leave_enjoy',
													 emp_leave_balance='$emp_leave_balance',
													 last_leave_date='$last_leave_date'
					WHERE user_id=$user_id";
					
					$res = mysqli_query($conn, $UpdateSql);
					
					$query=mysql_query("SELECT * from users where user_name='$user_name'");
					$row=mysql_fetch_array($query);
					$user_id=$row['user_id'];
					
					
					$sql_u = "SELECT * FROM `updatee_contact_info` WHERE user_id='$user_id'";
					$res_u = mysqli_query($conn, $sql_u);
					 if (mysqli_num_rows($res_u) > 0) {
						
						echo" Sorry user_id'.$user_id.'is all  ready set for contact_info table<br>";
						//header( "location:register.php?error=72");
						//newExit();
					}
					else{
						$CreateSql_contact_info = "INSERT INTO `updatee_contact_info` (user_id) 
						VALUES ('$user_id')";		
						$res = mysqli_query($conn, $CreateSql_contact_info) or die(mysqli_error($conn));
					}
					
					
					$sql_u = "SELECT * FROM `updatee_personal_info` WHERE user_id='$user_id'";
					$res_u = mysqli_query($conn, $sql_u);
					 if (mysqli_num_rows($res_u) > 0) {
						
						echo" Sorry user_id'.$user_id.'is all  ready set for personal_info table<br>";
						//header( "location:register.php?error=72");
						//newExit();
					}
					else{
						$CreateSql_personal_info = "INSERT INTO `updatee_personal_info` (user_id) 
						VALUES ('$user_id')";		
						$res = mysqli_query($conn, $CreateSql_personal_info) or die(mysqli_error($conn));
					}

					$sql_u = "SELECT * FROM `updatee_educational_info` WHERE user_id='$user_id'";
					$res_u = mysqli_query($conn, $sql_u);
					 if (mysqli_num_rows($res_u) > 0) {
						
						echo" Sorry user_id'.$user_id.'is all  ready set for updatee_educational_info table<br>";
						//header( "location:register.php?error=72");
						//newExit();
					}
					else{
						$CreateSql_personal_info = "INSERT INTO `updatee_educational_info` (user_id,user_name) 
						VALUES ('$user_id','$user_name')";		
						$res = mysqli_query($conn, $CreateSql_personal_info) or die(mysqli_error($conn));
					}
					

					//$res = mysqli_query($conn, $UpdateSql);
					if($res){
						//echo '<script>window.location="user_index_view.php"</script>';
						echo"ok...update data";
						}else{
						$fmsg = "Failed to update data......";
					}
					
				//}else{
					//echo "User Name already exist!";
				//}
			}else{
				echo "Please type a valid User Name!";
		}
		}else{
				echo "Please type a valid email!";
		}			
	}
	
?>

<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				
				<div class="box-header">
				  <h3 class="box-title">Update Emppyee Info</h3>
				  <hr>
					<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
					<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
					<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
					<hr>
				</div>
				
				<form class="form-horizontal" method="POST">
					<div class="box-body">
						<div class="form-group">
							<label for="user_role_id" class="col-sm-2 control-label">User Role ID</label>
							<div class="col-sm-10">
								<input type="text" name="user_role_id"  class="form-control" id="user_role_id" value="<?php echo $r['user_role_id']; ?>" placeholder="user_role_id" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label for="user_id" class="col-sm-2 control-label">User ID</label>
							<div class="col-sm-10">
								<input type="text" name="user_id"  class="form-control" id="user_id" value="<?php echo $r['user_id']; ?>" placeholder="user_id" readonly/>
							</div>
						</div>
						<div class="form-group">
							<label for="user_name" class="col-sm-2 control-label">User Name</label>
							<div class="col-sm-10">
								<input type="text" name="user_name"  class="form-control" id="user_name" value="<?php echo $r['user_name']; ?>" placeholder="Emppyee Name" />
							</div>
						</div>
						<div class="form-group">
							<label for="email" class="col-sm-2 control-label">Email</label>
							<div class="col-sm-10">
								<input type="text" name="email"  class="form-control" id="email" value="<?php echo $r['email']; ?>" placeholder="Email" required="required"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="department" class="col-sm-2 control-label">Department</label>
							<div class="col-sm-10">
								<select id="department" name="department" class="form-control" required="required"/>
									<OPTION value="">Select Department</OPTION>
									<OPTION VALUE="Admin" <?php if($r['department'] == 'Admin'){ echo "selected";} ?>>Admin</OPTION>
									<OPTION VALUE="Marketing" <?php if($r['department'] == 'Marketing'){ echo "selected";} ?>>Marketing</OPTION>
									<OPTION VALUE="Design" <?php if($r['department'] == 'Design'){ echo "selected";} ?>>Design</OPTION>
									<OPTION VALUE="IT" <?php if($r['department'] == 'IT'){ echo "selected";} ?>>IT </OPTION>
									<OPTION VALUE="Office Assistant" <?php if($r['department'] == 'Office Assistant'){ echo "selected";} ?>>Office Assistant</OPTION>
									<OPTION VALUE="Others" <?php if($r['department'] == 'Others'){ echo "selected";} ?>>Other's </OPTION>
					
								</select>
							</div>
						</div>
						
						<!--div class="form-group">
							<label for="input1" class="col-sm-2 control-label"  required>Designation</label>
							<div class="col-sm-10">
								<input type="text" name="designation"  class="form-control" id="input1" value="<?php echo $r['designation']; ?>"placeholder="Designation" />
							</div>
						</div-->
						
						<div class="form-group">
							<label for="department" class="col-sm-2 control-label">Designation </label>
							<div class="col-sm-10">
								<select id="designation" name="designation" class="form-control" />
									<OPTION value="">Select Designation</OPTION>
									<OPTION VALUE="COO" <?php if($r['designation'] == 'COO'){ echo "selected";} ?>>COO</OPTION>
									<OPTION VALUE="Accounts Manager" <?php if($r['designation'] == 'Accounts Manager'){ echo "selected";} ?>>Accounts Manager</OPTION>
									<OPTION VALUE="Senior Accounts" <?php if($r['designation'] == 'Senior Accounts'){ echo "selected";} ?>>Senior Accounts</OPTION>
									<OPTION VALUE="Jonior Accounts" <?php if($r['designation'] == 'Jonior Accounts'){ echo "selected";} ?>>Jonior Accounts </OPTION>
									<OPTION VALUE="Manager" <?php if($r['designation'] == 'Manager'){ echo "selected";} ?>>Manager</OPTION>
									<OPTION VALUE="Senior Executive Sales & Maeketing" <?php if($r['designation'] == 'Senior Executive Sales & Maeketing'){ echo "selected";} ?>>Senior Executive Sales & Maeketing</OPTION>
									<OPTION VALUE="Executive Sales & Maeketing" <?php if($r['designation'] == 'Executive Sales & Maeketing'){ echo "selected";} ?>>Executive Sales & Maeketing</OPTION>
									<OPTION VALUE="Head of Design" <?php if($r['designation'] == 'Head of Design'){ echo "selected";} ?>>Head of Design</OPTION>
									<OPTION VALUE="Senior Design Engineer" <?php if($r['designation'] == 'Senior Design Engineer'){ echo "selected";} ?>>Senior Design Engineer </OPTION>
									<OPTION VALUE="Jonior Design Engineer" <?php if($r['designation'] == 'Jonior Design Engineer'){ echo "selected";} ?>>Jonior Design Engineer </OPTION>
									<OPTION VALUE="Head of IT" <?php if($r['designation'] == 'Head of IT'){ echo "selected";} ?>>Head of IT</OPTION>
									<OPTION VALUE="Assistant of IT" <?php if($r['designation'] == 'Assistant of IT'){ echo "selected";} ?>>Assistant of IT</OPTION>
									<OPTION VALUE="Head of Office Assistant" <?php if($r['designation'] == 'Head of Office Assistant'){ echo "selected";} ?>>Head of Office Assistant</OPTION>
									<OPTION VALUE="Jonior Office Assistant" <?php if($r['designation'] == 'Jonior Office Assistant'){ echo "selected";} ?>>Jonior Office Assistant</OPTION>
									<OPTION VALUE="Others" <?php if($r['designation'] == 'Others'){ echo "selected";} ?>>Other's</OPTION>							
								</select>
							</div>	
						</div>
						<div class="form-group">
							<label for="input1" class="col-sm-2 control-label"  required>Joining Date</label>
							<div class="col-sm-10">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									<input type="text" name="joining_date"  class="form-control" id="joining_date" value="<?php echo $r['joining_date']; ?>"placeholder="Joining Date" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="emp_leave_enjoy" class="col-sm-2 control-label"  required>Leave Enjoy</label>
							<div class="col-sm-10">
								<input type="text" name="emp_leave_enjoy"  class="form-control" id="input1" value="<?php echo $r['emp_leave_enjoy']; ?>"placeholder="Toatl Leave Enjoy" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="input1" class="col-sm-2 control-label"  required>Leave  Balance</label>
							<div class="col-sm-10">
								<input type="text" name="emp_leave_balance"  class="form-control" id="input1" value="<?php echo $r['emp_leave_balance']; ?>"placeholder="Leave  Balance" />
							</div>
						</div>
						<div class="form-group">
							<label for="input1" class="col-sm-2 control-label"  required>Last Leave Date</label>
							<div class="col-sm-10">
								<div class="input-group date">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									  </div>
									<input type="text" name="last_leave_date"  class="form-control" id="last_leave_date" value="<?php echo $r['last_leave_date']; ?>"placeholder="Last Leave Date" />
								</div>
							</div>
						</div>
						
						<div class="form-group">
						  <div class="col-sm-offset-2 col-sm-10">
							<div class="checkbox">
							  <label>
								<input type="checkbox"> Remember me
							  </label>
							</div>
						  </div>
						</div>
					</div>
					
					<div class="box-footer">
						<button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
						<button type="submit" class="btn btn-info pull-right">Update</button>
					</div>
					
				</form>
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->	
	</div>
	<!-- End Row-->
</section>

<?php require_once "leave_form_footer.php"?>	