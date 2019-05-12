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

		require_once "profile_update_navbar.php";
?>
<?php	
	
	$user_id = $_GET['user_id'];
	$SelSql = "SELECT * FROM `updatee_contact_info` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST)){
		        $mobile = $_POST['mobile'];		
				$mobile2 = $_POST['mobile2'];
				$email2 = $_POST['email2'];
				
				$em_name = $_POST['em_name'];		
				$em_mobile = $_POST['em_mobile'];
				$em_mobile2 = $_POST['em_mobile2'];
				$em_email = $_POST['em_email'];
				
				$address = $_POST['address'];		
				
				$thana = $_POST['thana'];
				$district = $_POST['district'];
				$division = $_POST['division'];
				
				$paddress = $_POST['paddress'];		
				$pthana = $_POST['pthana'];
				$pdistrict = $_POST['pdistrict'];
				$pdivision = $_POST['pdivision'];
	
				$UpdateSql = "UPDATE `updatee_contact_info` SET mobile='$mobile', mobile2='$mobile2',email2='$email2',
				em_name='$em_name', em_mobile='$em_mobile',em_mobile2='$em_mobile2',em_email='$em_email',
				address='$address', thana='$thana', district='$district', division='$division',
				paddress='$paddress', pthana='$pthana', pdistrict='$pdistrict', pdivision='$pdivision'
			
				WHERE user_id=$user_id"; //WHERE id=$id";
				
				$res = mysqli_query($conn, $UpdateSql);
				
				if($res){
					//header('location: view_contact_info.php');
					echo '<script>window.location="personal_info_view.php"</script>';
					echo"Update Information Sucessfully.....thanks";
					}else{
					$fmsg = "Failed to update data......";
				}
			//}			
	}
?>


<!-- Main content -->

