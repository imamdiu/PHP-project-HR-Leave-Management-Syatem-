<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="row">
							<h5 class="box-title"><strong>Personal Details</strong></h5>
							<hr>	
								
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
						
<!-- Left col -->
        <div class="col-md-10 col-sm-10 col-xs-12 pull-right">
			<!-- MAP & BOX PANE -->
			<div class="box box-success">
				<div class="box-header with-border text-center">
				  <h3 class="box-title">Personal Info..</h3>

				  <div class="box-tools ">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				  </div>
				</div>
				
				<!-- /.box-header -->
				<div class="box-body" style="border:0; padding-left:30px; padding-right:30px;">
					<div class="row">
						
						<?php
						$user_id = $_SESSION['user_id'];
						//$sql = "SELECT * FROM updatee_personal_info  WHERE user_id = '$user_id'";
						
						$sql =" SELECT  user_id, fname, lname, father_name,mother_name,
										gender,marital_status, dob,
										blood,religion,nationality,nid,about_you,
										
										TIMESTAMPDIFF( YEAR, dob, now() ) as year , 
										TIMESTAMPDIFF( MONTH, dob, now() ) % 12 as month , 
										FLOOR( TIMESTAMPDIFF( DAY, dob, now() ) % 30.4375 ) as days 
								
						   FROM `updatee_personal_info` WHERE user_id = '$user_id'";
						   
						$result = $conn->query($sql);
						
						
						while($row = mysqli_fetch_assoc($result)) 
						{ 
						?>
						
				
				
						
						
						<div class="col-md-6 col-sm-12 col-xs-12 ">
							<div class="row">
								<table style="width:100%;" >
									<?php
										$user_id = $_SESSION['user_id'];
										$sql = "SELECT * FROM updatee_contact_info  WHERE user_id = '$user_id'";
										$result = $conn->query($sql);
										while($r = mysqli_fetch_assoc($result))
										{
										?> 
									<tbody>
									<div class=" text-center">
									<h5 class="box-title"><strong>Emergency Contact</strong></h5>
										
										
										
										<tr>
										   <td><?php echo "<b>Name of Person  <b/>"?></td>
										   <td><?php echo $r['em_name']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>Mobile NO.  <b/>"?></td>
										   <td><?php echo $r['em_mobile']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>Mobile No (Optional)  <b/>"?></td>
										   <td><?php echo $r['em_mobile2']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>Email  <b/>"?></td>
										   <td><?php echo $r['em_email']?></td>
										</tr>
										<hr>
									</div>	
									</tbody>
								</table>
								<hr>		
									<table style="width:100%;" >	
										<tbody>	
											<div class=" text-center">
											<h5 class="box-title"><strong>Present Address</strong></h5>
											<hr>
												<tr>
												   <td><?php echo "<b>Address  <b/>"?></td>
												   <td><?php echo $r['address'] ?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>Thana  <b/>"?></td>
												   <td><?php echo $r['thana']?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>District  <b/>"?></td>
												   <td><?php echo $r['district']?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>Division  <b/>"?></td>
												   <td><?php echo $r['division']?></td>
												</tr>
											</div>
										</tbody>
									</table>
									<hr>
									
									
									<table style="width:100%;" >	
										<tbody>
											<div class=" text-center">
											<h5 class="box-title"><b>Permanent Address</b></h5>
											<hr>
												<tr>
												   <td><?php echo "<b>Address  <b/>"?></td>
												   <td><?php echo $r['paddress'] ?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>Thana  <b/>"?></td>
												   <td><?php echo $r['pthana']?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>District  <b/>"?></td>
												   <td><?php echo $r['pdistrict']?></td>
												</tr>
												<tr>
												   <td><?php echo "<b>Division  <b/>"?></td>
												   <td><?php echo $r['pdivision']?></td>
												</tr> 
											</div>	
										</tbody>
									</table>
									
		

								<?php } ?>	
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
						
						
							
	

						<?php }?>	

					</div>
					<!-- /.row -->
				</div>
			
			</div>
			<!-- /.row -->
		</div>
		<!-- /.row -for ------9----->
		

