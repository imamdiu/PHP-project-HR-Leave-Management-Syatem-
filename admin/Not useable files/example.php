<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Leave Application</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    </div>
                </div>

                <!-- /.box-header -->
                <div class="box-body" style="border:0; padding-left:30px; padding-right:30px;">
                    <div class="row">

<?php
						// For show Full Name...........
						$sql = "SELECT * FROM updatee_personal_info  WHERE user_id = '$user_id'";
						$result = $conn->query($sql);
						$row = mysqli_fetch_assoc($result);
					
							//For Show department, designation..... 
							$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
							$res = mysqli_query($conn, $SelSql);
							$r = mysqli_fetch_assoc($res);

                        $user_id = $_SESSION['user_id'];
						//For leave info from draft leave from table....	
						$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						$res_draft = mysqli_query($conn, $SelSql);
						$rd = mysqli_fetch_assoc($res_draft);

					?>
<div class="table_line_height">
<div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
    <div class="row">
        <table style="border:0;" class="table ">
            <tbody>
                <div class=" text-center">
                    <h5 class="box-title"><strong>Leave Details</strong></h5>

                    <tr>
                        <td>
                            <?php echo "<b>From Date <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['fromdate']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<b>To Date <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['todate']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<b>Total Days <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['days']?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo "<b>Join Date <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['joindate']?>
                        </td>
                    </tr>
                    <tr>
                        <td class="td_add">
                            <?php echo "<b>Reason  <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['reason_leave']?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <?php echo "<b>Leave Apply Date  <b/>"?>
                        </td>
                        <td>
                            <?php echo $rd['todaySdate']?>
                        </td>
                    </tr>


                    <div>
            </tbody>
        </table>

    </div>
    <!-- /.box -->
</div>
<!-- /.col 666 Right-->
</div>
</div>

</div>
<!-- /.row -->
</div>

</div>
<!-- /.row -->
</div>
<!-- /.row -for ------9----->

</div>
</section

<p>You are login as Userww ID : <strong>
        <?php echo $_SESSION['user_id']; ?></strong></p>
<p>You are login as Role ID : <strong>
        <?php echo $_SESSION['user_role_id']; ?></strong></p>
<p>You are login as USer Name : <strong>
        <?php echo $_SESSION['user_name']; ?></strong></p>

<hr>


<table id="example1" class="table table-bordered table-striped">


    <thead>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>User Name</th>

            <th>Action</th>

            <th>Today's Date</th>
            <th>From Date</th>
            <th>To Date</th>

            <th>Days</th>
            <th>Reason of Leave</th>

            <th>Join Date</th>
        </tr>
    </thead>
    <tbody>


        <?php 
					//only visible to admin (For Delete User Info)
					//if($_SESSION['user_role_id'] == 1){
				?>


        <?php
				
				$sql = "SELECT * FROM leave_form_history  WHERE user_id = '$user_id'";
				$result = $conn->query($sql);
				while($r = mysqli_fetch_assoc($result))
				{
				?>
        <tr>
            <th scope="row">
                <?php echo $r['id']; ?>
            </th>
            <td>
                <?php echo $r['user_id']; ?>
            </td>

            <td>
                <?php echo $r['user_name']; ?>
            </td>
            <td>
                <a href="personal_info_edit.php?user_id=<?php echo $r['user_id']; ?>" target="_blank"><span class="glyphicon glyphicon-edit"
                        aria-hidden="true"></span>Update Leave History</a>

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
                                <a href="leave_history_delete.php?id=<?php echo $r['id']; ?>"><button type="button"
                                        target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
                            </div>
                        </div>

                    </div>
                </div>
                <?php }?>
            </td>

            <td>
                <?php echo $r['todaySdate']; ?>
            </td>
            <td>
                <?php echo $r['fromdate']; ?>
            </td>

            <td>
                <?php echo $r['todate']; ?>
            </td>
            <td>
                <?php echo $r['days']; ?>
            </td>

            <td>
                <?php echo $r['reason_leave']; ?>
            </td>

            <td>
                <?php echo $r['joindate']; ?>
            </td>

        </tr>
        <?php } ?>
        <?php// } ?>
    </tbody>
</table>


<?php
				
					
				$user_id = $_GET['user_id'];
				$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
				$res = mysqli_query($conn, $SelSql);
				
				$ree = mysqli_fetch_assoc($res);
				
				echo "<b>This USer ID : </b>" ." ".$ree['user_id'];
				echo "<br><b>This USer Name : </b>" ." ".$ree['user_name'];
		?>
<hr>


<tbody>


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
            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-success"><i class="glyphicon glyphicon-picture"></i></a>
            <a href="profile_image_edit.php?user_id=<?php echo $row['user_id'] ?>" class="btn btn-info"><i class="glyphicon glyphicon-edit"></i></a>
            <!--a href="index.php?delete=<?php //echo $row['user_id'] ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete this record?')"><i class="glyphicon glyphicon-remove"></i></a-->
            <?php 
									//only visible to admin (Show all aceess)
									if($_SESSION['user_role_id'] == 1)
									{
									?>
            <button type="button" class="glyphicon  btn btn-danger btn-lx" data-toggle="modal" data-target="#myModal<?php echo $row['user_id']; ?>">Delete</button>
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
                            <a href="profile_image_delete.php?user_id=<?php echo $row['user_id']; ?>"><button type="button"
                                    target="_blank" class="btn btn-danger"> Yes..! Delete</button></a>
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

<section class="content">

    <div class="col-md-8 col-sm-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
        <div class="box box-primary">

            <!--form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
					<div class="panel-body"-->

            <form class="" action="" method="post" enctype="multipart/form-data">
                <div class="form-group ">
                    <label for="image" class="text-center">Choose Image</label>
                    <br><br>
                    <hr>
                    <img src="<?php echo $upload_dir.$row['image'] ?>" height="200" width="200">
                    <br>
                    <hr>

                    <div class="col-sm-7">
                        <input type="file" class="form-control" name="image" value="">
                    </div>


                </div>


        </div>
    </div>



    <input type="file" class="form-control" name="image" value="">
    </div>
    <div class="form-group">
        <label for="fname" class="col-sm-4 control-label">Choose Image</label>
        <div class="col-sm-7">
            <input type="file" class="form-control" name="image" value="">
        </div>
    </div>
    <br>