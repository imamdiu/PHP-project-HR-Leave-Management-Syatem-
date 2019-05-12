<?php 	
		session_start();		
		if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
		{
			header('location:index.php?lmsg=true');
			exit;
		}	
		require_once('../db.inc.php');
		require_once ('header.inc.php');
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
				<p>You are login as User ID :  <strong><?php echo $_SESSION['user_id']; ?></strong></p>
				<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
				<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
				<hr>
			
				  <h3 class="box-title">Update Your Contact Info</h3>
				</div>
				<form class="form-horizontal" action="contact_info_update_submit.php" method="POST">
					   
					
					<div class="box-body">
						<div class="panel panel-primary">
							<div class="panel-body">
								<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> Contact Details </strong></h5>
								<hr>
								<div class="form-group">
									<label for="input1" class="col-sm-2 control-label">Mobile NO.</label>					
									<div class="col-sm-10">
										<input type="number" name="mobile"  class="form-control" id="mobile" placeholder="Mobile NO." //>
									</div>
								</div>
								
								<div class="form-group">
									<label for="mobile2" class="col-sm-2 control-label">Mobile No 2 (Optional)</label>
									<div class="col-sm-10">
										<input type="number" name="mobile2"  class="form-control" id="mobile2" placeholder="Mobile No 2 (Optional)"/>
									</div>
								</div>
								
								<div class="form-group">
									<label for="email2" class="col-sm-2 control-label">Email 2 (Optional)</label>
									<div class="col-sm-10">
										<input type="text" name="email2"  class="form-control" id="email2" placeholder="Alternate Email (Optional)"/>
									</div>
								</div>				
							</div>
						</div>
					
						<div class="panel panel-primary">
							<div class="panel-body">
								<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> For Emergency Contact</strong></h5>
								<hr>
								<div class="form-group">
									<label for="input1" class="col-sm-2 control-label">Name of That Person</label>					
									<div class="col-sm-10">
										<input type="text" name="em_name"  class="form-control" id="mobile" placeholder="Name of That Person" //>
									</div>
								</div>
								
								<div class="form-group">
									<label for="em_mobile" class="col-sm-2 control-label">Mobile NO.</label>					
									<div class="col-sm-10">
										<input type="number" name="em_mobile"  class="form-control" id="em_mobile" placeholder="Mobile NO." //>
									</div>
								</div>
								
								<div class="form-group">
									<label for="em_mobile2" class="col-sm-2 control-label">Mobile No 2 (Optional)</label>
									<div class="col-sm-10">
										<input type="number" name="em_mobile2"  class="form-control" id="em_mobile2" placeholder="Mobile No 2 (Optional)"/>
									</div>
								</div>
								
								<div class="form-group">
									<label for="em_email" class="col-sm-2 control-label">Email </label>
									<div class="col-sm-10">
										<input type="text" name="em_email"  class="form-control" id="em_email" placeholder="Email"/>
									</div>
								</div>				
								
							</div>
						</div>
				
				
						<div class="panel panel-primary">
							<div class="panel-body">
								<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> Present Address</strong></h5>
								<hr>
								<div class="form-group">
									<label for="address" class="col-sm-2 control-label">Address</label>
									<div class="col-sm-10">	
										<!--input type="text" name="padress"  class="form-control" id="input1" placeholder="Present Address" />
										<textarea rows="4" cols="47" name="address" id="address" placeholder="Please write your detail address" ></textarea-->
										<textarea class="form-control" rows="3" name="address" id="address" placeholder="Please write your detail address"></textarea>
									</div>
								</div>				
								
								<div class="form-group">
									<label for="thana" class="col-sm-2 control-label">Thana</label>					
									<div class="col-sm-10">
										<input type="text" name="thana"  class="form-control" id="thana" placeholder="Thana" //>
									</div>
								</div>
								
								<div class="form-group">
									<label for="district" class="col-sm-2 control-label">District / City</label>					
									<div class="col-sm-10">
										<input type="text" name="district"  class="form-control" id="district" placeholder="District" //>
									</div>
								</div>
								
								<div class="form-group">																				
									<label for="division" class="col-sm-2 control-label"> <strong>Division / State </strong></label>
									<div class="col-sm-10">
										<select id="division" name="division" class="form-control" />
											<OPTION value="">Select Please</OPTION>
											<OPTION VALUE="Barisal Division">Barisal Division</OPTION>
											<OPTION VALUE="Chittagong Division">Chittagong Division</OPTION>
											<OPTION VALUE="Dhaka Division">Dhaka Division</OPTION>
											<OPTION VALUE="Khulna Division">Khulna Division </OPTION>
											<OPTION VALUE="Rajshahi Division">Rajshahi Division</OPTION>
											<OPTION VALUE="Rangpur Division">Rangpur Division</OPTION>	
											<OPTION VALUE="Sylhet Division">Sylhet Division</OPTION>	
										</select>
									</div>
								</div>	
							</div>
						</div>
				
						<div class="panel panel-primary">
							<div class="panel-body">
								<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> Permanent Address </strong></h5>
								<hr>
									
								<div class="form-group">
									<label for="paddress" class="col-sm-2 control-label">Address </label>
									<div class="col-sm-10">	
										<!--input type="text" name="padress"  class="form-control" id="input1" placeholder="Present Address" /-->
										<textarea class="form-control" rows="3" name="paddress" id="paddress" placeholder="Please write your detail address"></textarea>
									</div>
								</div>									
								<!-- textarea >
								<div class="form-group">
								  <label>Textarea</label>
								  <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
								</div-->
								
								<div class="form-group">
									<label for="pthana" class="col-sm-2 control-label">Thana</label>					
									<div class="col-sm-10">
										<input type="text" name="pthana"  class="form-control" id="pthana" placeholder="Thana" //>
									</div>
								</div>
								
								<div class="form-group">
									<label for="pdistrict" class="col-sm-2 control-label">District / City</label>					
									<div class="col-sm-10">
										<input type="text" name="pdistrict"  class="form-control" id="pdistrict" placeholder="District" //>
									</div>
								</div>
								
								<div class="form-group">																				
									<label for="pdivision" class="col-sm-2 control-label"> <strong>Division / State </strong></label>
									<div class="col-sm-10">
										<select id="pdivision" name="pdivision" class="form-control"/>
											<OPTION value="">Select Please</OPTION>
											<OPTION VALUE="Barisal Division">Barisal Division</OPTION>
											<OPTION VALUE="Chittagong Division">Chittagong Division</OPTION>
											<OPTION VALUE="Dhaka Division">Dhaka Division</OPTION>
											<OPTION VALUE="Khulna Division">Khulna Division </OPTION>
											<OPTION VALUE="Rajshahi Division">Rajshahi Division</OPTION>
											<OPTION VALUE="Rangpur Division">Rangpur Division</OPTION>	
											<OPTION VALUE="Sylhet Division">Sylhet Division</OPTION>	
										</select>
									</div>
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
	
		