<div class="col-md-9 col-sm-8">
							<div class="pad">
								<!-- Map will be created here -->
								<div id="world-map-markers" style="height: 525px;"></div>
							</div>
						</div>
						<!-- /.col -->
						
						<div class="col-md-3 col-sm-4">
						  
						  
						  
						</div>
						<!-- /.col -->

<div class="panel">
            <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                     <a role="button" class="" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     Personal Details&nbsp;<i class="indicator icon-minus"></i>
                                     </a>
                                  </h4>
             </div><!-- end of headingOne div -->
             <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" style="height: auto;">
                                  <div class="panel-body">
                                     <div class="all-info per_0">
                                        <div class="sub-header">
                                           
                                           <!--<h4>Your personal information</h4>-->
                                           <div class="edit-tools">
                                              <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
                                              
                                           </div>
                                        </div>
    										<div id="alertDiv_per"></div>
                                        <form class="row view-mode" id="personalForm">
                                         
                                        <div class="col-md-6">
                                        	<div class="row">
                                            	<div class="form-group col-md-12">
                                       			<label for="">First Name&nbsp;<abbr title="Required" class="required"></abbr></label>
                                       			<input type="text" class="form-control" placeholder="" value="Mohammad Imam" name="txtFirstName" id="txtFirstName">
                                    		</div>
                                            	<div class="form-group col-md-12">
                                       			<label for="">Last Name</label>
                                       			<input type="text" class="form-control" placeholder="" value="Hossain" name="txtLastName" id="txtLastName">
                                    		</div>
                                            	<div class="form-group col-md-12">
                                              <label for="">Father's Name</label>
                                              <input type="text" class="form-control" placeholder="" value="Mohammad Ishak Mia" name="txtFName" id="txtFName">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Mother's Name</label>
                                              <input type="text" class="form-control" placeholder="" value="Kaniz Fatima" name="txtMName" id="txtMName">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Date of Birth&nbsp;<abbr title="Required" class="required"></abbr></label>
                                              <input type="text" class="form-control datepicker" placeholder="" value="6/5/1992" name="txtBirthDate" id="txtBirthDate">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Gender&nbsp;<abbr title="Required" class="required"></abbr></label>
                                              <select name="cboGender" id="cboGender" class="form-control">
                                                 <option value="-1" selected="">Select</option>
                                                 <option value="M" selected="">Male</option>
                                                 <option value="F">Female</option>
                                                 <option value="O">Others</option>
                                              </select>
												
                                       		</div>
                                            	<div class="form-group col-md-12">
                                              <label for="">Religion</label>
                                              <input type="text" class="form-control" placeholder="" value="Islam" name="txtReligion" id="txtReligion">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Marital Status&nbsp;<abbr title="Required" class="required"></abbr></label>
                                              <select name="cboMStatus" id="cboMStatus" class="form-control">
                                                <option value="-1" selected="selected">Select</option>
                                                <option value="2" selected="">Unmarried</option>
                                                <option value="1"> Married </option>
                                                <option value="3"> Single </option>
                                              </select>
                                           </div>

                                          
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                            <!-- Start Nationality -->
                                            <div class="form-group col-md-12">
                                                <div class="title-wrap">
                                                    <label for="">Nationality&nbsp;<abbr title="Required" class="required"></abbr></label>
                                                    <input class="form-control onclick-hidden" id="nViewFild" placeholder="" value="Bangladeshi" type="text">
                                                    <div class=" btn-form-control hidden">
                                                        <div>
                                                            <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" name="txtNationality" onclick="DisableNationality();" value="Bangladeshi" checked="" id="bangladeshi"> Bangladeshi
                                                            </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row btn-form-control hidden">
                                                    <div class="col-md-12">
                                                        <input type="text" class="form-control nationality" placeholder="For other country please type." value="Bangladeshi" name="txtNationality" id="otherNationality" disabled="">
                                                    </div>
                                                </div>                                             
                                            </div>
                                            <!-- End Nationality -->

                                           <div class="form-group col-md-12">
                                              <label for="">National Id No</label>
                                             <input type="text" class="form-control" placeholder="" value="19921913368660000" name="txtNationalId" id="txtNationalId">
                                           </div>                                       
    									   	<div class="form-group col-md-12">
                                              <label for="" class="sui">Mobile No 1
                                              
                                             <a href="https://mybdjobs.bdjobs.com/mybdjobs/set_userId/mobile_step_01.asp" class="btn"><i class="icon-plus"></i>&nbsp;<span>Set as User Id</span></a>
                                             
                                               <small class="btn-form-control hidden color-green">(Provide at least one Phone Number)</small></label>
                                              <input type="text" class="form-control" placeholder="" value="01726543381" name="txtMobile" id="txtMobile">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Mobile No 2</label>
                                             <input type="text" class="form-control" placeholder="" value="01727841933" name="txtPhone_H" id="txtPhone_H">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Mobile No 3</label>
                                            <input type="text" class="form-control" placeholder="" value="01710769079" name="txtPhone_Off" id="txtPhone_Off">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="" class="sui">Email 
                                              
                                              <a href="https://mybdjobs.bdjobs.com/mybdjobs/set_userId/email_step_01.asp" class="btn"><i class="icon-plus"></i>&nbsp;<span>Set as User Id</span></a>
                                               
                                              <small class="btn-form-control hidden color-green">(Do not enter/provide more than one e-mail address in either of the fields)</small></label>
                                              <input type="text" class="form-control" placeholder="" value="imamhossain15890@gmail.com" name="txtEmail1" id="txtEmail1">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">Alternate Email</label>
                                              <input type="text" class="form-control" placeholder="" value="imam_890@diu.edu.bd" name="txtEmail2" id="txtEmail2">
                                              <input type="hidden" name="h_catId" value="">
                                           </div>
                                            </div>
                                     		
                                         </div>
                                            <div class="col-md-12">
                                                <div class="btn-form-control hidden">
                                                   <a href="javascript:void(0)" class="btn btn-primary save" onclick="cnahgeValuePer();commonUpdate('step_01_update_per_p.asp','personalForm','per_0','EN');" id="perbtn-save">Save</a>
                                                   <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="btn btn-default btn-cancel reset">Close</a>
                                                </div>
                                            </div>
                                        </form>
    
                                     </div>
                                     <!-- <div class="loader">Loading...</div> -->
                                     
                                  </div>
              </div><!-- end of collapseOne div-->
        </div><!-- end of personal details panel-->
      

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
				
				<div class="col-md-6">
                    <div class="row">
						<table class="table table-hover">
							
							<tbody>
								<tr>
								   <td><?php echo "<b>Full Name  <b/>"?></td>
								   <td><?php echo $row['fname']. " ". $row['lname'] ?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Father's Name  <b/>"?></td>
								   <td><?php echo $row['father_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Mother's Name  <b/>"?></td>
								   <td><?php echo $row['mother_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Gender  <b/>"?></td>
								   <td><?php echo $row['gender']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Marital Status  <b/>"?></td>
								   <td><?php echo $row['marital_status']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Date Of Birth  <b/>"?></td>
								   <td><?php echo $row['dob']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>AGE  <b/>"?></td>
								   <td><?php echo $row['year']?></td>
								</tr>
								
							</tbody>
						</table>					
											
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				
				
				<div class="col-md-6">
                    <div class="row">
											
											
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			<?php }?>	
				
			</div>
			<!-- /.box -->
        </div>
        <!-- /.col -->  
		
		
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
				
				
				<div class="col-md-6 box-body no-padding">
                    <div class="row">
						<table class="table table-hover">
							
							<tbody>
								<tr>
								   <td><?php echo "<b>Full Name  <b/>"?></td>
								   <td><?php echo $row['fname']. " ". $row['lname'] ?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Father's Name  <b/>"?></td>
								   <td><?php echo $row['father_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Mother's Name  <b/>"?></td>
								   <td><?php echo $row['mother_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Gender  <b/>"?></td>
								   <td><?php echo $row['gender']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Marital Status  <b/>"?></td>
								   <td><?php echo $row['marital_status']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Date Of Birth  <b/>"?></td>
								   <td><?php echo $row['dob']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>AGE  <b/>"?></td>
								   <td><?php echo $row['year']?></td>
								</tr>
								
							</tbody>
						</table>					
											
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
				
						<div class="col-md-6">
							<div class="row">
													
													
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->
	<div class="col-md-6 ">
							<div class="row">
								<table style="width:100%;">
									
									<tbody>
										<tr>
										   <td><?php echo "<b>Blood Group  <b/>"?></td>
										   <td><?php echo $row['blood']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>Religion  <b/>"?></td>
										   <td><?php echo $row['religion']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>Nationality  <b/>"?></td>
										   <td><?php echo $row['nationality']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>National ID  <b/>"?></td>
										   <td><?php echo $row['nid']?></td>
										</tr>
										<tr>
										   <td><?php echo "<b>About You  <b/>"?></td>
										   <td><?php echo $row['about_you']?></td>
										</tr>
										
										
									</tbody>
								</table>					
													
							</div>
							<!-- /.box -->
						</div>
						<!-- /.col -->					

			<?php }?>	
			
			
			<div class="col-md-6 box-body no-padding">
                    <div class="row">
						<table class="table table-hover">
							
							<tbody>
								<tr>
								   <td><?php echo "<b>Full Name  <b/>"?></td>
								   <td><?php echo $row['fname']. " ". $row['lname'] ?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Father's Name  <b/>"?></td>
								   <td><?php echo $row['father_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Mother's Name  <b/>"?></td>
								   <td><?php echo $row['mother_name']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Gender  <b/>"?></td>
								   <td><?php echo $row['gender']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Marital Status  <b/>"?></td>
								   <td><?php echo $row['marital_status']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>Date Of Birth  <b/>"?></td>
								   <td><?php echo $row['dob']?></td>
								</tr>
								<tr>
								   <td><?php echo "<b>AGE  <b/>"?></td>
								   <td ><?php echo $row['about_you']?></td>
								</tr>
								
							</tbody>
						</table>					
											
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->