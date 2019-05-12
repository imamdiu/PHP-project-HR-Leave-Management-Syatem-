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
	//require_once "header.inc.php";
	//require_once('../db.inc.php');
	
	$user_id = $_GET['user_id'];
	$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST))
	{
		$user_name = mysql_real_escape_string($_POST['user_name']);		
		$email = mysql_real_escape_string($_POST['email']);
		if (preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
		{
			if (preg_match("/^[_\.0-9a-zA-Z-][_0-9a-zA-Z]{2,9}$/i", $user_name)) 
			{	
				$sql_u = "SELECT * FROM users WHERE user_name='$user_name'";
				$res_u = mysqli_query($conn, $sql_u);
				if (mysqli_num_rows($res_u) > 0) 
				{
					echo "User Name already exist!";
				
				
				}else{
					$UpdateSql = "UPDATE `users` SET user_id='$user_id', user_name='$user_name', email='$email'
					WHERE user_id=$user_id";
					$res = mysqli_query($conn, $UpdateSql);
					if($res){
						echo '<script>window.location="user_index_view.php"</script>';
						}else{
						$fmsg = "Failed to update data......";
					}
			
				}
			}else{
					echo "Please type a User Name!";
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
				</div>
				<form class="form-horizontal" method="POST">
					   			
					<div class="box-body">
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
<?php require_once "leave_form_footer.php";?>	