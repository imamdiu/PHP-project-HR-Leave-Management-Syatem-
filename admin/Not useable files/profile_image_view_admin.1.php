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
  include('db.php');
  $upload_dir = 'uploads/';

  if(isset($_GET['delete'])){
		$user_id = $_GET['delete'];
		//$sql = "select * from contacts where user_id = ".$user_id;
		$sql = "select * from users where user_id = '$user_id'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from users where user_id=".$user_id;
			if(mysqli_query($conn, $sql)){
				header('location:index_image.php');
			}
		}
	}
?>


<br>
<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->

<div class="container-fluid">
    <!-- Content here -->
    <div layout="column" layout-gt-sm="row" flex="" layout-align="center center" md-colors="{background:'teal-50'}"
        class="md-whiteframe-3dp ng-scope layout-gt-sm-row layout-align-center-center layout-column flex" style="background: rgb(224, 242, 241); color: rgba(0, 0, 0, 0.87);">
        <h4 class="md-headline ng-binding">Profile Images View By Admin (All Users) </h4>
    </div>
</div>
<br>

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="box box-body box-success">
        <div class="card-content table-responsive">

            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>User Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
									//only visible to all ()
									if($_SESSION['user_role_id'] == 2){
									?>
                    <?php
									$sql = "select * from users where user_id = '$user_id'";
									$result = mysqli_query($conn, $sql);
											if(mysqli_num_rows($result)){
												while($row = mysqli_fetch_assoc($result)){
								  ?>
                    <tr>
                        <td>
                            <?php echo $row['user_id'] ?>
                        </td>

                        <td>
                            <?php echo $row['user_name'] ?>
                        </td>
                        <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="140" width="140"></td>

                        <td class="text-center">
                            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-success"><i
                                    class="glyphicon glyphicon-picture"></i></a>
                            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-info"><i
                                    class="glyphicon glyphicon-edit"></i></a>
                        </td>
                    </tr>
                    <?php
									  }
									}
								  ?>
                    <?php } ?>

                    <?php 
									//only visible to all (Not show Delete ICON)
									if($_SESSION['user_role_id'] == 1){
									?>
                    <?php
									$sql = "select * from users ";
									$result = mysqli_query($conn, $sql);
											if(mysqli_num_rows($result)){
												while($row = mysqli_fetch_assoc($result)){
								  ?>
                    <tr>
                        <td>
                            <?php echo $row['user_id'] ?>
                        </td>

                        <td>
                            <?php echo $row['user_name'] ?>
                        </td>
                        <td><img src="<?php echo $upload_dir.$row['image'] ?>" height="140" width="140"></td>

                        <td class="text-center">
                            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-success"><i
                                    class="glyphicon glyphicon-picture"></i></a>
                            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-info"><i
                                    class="glyphicon glyphicon-edit"></i></a>
                            <!--a href="index.php?delete=<?php //echo $row['user_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="glyphicon glyphicon-remove"></i></a-->
                            <?php 
									//only visible to admin (Show all aceess)
									if($_SESSION['user_role_id'] == 1)
									{
									?>
                            <button type="button" class="glyphicon  btn btn-danger btn-lx" data-toggle="modal"
                                data-target="#myModal<?php echo $row['user_id']; ?>">Delete</button>
                            <!--Modal -->
                            <div class="modal fade" id="myModal<?php echo $row['user_id']; ?>" role="dialog">
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
                                            <a href="profile_image_delete.php?user_id=<?php echo $row['user_id']; ?>"><button
                                                    type="button" target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php }?>
                        </td>
                    </tr>
                    <?php
									  }
									}
								  ?>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?php require_once "footer.inc.php"?>
<?php //require_once "leave_form_footer.php"?>