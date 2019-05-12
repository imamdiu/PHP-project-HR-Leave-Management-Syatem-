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
		
		$upload_dir = 'uploads/';
?>

<?php
  require_once('db.php');
  $upload_dir = 'uploads/';

  if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];
    $sql = "select * from users where user_id=".$user_id;
   
   $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
    }else {
      $errorMsg = 'Could not Find Any Record';
    }
  }

	if(isset($_POST['Submit'])){
		//$name = $_POST['user_name'];
		

		$imgName = $_FILES['image']['name'];
		$imgTmp = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

		if($imgName){

			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					unlink($upload_dir.$row['image']);
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
			}
		}else{

			$userPic = $row['image'];
		}

		if(!isset($errorMsg)){
			$sql = "update users
						set 
						user_name = '".$user_name."',
							
							
							image = '".$userPic."'
					where user_id=".$user_id;
			$result = mysqli_query($conn, $sql);
			if($result){
				$successMsg = 'New record updated successfully';
				
				//header('Location:index_image.php');
			}else{
				$errorMsg = 'Error '.mysqli_error($conn);
			}
		}

	}

?>

<br>
<div class="row">
	<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
		<nav class="navbar navbar-inverse bg-color:green;" id="navbar">
		    <div class="container-fluid " id="navbar">
				<div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
					<ul class="nav navbar-nav">
				
					  <li class="active" style="margin-left:40px;"><a href="personal_info_edit.php?user_id=<?php echo $row['user_id']; ?>">Personalss</a></li>
					  <li><a href="contact_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Conatct</a></li>
					  <li><a href="educational_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Educational</a></li>
					  <li><a href="#" style="margin-left:40px;">Professional</a></li>
					  <li><a href="profile_image_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Protograph</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>
</div>

			<div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
				<div class="row">
					<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
							<div class="box box-primary">
								<div class="box-body">
								
										<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
											<div class="form-group">
													<img src="<?php echo $upload_dir.$row['image'] ?>" height="200"width="200">
											</div>
										</div>
										<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
											<input type="file" class="form-control" name="image" value="">
										</div>

								</div>
						</div>
				</div>
			</div>

					<div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
						<div class="form-group">
							<div class="row">
								<button type="submit" name="Submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Profile Image</b></button>
							</div>
						</div>
					</div>	
			</form>
             
<?php require_once "leave_form_footer.php"?>