<form class="form-horizontal" method="POST">
									<div class="box-body">
										<div class="form-group">
											<label for="user_id" class="col-sm-6 control-label">Full Name : </label>
											<span class="test">
												<div class="col-sm-6">
														<p class="form-control-static"><?php echo $row['fname']. " ". $row['lname'] ?></p>
												</div>
											</span>
										</div>
									</div>
									<div class="box-body">
										<div class="form-group">
											<label for="user_id" class="col-sm-6 control-label">Father's Name : </label>
											<span class="test">
												<div class="col-sm-6">
													<p class="form-control-static"><?php echo $row['father_name'] ?></p>
												</div>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label for="lname" class="col-sm-6 control-label">Father's Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['father_name']; ?>" >	
										</div>
									</div>
									<div class="form-group">
										<label for="lname" class="col-sm-6">Mother Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['mother_name']; ?>" >	
										</div>
									</div>
									
										
									
									
									
									</form>
								

<form class="form-horizontal" method="POST">
									<div class="box-body">
										<div class="form-group">
											<label for="user_id" class="col-sm-6 control-label">Full Name : </label>
											<span class="test">
												<div class="col-sm-6">
														<p class="form-control-static"><?php echo $row['fname']. " ". $row['lname'] ?></p>
												</div>
											</span>
										</div>
									</div>
									<div class="box-body">
										<div class="form-group">
											<label for="user_id" class="col-sm-6 control-label">Father's Name : </label>
											<span class="test">
												<div class="col-sm-6">
													<p class="form-control-static"><?php echo $row['father_name'] ?></p>
												</div>
											</span>
										</div>
									</div>
									
									<div class="form-group">
										<label for="lname" class="col-sm-6 control-label">Father's Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['father_name']; ?>" >	
										</div>
									</div>
									<div class="form-group">
										<label for="lname" class="col-sm-6">Mother Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['mother_name']; ?>" >	
										</div>
									</div>
									
										
									
									
									
									</form>
								

<label for="lname" class="col-sm-6 control-label">Mother's Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['mother_name']; ?>" >	
										</div>
										
										<label for="lname" class="col-sm-5 control-label">Gender : </label>
										<div class="col-sm-7" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['gender']; ?>" >	
										</div>
										<label for="lname" class="col-sm-5 control-label">Marital Status : </label>
										<div class="col-sm-7" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['marital_status']; ?>" >	
										</div>
										
										
										<div class="form-group">
										<label for="lname" class="col-sm-6 control-label">Father's Name : </label>
										<div class="col-sm-6" >
											<input type="text" class="form-control-static" style="border:0;" value="<?php echo $row['father_name']; ?>" >	
										</div>
										</div>
									
										

