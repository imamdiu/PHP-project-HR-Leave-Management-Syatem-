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

		require_once "profile_update_navbar.php";
?>
<?php	
	$user_id = $_GET['user_id'];
	$SelSql = "SELECT * FROM `updatee_personal_info` WHERE user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	
	$r = mysqli_fetch_assoc($res);	
	
	if(isset($_POST) & !empty($_POST)){
		
		$fname = mysql_real_escape_string($_POST['fname']);
		$lname = mysql_real_escape_string($_POST['lname']);
		
		$father_name = mysql_real_escape_string($_POST['father_name']);
		$mother_name = mysql_real_escape_string($_POST['mother_name']);
		
		
		$gender = $_POST['gender'];	
		$marital_status = $_POST['marital_status'];
		
		$blood = $_POST['blood'];
		$religion = $_POST['religion'];
		
		$nationality = $_POST['nationality'];
		$nid = $_POST['nid'];
		
		$about_you = $_POST['about_you'];
		$dob = $_POST['dob'];	
		
		
		
		//Code for check possitibe interger...........							
		if(!ctype_digit($nid)){
			echo "please enter a positibe integer number";
		}
		else{						
			//Code for check Valid Date of birth for age...............(Negative BOD is not possible)				                                      						
			if( strtotime($dob) > strtotime('now')){
				echo"...invalid date of birth...It is not possible that our are still born\n";
			}					
			else{
				//Convert date of Bith m/d/y to Y-m-d..........
				$dob = date("Y-m-d",strtotime( $dob));
				
				$UpdateSql = "UPDATE `updatee_personal_info` SET fname='$fname', lname='$lname',father_name='$father_name', mother_name='$mother_name', 
				gender='$gender', dob='$dob', marital_status='$marital_status', blood= '$blood', religion='$religion',
				nationality='$nationality', nid= '$nid', about_you='$about_you'
				
				WHERE user_id=$user_id";
				
				$res = mysqli_query($conn, $UpdateSql);
				if($res){
					//header('location: header.inc.php');
					//redirect('personal_info_index.php');
					//header('Location: personal_info_index.php'); //Redirect user
					//Redirect('Location: personal_info_index.php');
					echo '<script>window.location="personal_info_view.php"</script>';
					echo"Update Information Sucessfully.....thanks";
					}else{
					$fmsg = "Failed to update data......";
				}
			}		
		}
	}
?>
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="style_nav.css">

 <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      
      th, td {
        text-align: center;
        padding: 8px;
      }
      
      tr:nth-child(even){background-color: #f2f2f2}
      
      th {
        background-color: #4CAF50;
        color: white;
      }
	  
	  #navbar a {
    float: none;
    display: block;
    text-align: center;
  }
   </style>
<!-- Main content -->

    
<section class="content">
  <div class="row">

	<form class="form-horizontal" method="POST">
    <div class="col-md-6">
			<div class="box box-primary">			
        <div class="box-body">

						<div class="form-group">
							<label for="fname" class="col-sm-4 control-label">First Name</label>
							<div class="col-sm-7">
								<input type="text" name="fname"  class="form-control" user_id="fname" value="<?php echo $r['fname']; ?>" placeholder="First Name" required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label for="lname" class="col-sm-4 control-label">Last Name</label>
							<div class="col-sm-7">
								<input type="text" name="lname"  class="form-control" user_id="lname" value="<?php echo $r['lname']; ?>" placeholder="Last Name" required="required"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label">Father's Name</label>
							<div class="col-sm-7">
								<input type="text" name="father_name"  class="form-control" user_id="input1" value="<?php echo $r['father_name']; ?>"placeholder="Father's Name" required="required"/>
							</div>
						</div>
						<div class="form-group">
							<label for="input1" class="col-sm-4 control-label"  required>Mother's Name</label>
							<div class="col-sm-7">
								<input type="text" name="mother_name"  class="form-control" user_id="input1" value="<?php echo $r['mother_name']; ?>"placeholder="Mother's Name" />
							</div>
						</div>
						
						<div class="form-group" class="radio">
							<label for="gender" class="col-sm-4 control-label" >Gender</label>
							<div class="col-sm-7">
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
							<div class="col-sm-7">
								<input type="text" name="dob"  class="form-control" value="<?php echo $r['dob']; ?>" disabled>
								
							</div>
						</div>
						
						<div class="form-group">
							<label for="dob" class="col-sm-4 control-label" >Change Date of Birth</label>
							<div class="col-sm-7">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <!--input type="text" name="dob" class="form-control" user_id="date"-->
								  <input type="text" name="dob" class="form-control pull-right" id="date"/>
								</div>
							</div>	
						</div>
						

					</div>					
					<div class="box-footer">
						<!-- <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
						<button type="submit" class="btn btn-info pull-right">Update</button> -->
					</div>
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
    </div>
    <!-- /.col (right) -col-md-6----->	
		
    <div class="col-md-6">
			<div class="box box-primary">
					<div class="box-body">
			
      <div class="form-group">
        <label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
        <div class="col-sm-7">
          <select id="marital_status" name="marital_status" class="form-control" required="required"/>
					  <option>Select Please</option>
            <option value="Married" <?php if($r['marital_status'] == 'married'){ echo "selected";} ?> >Married</option>
            <option value="Unmarried" <?php if($r['marital_status'] == 'unmarried'){ echo "selected";} ?> >Unmarried</option>
            <option value="Widowed" <?php if($r['marital_status'] == 'widowed'){ echo "selected";} ?> >Widowed</option>
            <option value="Single" <?php if($r['marital_status'] == 'single'){ echo "selected";} ?> >Single</option>			
          </select>
        </div>
      </div>
      
      <div class="form-group">
        <label for="blood" class="col-sm-4 control-label" required>Blood Group</label>
        <div class="col-sm-7">
          <select id="blood" name="blood" class="form-control" required="required"/>
					  <option>Select Please</option>
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
        <div class="col-sm-7">
          <select id="religion" name="religion" class="form-control" required="required"/>
            <option>Select Please</option>
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
        <div class="col-sm-7">
          <select id="nationality" name="nationality" class="form-control" required="required"/>
            <option>Select Please</option>
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
        <div class="col-sm-7">
          <input type="number" name="nid"  class="form-control" value="<?php echo $r['nid']; ?>"/>
        </div>
      </div>

      <div class="form-group">
        <label for="about_you" class="col-sm-4 control-label">About You</label>
        <div class="col-sm-7">	
          
          <textarea class="form-control" rows="3" name="about_you" id="about_you" placeholder="Please write About You"> <?php echo $r['about_you']; ?></textarea>
        </div>
      </div>
      
    </div>
    
    <div class="box-footer">
      <!-- <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
      <button type="submit" class="btn btn-info pull-right">Update</button> -->
    </div>
    	
				<!-- /.box-body -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->	

		<div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
			<div class="row">
			<button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>
			
			</div>
		</div>
		
		</form>		
		<!--end form--->
<br>
<hr>

 
  </div><!-- /.row -->
</section><!-- /.content -->  



<?php require_once "leave_form_footer.php"?>	