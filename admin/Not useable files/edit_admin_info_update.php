<?php
	require_once('../db.inc.php');
	
	$id = $_GET['id'];
	$SelSql = "SELECT * FROM `admin_info_update` WHERE id=$id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST)){
		$emp_id = mysql_real_escape_string($_POST['emp_id']);		
		$emp_name = mysql_real_escape_string($_POST['emp_name']);
		
		$department = mysql_real_escape_string($_POST['department']);
		$designation = mysql_real_escape_string($_POST['designation']);	
		$emp_leave_balance = mysql_real_escape_string($_POST['emp_leave_balance']);			
		
		
		$UpdateSql = "UPDATE `admin_info_update` SET emp_id='$emp_id', emp_name='$emp_name',
		department='$department',designation='$designation',emp_leave_balance='$emp_leave_balance'
		
		
		WHERE id=$id";
		
		$res = mysqli_query($conn, $UpdateSql);
		
		if($res){
			header('location: view_admin_info_update.php');
			}else{
			$fmsg = "Failed to update data......";
		}
		//}			
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>HR Leave Mmangement System _______www.jslbd.com_______</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
		<script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
		
	</head>
	<body>
		<div class="container">
			<div class="row">
				<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
				<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
					<h3>HR Leave Mmangement System _______www.jslbd.com_______</h3>
					<h4>Edit ADMIN info</h4> <hr>
					
					
					<div class="panel panel-primary">
						<div class="panel-body">
							<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> ADMN info (Update Again)</strong></h5>
							<hr>
							
							
							<div class="form-group">
								<label for="emp_id" class="col-sm-2 control-label">Employee_ID</label>					
								<div class="col-sm-10">
									<input type="text" name="emp_id"  class="form-control" id="emp_id" value="<?php echo $r['emp_id']; ?>" placeholder="Employee ID" //>
								</div>
							</div>
							<div class="form-group">
								<label for="emp_name" class="col-sm-2 control-label">Employee Name</label>					
								<div class="col-sm-10">
									<input type="text" name="emp_name"  class="form-control" id="emp_name" value="<?php echo $r['emp_name']; ?>"placeholder="Employee Name" //>
								</div>
							</div>
							
							
					
							
							<div class="form-group">																				
								<label for="department" class="col-sm-2 control-label"> <strong>Department</strong></label>
								<div class="col-sm-10">
									<select name="department" class="form-control" />
										<!--OPTION value="">Select Please</OPTION-->
										<OPTION VALUE="admin" <?php if($r['department'] == 'admin'){ echo "selected";} ?> >Admin</OPTION>
										<OPTION VALUE="marketing" <?php if($r['department'] == 'marketing'){ echo "selected";} ?> >Marketing</OPTION>
										<OPTION VALUE="design" <?php if($r['department'] == 'design'){ echo "selected";} ?> >Design</OPTION>
										<OPTION VALUE="it" <?php if($r['department'] == 'it'){ echo "selected";} ?> >IT </OPTION>
										<OPTION VALUE="officeassistant" <?php if($r['department'] == 'officeassistant'){ echo "selected";} ?> >Office Assistant</OPTION>
										<OPTION VALUE="Others" <?php if($r['department'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>							
									</select>
								</div>
							</div>
						
						<div class="form-group">																				
							<label for="designation" class="col-sm-2 control-label"> <strong>Designation</strong></label>
							<div class="col-sm-10">
								<select id="designation" name="designation" class="form-control" />
									<OPTION value="">Select Please</OPTION>
									<OPTION VALUE="coo" <?php if($r['designation'] == 'coo'){ echo "selected";} ?>>COO</OPTION>
									<OPTION VALUE="accountsmanager" <?php if($r['designation'] == 'accountsmanager'){ echo "selected";} ?> >Accounts Manager</OPTION>
									<OPTION VALUE="saccounts" <?php if($r['designation'] == 'saccounts'){ echo "selected";} ?> >Senior Accounts</OPTION>
									<OPTION VALUE="jaccounts" <?php if($r['designation'] == 'jaccounts'){ echo "selected";} ?> >Jonior Accounts </OPTION>
									<OPTION VALUE="manager" <?php if($r['designation'] == 'manager'){ echo "selected";} ?> >Manager</OPTION>
									<OPTION VALUE="srexcutivesm" <?php if($r['designation'] == 'srexcutivesm'){ echo "selected";} ?> >Senior Executive Sales & Maeketing</OPTION>
									<OPTION VALUE="excutive" <?php if($r['designation'] == 'excutive'){ echo "selected";} ?> >Executive Sales & Maeketing</OPTION>
									<OPTION VALUE="headofdesign" <?php if($r['designation'] == 'headofdesign'){ echo "selected";} ?> >Head of Design</OPTION>
									<OPTION VALUE="srdesign" <?php if($r['designation'] == 'srdesign'){ echo "selected";} ?> >Senior Design Engineer</OPTION>
									<OPTION VALUE="jrdesign"<?php if($r['designation'] == 'jrdesign'){ echo "selected";} ?> >Jonior Design Engineer </OPTION>
									<OPTION VALUE="headofit" <?php if($r['designation'] == 'headofit'){ echo "selected";} ?> >Head of IT</OPTION>
									<OPTION VALUE="itassistant" <?php if($r['designation'] == 'itassistant'){ echo "selected";} ?> >Assistant of IT</OPTION>
									<OPTION VALUE="headofofofficeassistant" <?php if($r['designation'] == 'headofofofficeassistant'){ echo "selected";} ?> >Head of Office Assistant</OPTION>
									<OPTION VALUE="jrofficeassistan" <?php if($r['designation'] == 'jrofficeassistan'){ echo "selected";} ?> >Jonior Office Assistant</OPTION>
									<OPTION VALUE="Others" <?php if($r['designation'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>							
								</select>
							</div>
						</div>
						<div class="form-group">
							<label for="emp_leave_balance" class="col-sm-2 control-label">Leave Balance</label>					
								<div class="col-sm-10">
									<input type="text" name="emp_leave_balance"  class="form-control" id="emp_leave_balance" value="<?php echo $r['emp_leave_balance']; ?>" placeholder="Leave Balance" //>
								</div>
						</div>
					
					
				</div>
			</div>			
			
			
			
			
			
			<button type="submit" class="btn btn-lg btn-block btn-success">Update Again Please</button> </br>
		</form>
	</div>
</div>
</body>
</html>								