<section class="content">
	<div class="row">

	<form class="form-horizontal" method="POST">
		<div class="col-md-6">
			<div class="box box-primary">
				
			<!--form method="post" class="form-horizontal col-md-6 col-md-offset-3"-->
				<div class="panel panel-primary">
					<div class="panel-body">
						<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> Contact Details (Update Again)</strong></h5>
						<hr>
						
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label">Mobile NO.</label>					
							<div class="col-sm-7">
								<input type="number" name="mobile"  class="form-control" id="mobile" value="<?php echo $r['mobile']; ?>" placeholder="Mobile NO." //>
							</div>
						</div>
						
						<div class="form-group">
							<label for="mobile4" class="col-sm-4 control-label">Mobile No 2 (Optional)</label>
							<div class="col-sm-7">
								<input type="number" name="mobile2"  class="form-control" id="mobile2" value="<?php echo $r['mobile2']; ?>"placeholder="Mobile No 2 (Optional)"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="email2" class="col-sm-4 control-label">Email 2 (Optional)</label>
							<div class="col-sm-7">
								<input type="text" name="email2"  class="form-control" id="email2" value="<?php echo $r['email2']; ?>"placeholder="Alternate Email (Optional)"/>
							</div>
						</div>				
						
					</div>
				</div>			
				
				<div class="panel panel-primary">
					<div class="panel-body">
						<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> For Emergency Contact (Update Again)</strong></h5>
						<hr>
						
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label">Name of That Person</label>					
							<div class="col-sm-7">
								<input type="text" name="em_name"  class="form-control" id="em_name" value="<?php echo $r['em_name']; ?>"  placeholder="Name of That Person" //>
							</div>
						</div>
						
						<div class="form-group">
							<label for="em_mobile" class="col-sm-4 control-label">Mobile NO.</label>					
							<div class="col-sm-7">
								<input type="number" name="em_mobile"  class="form-control" id="em_mobile" value="<?php echo $r['em_mobile']; ?>" placeholder="Mobile NO." //>
							</div>
						</div>
						
						<div class="form-group">
							<label for="em_mobile2" class="col-sm-4 control-label">Mobile No 2 (Optional)</label>
							<div class="col-sm-7">
								<input type="number" name="em_mobile2"  class="form-control" id="em_mobile2" value="<?php echo $r['em_mobile2']; ?>" placeholder="Mobile No 2 (Optional)"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="em_email" class="col-sm-4 control-label">Email </label>
							<div class="col-sm-7">
								<input type="text" name="em_email"  class="form-control" id="em_email" value="<?php echo $r['em_email']; ?>" placeholder="Email"/>
							</div>
						</div>				
					</div>
				</div>	
        </div>
				</div>
  	<div class="col-md-6">
			<div class="box box-primary">
				
			<!--form method="post" class="form-horizontal col-md-6 col-md-offset-3"-->
			

				<div class="panel panel-primary">
					<div class="panel-body">
						<h5 class="text-on-pannel text-primary"><strong class="text-uppercase"> Present Address </strong></h5>
						<hr>
						
						<div class="form-group">
							<label for="address" class="col-sm-4 control-label">Address</label>
							<div class="col-sm-7">	
								
								<textarea class="form-control" rows="2" name="address" id="address" placeholder="Please write About You"> <?php echo $r['address']; ?></textarea>
							</div>
						</div>
										
					
						<div class="form-group">
							<label for="thana" class="col-sm-4 control-label">Thana</label>					
							<div class="col-sm-7">
								<input type="text" name="thana"  class="form-control" id="thana" value="<?php echo $r['thana']; ?>"placeholder="Thana" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="district" class="col-sm-4 control-label">District/City</label>					
							<div class="col-sm-7">
								<input type="text" name="district"  class="form-control" id="district" value="<?php echo $r['district']; ?>"placeholder="Districtsss"/>
							</div>
						</div>
						<div class="form-group">																				
							<label for="division" class="col-sm-4 control-label"> <strong>Division /State </strong></label>
							<div class="col-sm-7">
								<select id="division" name="division" class="form-control"/>
								<!--OPTION>Select Again Please</OPTION-->
								<OPTION VALUE="Barisal" <?php if($r['division'] == 'Barisal'){ echo "Barisal";} ?> >Barisal Division</OPTION>
								<OPTION VALUE="Chittagong" <?php if($r['division'] == 'Chittagong'){ echo "Chittagong";} ?> >Chittagong Division</OPTION>
								<OPTION VALUE="Dhaka" <?php if($r['division'] == 'Dhaka'){ echo "Dhaka";} ?> >Dhaka Division</OPTION>
								<OPTION VALUE="Khulna" <?php if($r['division'] == 'Khulna'){ echo "Khulna";} ?> >Khulna Division </OPTION>
								<OPTION VALUE="Rajshahi" <?php if($r['division'] == 'Rajshahi'){ echo "Rajshahi";} ?> >Rajshahi Division</OPTION>
								<OPTION VALUE="Rangpur" <?php if($r['division'] == 'Rangpur'){ echo "Rangpur";} ?> >Rangpur Division</OPTION>	
								<OPTION VALUE="Sylhet" <?php if($r['division'] == 'Sylhet'){ echo "Sylhet";} ?> >Sylhet Division</OPTION>	
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
							<label for="paddress" class="col-sm-4 control-label">Address</label>
							<div class="col-sm-7">	
								
								<textarea class="form-control" rows="2" name="paddress" id="paddress" placeholder="Please write About You"> <?php echo $r['paddress']; ?></textarea>
							</div>
						</div>
						
						<!--div class="form-group">
							<label for="paddress" class="col-sm-2 control-label">Address</label>
							<div class="col-sm-7">	
								
								<textarea rows="4" cols="57" name="paddress" id="paddress"> <?php// echo $r['paddress']; ?></textarea>
							</div>
						</div-->				
						
						<div class="form-group">
							<label for="pthana" class="col-sm-4 control-label">Thana</label>					
							<div class="col-sm-7">
								<input type="text" name="pthana"  class="form-control" id="pthana" value="<?php echo $r['pthana']; ?>"placeholder="Thana" />
							</div>
						</div>
						
						<div class="form-group">
							<label for="pdistrict" class="col-sm-4 control-label">District/City</label>					
							<div class="col-sm-7">
								<input type="text" name="pdistrict"  class="form-control" id="pdistrict" value="<?php echo $r['pdistrict']; ?>"placeholder="District" />
							</div>
						</div>
						
						
						
						<div class="form-group">																				
							<label for="pdivision" class="col-sm-4 control-label"> <strong>Division /State </strong></label>
							<div class="col-sm-7">
								<select id="pdivision" name="pdivision" class="form-control"/>
								<!--OPTION>Select Again Please</OPTION-->
								<OPTION VALUE="Barisal" <?php if($r['pdivision'] == 'Barisal'){ echo "Barisal";} ?> >Barisal Division</OPTION>
								<OPTION VALUE="Chittagong" <?php if($r['pdivision'] == 'Chittagong'){ echo "Chittagong";} ?> >Chittagong Division</OPTION>
								<OPTION VALUE="Dhaka" <?php if($r['pdivision'] == 'Dhaka'){ echo "Dhaka";} ?> >Dhaka Division</OPTION>
								<OPTION VALUE="Khulna" <?php if($r['pdivision'] == 'Khulna'){ echo "Khulna";} ?> >Khulna Division </OPTION>
								<OPTION VALUE="Rajshahi" <?php if($r['pdivision'] == 'Rajshahi'){ echo "Rajshahi";} ?> >Rajshahi Division</OPTION>
								<OPTION VALUE="Rangpur" <?php if($r['pdivision'] == 'Rangpur'){ echo "Rangpur";} ?> >Rangpur Division</OPTION>	
								<OPTION VALUE="Sylhet" <?php if($r['pdivision'] == 'Sylhet'){ echo "Sylhet";} ?> >Sylhet Division</OPTION>	
							</select>
							</div>
						</div>								
				
					</div>
				</div>			


				<!--button type="submit" class="btn btn-lg btn-block btn-success">Update Again Please</button> </br-->
				<!-- <div class="box-footer">
					<button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
					<button type="submit" class="btn btn-info pull-right">Update</button>
				</div> -->
			
			
      
			<!-- /.box-body -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->	
        <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
			<div class="row">
			<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Contact Info</b></button>
			
			</div>
		</div>
  </div>
  </form>
	<!-- End Row-->
</section>
<?php require_once "leave_form_footer.php"?>					