<?php session_start();		
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
<!-- /.col (left) -->
<br>
<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header">
                    <h2 class="box-title"><b>Update Your Password </h2>
                    <hr>
                    <p>You are login as User ID : <strong>
                            <?php echo $_SESSION['user_id']; ?></strong></p>
                    <p>You are login as Role ID : <strong>
                            <?php echo $_SESSION['user_role_id']; ?></strong></p>
                    <p>You are login as USer Name : <strong>
                            <?php echo $_SESSION['user_name']; ?></strong></p>
                    <!--form class="form-horizontal" action="personal_info_update_submit.php" method="POST"-->
                    <hr>
                </div>

                <!-- <table style="border:0;" class="table table-condensed">
<tbody>
	<div class=" text-center">
		 <h5 class="box-title"><strong>Personal Details</strong></h5>
		<tr>
			<td>
				<?php echo "<b>You are login as User ID  <b/>"?>
			</td>
			<td>
				<?php echo $_SESSION['user_id']; ?>
			</td>
		</tr>
	</div>
</tbody>
</table> -->
                <form class="form-horizontal" action="change_pass_submit.php" method="POST">
                    <div class="box-body">
                        
						<div class="form-group">
                            <label for="opass" class="col-sm-4 control-label">Old Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="opass" class="form-control" id="opass" placeholder="Old Password"
                                    require="require" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="npass" class="col-sm-4 control-label">New Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="npass" class="form-control" id="npass" placeholder="New Password"
                                    require="require" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="cnpass" class="col-sm-4 control-label">Confirm Password</label>
                            <div class="col-sm-7">
                                <input type="password" name="cnpass" class="form-control" id="cnpass" placeholder="Confirm Password"
                                    require="require" />
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
                        <button type="submit" class="btn btn-info pull-right" name="submit">Update Password</button>
                        <!--input type="submit" name="submit"-->
                    </div>

                </form>
                <!-- /.box-body -->

            </div>
            <!-- /.box >
        </div-->
            <!-- /.col (right) -col-md-6----->
        </div>
        <!-- End Row-->
</section>


<?php require_once "leave_form_footer.php"?>