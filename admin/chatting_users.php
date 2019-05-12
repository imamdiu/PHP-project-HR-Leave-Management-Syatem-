<?php session_start();		
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
   


   <!-- /.col (left) -->
        <br>
	<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-6">
			<div class="box box-primary">
				<div class="box-header">
				  <h3 class="box-title">Internat Chatting </h3>
				<hr>
					<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
					<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
					<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<hr>
					<button class="btn  btn-info">
						<a href="chatting_users_view.php" target="_blank"> <b>View Your Post </b></a>
					</button>
				<hr>
				</div>
				<!--form class="form-horizontal" action="personal_info_update_submit.php" method="POST"-->
				<form class="form-horizontal" action="chatting_users_submit.php" method="POST">	   					
					<div class="box-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<div class="form-group">
									<label for="title" class="col-sm-2 control-label">Post Title</label>
									<div class="col-sm-10">
										<input type="text" name="title"  class="form-control" id="title" placeholder="Post Title" required="required"/>
									</div>
								</div>
								<div class="form-group">
									<label for="content" class="col-sm-2 control-label">Content</label>
									<div class="col-sm-10">	
										<textarea class="form-control" rows="3" name="content" id="content" placeholder="Please write your content" required="required"></textarea>
									</div>
								</div>
								<!--div class="form-group">
									<label for="content" class="col-sm-2 control-label">Content</label>
									<div class="col-sm-10">
										<input type="text" name="content"  class="form-control" id="content" placeholder="content" required="required"/>
									</div>
								</div-->
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
						<!--button type="submit" class="btn btn-info pull-right">Update</button-->
						<input type="submit" name="submit" class="btn btn-mg  btn-success pull-right">
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
	
		