<!-- /.col (right) -col-md-6----->	
		<!-- Left col -->
        <div class="col-md-10 col-sm-10 col-xs-12 pull-right">
			<!-- MAP & BOX PANE -->
			<div class="box box-success">
				<div class="box-header with-border text-center">
				  <h3 class="box-title">Personal Info..</h3>

				  <div class="box-tools ">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				  </div>
				</div>		
		
		<div class="col-md-6 col-sm-10 col-xs-12 text-left">
			<div class="box box-primary">
				<h5 class="box-title text-center"><strong>Personal Details..</strong></h5>
				<hr>
				
				  
				<form class="form-horizontal text-left" method="POST">

					<div class="box-body">
						<div class="form-group">
							<label for="user_id" class="col-sm-6 control-label">This User ID</label>
							<span class="test">
								<div class="col-sm-6">
									<input type="text" name="user_id"  class="form-control" user_id="user_id" value="<?php echo $r['user_id']; ?>" placeholder="First Name" required="required" readonly="readonly"/>
								</div>
							</span>
						</div>
						
						
						
						<div class="form-group">
							<label for="fname" class="col-sm-6 control-label">First Name...</label>
							<div class="col-sm-6">
								<span style="border:0; pointer-events: none;">
									<input type="text" name="fname"  class="form-control-static" user_id="fname" style="border:0;" value="<?php echo $r['fname']; ?>" placeholder="First Name" required="required" readonly="readonly"/>
								</span>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="lname" class="col-sm-6 control-label">Last Name</label>
							<div class="col-sm-6" >
							<span style="border:none; pointer-events: none; user-select: none; background: transparent;color: #000;">
								<input type="text" class="form-control-static" name="lname" style="border:0;" class="form-control" user_id="lname" value="<?php echo $r['lname']; ?>" placeholder="Last Name" required="required" readonly="readonly"/>
							</span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="input1" class="col-sm-6 control-label">Father's Name : </label>
							<div class="col-sm-6">
								<p class="form-control-static" class="form-control input-sm"><?php echo $r['father_name']; ?></p>
							</div>
						</div>
						<div class="form-group">
							<label for="input1" class="col-sm-6 control-label"  required>Mother's Nameeee : </label>
							<div class="col-sm-6">
								<p class="form-control-static" class="form-control input-sm"><?php echo $r['mother_name']; ?></p>
							</div>
						</div>
						
						<div class="form-group" class="form-control input-sm">
							<label for="input1" class="col-sm-6 control-label"  required>Mother's eeeName : </label>
							<div class="col-sm-6" >
								<input type="text" name="em_email" style="border:0; height:5px;" class="form-control-static" id="em_email" value="<?php echo $r['mother_name']; ?>" placeholder="Email"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="em_email" class="col-sm-2 control-label">Email </label>
							<div class="col-sm-10">
								<input type="text" name="em_email"  class="form-control" id="em_email" value="<?php echo $r['mother_name']; ?>" placeholder="Email"/>
							</div>
						</div>	
						
						<div class="form-group" class="radio">
							<label for="gender" class="col-sm-4 control-label" >Gender</label>
							<div class="col-sm-8">
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="male" <?php if($r['gender'] == 'male'){ echo "checked";} ?>> Male
								</label>
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="female" <?php if($r['gender'] == 'female'){ echo "checked";} ?>> Female
								</label>
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="others" <?php if($r['gender'] == 'others'){ echo "checked";} ?>> Other's
								</label>
							</div>
						</div>
						
						<div class="form-group">
							<label for="dob" class="col-sm-4 control-label"> <strong>Date of Birth </strong></label>
							<div class="col-sm-8">
								<input type="text" name="dob"  class="form-control" value="<?php echo $r['dob']; ?>" disabled>
								
							</div>
						</div>
						
						<div class="form-group">
							<label for="dob" class="col-sm-4 control-label" >Change Date of Birth</label>
							<div class="col-sm-8">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <!--input type="text" name="dob" class="form-control" user_id="date"-->
								  <input type="text" name="dob" class="form-control pull-right" id="date"/>
								</div>
							</div>	
						</div>
						
						
						
						<div class="form-group">
							<label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
							<div class="col-sm-8">
								<select id="marital_status" name="marital_status" class="form-control" required="required"/>
									<option value="Married" <?php if($r['marital_status'] == 'married'){ echo "selected";} ?> >Married</option>
									<option value="Unmarried" <?php if($r['marital_status'] == 'unmarried'){ echo "selected";} ?> >Unmarried</option>
									<option value="Widowed" <?php if($r['marital_status'] == 'widowed'){ echo "selected";} ?> >Widowed</option>
									<option value="Single" <?php if($r['marital_status'] == 'single'){ echo "selected";} ?> >Single</option>			
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="blood" class="col-sm-4 control-label" required>Blood Group</label>
							<div class="col-sm-8">
								<select id="blood" name="blood" class="form-control" required="required"/>
									<OPTION VALUE="A +ve" <?php if($r['blood'] == 'A +ve'){ echo "selected";} ?> >A +ve </OPTION>
									<OPTION VALUE="A -ve" <?php if($r['blood'] == 'A -ve'){ echo "selected";} ?> >A -ve </OPTION>
									<OPTION VALUE="B +ve" <?php if($r['blood'] == 'B +ve'){ echo "selected";} ?> >B +ve </OPTION>
									<OPTION VALUE="B -ve" <?php if($r['blood'] == 'B -ve'){ echo "selected";} ?> >B -ve </OPTION>
									<OPTION VALUE="O +ve" <?php if($r['blood'] == 'O +ve'){ echo "selected";} ?> >O +ve </OPTION>
									<OPTION VALUE="O -ve" <?php if($r['blood'] == 'O -ve'){ echo "selected";} ?> >O -ve </OPTION>
									<OPTION VALUE="AB +ve" <?php if($r['blood'] == 'AB +ve'){ echo "selected";} ?> >AB +ve </OPTION>
									<OPTION VALUE="AB -ve" <?php if($r['blood'] == 'AB -ve'){ echo "selected";} ?> >AB -ve </OPTION>							
								</select>
							</div>
						</div>			
						<div class="form-group">																				
							<label for="religion" class="col-sm-4 control-label"> <strong>Religion </strong></label>
							<div class="col-sm-8">
								<select id="religion" name="religion" class="form-control" required="required"/>
									<option>Select Again Please</option>
									<OPTION VALUE="Islam" <?php if($r['religion'] == 'Islam'){ echo "selected";} ?> >Islam</OPTION>
									<OPTION VALUE="Hindu" <?php if($r['religion'] == 'Hindu'){ echo "selected";} ?> >Hindu</OPTION>
									<OPTION VALUE="Christian" <?php if($r['religion'] == 'Christian'){ echo "selected";} ?> >Christian</OPTION>
									<OPTION VALUE="Buddhist" <?php if($r['religion'] == 'Buddhist'){ echo "selected";} ?> >Buddhist </OPTION>
									<OPTION VALUE="Others" <?php if($r['religion'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>								
								</select>
							</div>
						</div>			
						<div class="form-group">
							<label for="nationality" class="col-sm-4 control-label"> <strong>Nationality</strong></label>
							<div class="col-sm-8">
								<select id="nationality" name="nationality" class="form-control" required="required"/>
									<option>Select Again Please</option>
									<OPTION VALUE="Bangladeshi" <?php if($r['nationality'] == 'Bangladeshi'){ echo "selected";} ?> >Bangladeshi</OPTION>
									<OPTION VALUE="Asian" <?php if($r['nationality'] == 'Asian'){ echo "selected";} ?> >Asian</OPTION>
									<OPTION VALUE="American" <?php if($r['nationality'] == 'American'){ echo "selected";} ?> >American</OPTION>
									<OPTION VALUE="South African" <?php if($r['nationality'] == 'South African'){ echo "selected";} ?> >South African </OPTION>								
									<OPTION VALUE="Austrilian"<?php if($r['nationality'] == 'Austrilian'){ echo "selected";} ?> >Austrilian </OPTION>
									<OPTION VALUE="European" <?php if($r['nationality'] == 'European'){ echo "selected";} ?> >European </OPTION>
									<OPTION VALUE="Others" <?php if($r['nationality'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>								
								</select>
							</div>
						</div>		
						<div class="form-group">
							<label for="nid" class="col-sm-4 control-label"> <strong>National ID </strong></label>
							<div class="col-sm-8">
								<input type="number" name="nid" style="border:0;" class="form-control-static" value="<?php echo $r['nid']; ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="about_you" class="col-sm-6 control-label">About You</label>
							
								<div class="col-sm-6">	
								<span style="border:0;">
									<textarea class="form-control-static" style="border:0;" rows="3" name="about_you" id="about_you" placeholder="Please write About You" readonly="readonly"> <?php echo $r['about_you']; ?></textarea>
								</span>
								</div>
							
						</div>
						
						<div class="form-group">
						  <div class="col-sm-offset-4 col-sm-8">
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
		
		
		<div class="col-md-6 col-sm-10 col-xs-12 pull-right">
			<div class="box box-primary">
			    <h5 class="box-title text-center"><strong>Emergency Contact</strong></h5>
				<hr>
				
				<form class="form-horizontal" method="POST">

					<div class="box-body">
						<div class="form-group">
							<label for="user_id" class="col-sm-4 control-label">This User ID</label>
							<span class="test">
								<div class="col-sm-8">
									<input type="text" name="user_id"  class="form-control" user_id="user_id" value="<?php echo $r['user_id']; ?>" placeholder="First Name" required="required" readonly="readonly"/>
								</div>
							</span>
						</div>
						
						
						
						<div class="form-group">
							<label for="fname" class="col-sm-4 control-label">First Name</label>
							<div class="col-sm-8">
								<span style="border:0; pointer-events: none;">
									<input type="text" name="fname"  class="form-control" user_id="fname" value="<?php echo $r['fname']; ?>" placeholder="First Name" required="required" readonly="readonly"/>
								</span>
							</div>
						</div>
						
						
						<div class="form-group">
							<label for="lname" class="col-sm-4 control-label">Last Name</label>
							<div class="col-sm-8" >
							<span style="border:none; pointer-events: none; user-select: none; background: transparent;color: #000;">
								<input type="text" name="lname" style="border:0;" class="form-control" user_id="lname" value="<?php echo $r['lname']; ?>" placeholder="Last Name" required="required" readonly="readonly"/>
							</span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label">Father's Name</label>
							<div class="col-sm-8">
							<span style="border:0;">
								<input type="text" name="father_name"  class="form-control" user_id="input1" value="<?php echo $r['father_name']; ?>"placeholder="Father's Name" required="required"/>
							</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label"  required>Mother's Name</label>
							<div class="col-sm-8">
								<input type="text" name="mother_name"  class="form-control" user_id="input1" value="<?php echo $r['mother_name']; ?>"placeholder="Mother's Name" />
							</div>
						</div>
						
						<hr>
						 <h5 class="box-title text-center"><strong>Present Address</strong></h5>
							<hr> 
				
						<div class="form-group" class="radio">
							<label for="gender" class="col-sm-4 control-label" >Gender</label>
							<div class="col-sm-8">
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="male" <?php if($r['gender'] == 'male'){ echo "checked";} ?>> Male
								</label>
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="female" <?php if($r['gender'] == 'female'){ echo "checked";} ?>> Female
								</label>
								<label>
									<input type="radio" name="gender" user_id="OPTIONsRadios1" value="others" <?php if($r['gender'] == 'others'){ echo "checked";} ?>> Other's
								</label>
							</div>
						</div>
						
						<div class="form-group">
							<label for="dob" class="col-sm-4 control-label"> <strong>Date of Birth </strong></label>
							<div class="col-sm-8">
								<input type="text" name="dob"  class="form-control" value="<?php echo $r['dob']; ?>" disabled>
								
							</div>
						</div>
						
						<div class="form-group">
							<label for="dob" class="col-sm-4 control-label" >Change Date of Birth</label>
							<div class="col-sm-8">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <!--input type="text" name="dob" class="form-control" user_id="date"-->
								  <input type="text" name="dob" class="form-control pull-right" id="date"/>
								</div>
							</div>	
						</div>
						
						<hr>
						 <h5 class="box-title text-center"><strong>Permanent Address</strong></h5>
							<hr> 
						
						<div class="form-group">
							<label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
							<div class="col-sm-8">
								<select id="marital_status" name="marital_status" class="form-control" required="required"/>
									<option value="Married" <?php if($r['marital_status'] == 'married'){ echo "selected";} ?> >Married</option>
									<option value="Unmarried" <?php if($r['marital_status'] == 'unmarried'){ echo "selected";} ?> >Unmarried</option>
									<option value="Widowed" <?php if($r['marital_status'] == 'widowed'){ echo "selected";} ?> >Widowed</option>
									<option value="Single" <?php if($r['marital_status'] == 'single'){ echo "selected";} ?> >Single</option>			
								</select>
							</div>
						</div>
						
						<div class="form-group">
							<label for="blood" class="col-sm-4 control-label" required>Blood Group</label>
							<div class="col-sm-8">
								<select id="blood" name="blood" class="form-control" required="required"/>
									<OPTION VALUE="A +ve" <?php if($r['blood'] == 'A +ve'){ echo "selected";} ?> >A +ve </OPTION>
									<OPTION VALUE="A -ve" <?php if($r['blood'] == 'A -ve'){ echo "selected";} ?> >A -ve </OPTION>
									<OPTION VALUE="B +ve" <?php if($r['blood'] == 'B +ve'){ echo "selected";} ?> >B +ve </OPTION>
									<OPTION VALUE="B -ve" <?php if($r['blood'] == 'B -ve'){ echo "selected";} ?> >B -ve </OPTION>
									<OPTION VALUE="O +ve" <?php if($r['blood'] == 'O +ve'){ echo "selected";} ?> >O +ve </OPTION>
									<OPTION VALUE="O -ve" <?php if($r['blood'] == 'O -ve'){ echo "selected";} ?> >O -ve </OPTION>
									<OPTION VALUE="AB +ve" <?php if($r['blood'] == 'AB +ve'){ echo "selected";} ?> >AB +ve </OPTION>
									<OPTION VALUE="AB -ve" <?php if($r['blood'] == 'AB -ve'){ echo "selected";} ?> >AB -ve </OPTION>							
								</select>
							</div>
						</div>			
						<div class="form-group">																				
							<label for="religion" class="col-sm-4 control-label"> <strong>Religion </strong></label>
							<div class="col-sm-8">
								<select id="religion" name="religion" class="form-control" required="required"/>
									<option>Select Again Please</option>
									<OPTION VALUE="Islam" <?php if($r['religion'] == 'Islam'){ echo "selected";} ?> >Islam</OPTION>
									<OPTION VALUE="Hindu" <?php if($r['religion'] == 'Hindu'){ echo "selected";} ?> >Hindu</OPTION>
									<OPTION VALUE="Christian" <?php if($r['religion'] == 'Christian'){ echo "selected";} ?> >Christian</OPTION>
									<OPTION VALUE="Buddhist" <?php if($r['religion'] == 'Buddhist'){ echo "selected";} ?> >Buddhist </OPTION>
									<OPTION VALUE="Others" <?php if($r['religion'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>								
								</select>
							</div>
						</div>			
						<div class="form-group">
							<label for="nationality" class="col-sm-4 control-label"> <strong>Nationality</strong></label>
							<div class="col-sm-8">
								<select id="nationality" name="nationality" class="form-control" required="required"/>
									<option>Select Again Please</option>
									<OPTION VALUE="Bangladeshi" <?php if($r['nationality'] == 'Bangladeshi'){ echo "selected";} ?> >Bangladeshi</OPTION>
									<OPTION VALUE="Asian" <?php if($r['nationality'] == 'Asian'){ echo "selected";} ?> >Asian</OPTION>
									<OPTION VALUE="American" <?php if($r['nationality'] == 'American'){ echo "selected";} ?> >American</OPTION>
									<OPTION VALUE="South African" <?php if($r['nationality'] == 'South African'){ echo "selected";} ?> >South African </OPTION>								
									<OPTION VALUE="Austrilian"<?php if($r['nationality'] == 'Austrilian'){ echo "selected";} ?> >Austrilian </OPTION>
									<OPTION VALUE="European" <?php if($r['nationality'] == 'European'){ echo "selected";} ?> >European </OPTION>
									<OPTION VALUE="Others" <?php if($r['nationality'] == 'Others'){ echo "selected";} ?> >Other's </OPTION>								
								</select>
							</div>
						</div>		
						<div class="form-group">
							<label for="nid" class="col-sm-4 control-label"> <strong>National ID </strong></label>
							<div class="col-sm-8">
								<input type="number" name="nid"  class="form-control" value="<?php echo $r['nid']; ?>"/>
							</div>
						</div>

						<div class="form-group">
							<label for="about_you" class="col-sm-4 control-label">About You</label>
							
								<div class="col-sm-8">	
								<span style="border:0;">
									<textarea class="form-control" style="border:0;" rows="3" name="about_you" id="about_you" placeholder="Please write About You"> <?php echo $r['about_you']; ?></textarea>
								</span>
								</div>
							
						</div>
						
						<div class="form-group">
							<label for="address" class="col-sm-2 control-label">Addresswww</label>
							<div class="col-sm-10">	
							<span style="border:0;">	
								<textarea class="form-control-static" style="border:0;" rows="3" name="address" id="address" placeholder="Please write About You"> <?php echo $r['about_you']; ?></textarea>
							</span>
							</div>
						</div>
						
						<div class="form-group">
						  <div class="col-sm-offset-4 col-sm-8">
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
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->		
		
		