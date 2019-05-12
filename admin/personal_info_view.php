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
  
?>


<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->
<!-- <link rel="stylesheet" type="text/css" href="style_nav.css"> -->
<link rel="stylesheet" type="text/css" href="style.css">

</br>

<?php
	$user_id = $_SESSION['user_id'];
	$sql =" SELECT *FROM `updatee_personal_info` WHERE user_id = '$user_id'";
	$result = $conn->query($sql);
	while($row = mysqli_fetch_assoc($result)) 
	{ 
?>
<div class="container-fluid">
    <!-- Content here -->
    <div layout="column" layout-gt-sm="row" flex="" layout-align="center center" md-colors="{background:'teal-50'}"
        class="md-whiteframe-3dp ng-scope layout-gt-sm-row layout-align-center-center layout-column flex" style="background: rgb(224, 242, 241); color: rgba(0, 0, 0, 0.87);">
        <h4 class="md-headline ng-binding">Profile of
            <?php echo $row['fname']. " ". $row['lname'] ?>
        </h4>
    </div>
</div>

<?php } ?>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-3 col-sm-3 col-xs-12">
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
                    
                      $sql = "select * from users where user_id = '$user_id'";
					$result = mysqli_query($conn, $sql);
						if(mysqli_num_rows($result)){
							while($row = mysqli_fetch_assoc($result)){
			    ?>


            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo $upload_dir.$row['profile_image'] ?>"
                        alt="User profile picture">


                    <h3 class="profile-username text-center">
                        <?php echo $row['user_name']; ?>
                    </h3>
                    <p class="text-muted text-center">Software Engineer</p>
                </div><!-- /.box -->
            </div>


            <a href="personal_info_edit.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-primary btn-block">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b>Edit Profile</b></a>

            <br>

            <?php
                }
                }
            ?>
            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <strong><i class="fa fa-book margin-r-5"></i> Education</strong>
                    <p class="text-muted">
                        B.S. in Computer Science from the University of Tennessee at Knoxville
                    </p>

                    <hr>

                    <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
                    <p class="text-muted">Malibu, California</p>

                    <hr>

                    <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
                    <p>
                        <span class="label label-danger">UI Design</span>
                        <span class="label label-success">Coding</span>
                        <span class="label label-info">Javascript</span>
                        <span class="label label-warning">PHP</span>
                        <span class="label label-primary">Node.js</span>
                    </p>

                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->

        <!-- Left col -->
        <div class="col-md-9 col-sm-9 col-xs-12">
            <!-- MAP & BOX PANE -->
            <div class="box box-success">
                <div class="box-header with-border text-center">
                    <h3 class="box-title">Personal & Contact</h3>

                    <div class="box-tools pull-right">
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
                        <div class="table_line_height">
                            <div class="col-md-6 col-md-offset-0 col-sm-12 col-xs-12">
                                <div class="row">

                                    <table style="border:0;" class="table table-condensed">

                                        <tbody>
                                            <div class=" text-center">
                                                <h5 class="box-title"><strong>Personal Details</strong></h5>

                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Full Name  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['fname']. " ". $row['lname'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Father's Name  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['father_name']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Mother's Name  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['mother_name']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Gender  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['gender']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Marital Status <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['marital_status']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Date Of Birth  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['dob']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>AGE  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['year']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Blood Group  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['blood'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Religion  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['religion']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Nationality  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nationality']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>National ID  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['nid']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>About You  <b/>"?>
                                                    </td>
                                                    <td class="td_add">
                                                        <?php echo $row['about_you']?>
                                                    </td>
                                                </tr>



                                            </div>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col -->
                        </div>

                        <div class="col-md-6 col-md-offset-0 col-sm-12 col-xs-12">
                            <div class="row">

                                <?php
										$user_id = $_SESSION['user_id'];
										$sql = "SELECT * FROM updatee_contact_info  WHERE user_id = '$user_id'";
										$result = $conn->query($sql);
										while($r = mysqli_fetch_assoc($result))
										{
										?>
                                <table class="table table-condensed">
                                    <tbody>
                                        <div class=" text-center">
                                            <h5 class="box-title"><strong>Emergency Contact</strong></h5>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Name of Person  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['em_name']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Mobile NO.  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['em_mobile']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Mobile No. 2<b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['em_mobile2']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Email  <b/>"?>
                                                </td>
                                                <td class="td_add">
                                                    <?php echo $r['em_email']?>
                                                </td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>


                                <table class="table table-condensed">
                                    <tbody>
                                        <div class="text-center">
                                            <h5 class="box-title"><strong>Present Address</strong></h5>

                                            <tr>
                                                <td>
                                                    <?php echo "<b>Address  <b/>"?>
                                                </td>
                                                <td class="td_add">
                                                    <?php echo $r['address'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Thana  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['thana']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>District  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['district']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Division  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['division']?>
                                                </td>
                                            </tr>
                                        </div>
                                    </tbody>
                                </table>



                                <table class="table table-condensed">
                                    <tbody>
                                        <div class=" text-center">
                                            <h5 class="box-title"><b>Permanent Address</b></h5>

                                            <tr>
                                                <td>
                                                    <?php echo "<b>Address  <b/>"?>
                                                </td>
                                                <td class="td_add">
                                                    <?php echo $r['paddress'] ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Thana  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['pthana']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>District  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['pdistrict']?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php echo "<b>Division  <b/>"?>
                                                </td>
                                                <td>
                                                    <?php echo $r['pdivision']?>
                                                </td>
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

    </div><!-- /.row -->
</section><!-- /.content -->


<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="box box-body box-success">
        <div class="box-header with-border text-center">
            <h3 class="box-title">Educational</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
        </div>

        <div class="card-content table-responsive">

            <table id="example1" class="table table-bordered table-responsive table-hover table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Degree Name</th>
                        <th>Concentration/ Major/Group </th>
                        <th>Institute</th>
                        <th>University/ Board</th>

                        <th>Passing Year</th>
                        <th>GPA/Devision (Out Of)</th>
                        <th>CGPA/ Marks</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>

<?php
    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM updatee_educational_info  WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result))
    {
?>
                    <tr>
                        <td>
                            <?php echo $r['degree_title']; ?>
                        </td>
                        <td>
                            <?php echo $r['major_group']; ?>
                        </td>
                        <td>
                            <?php echo $r['inst_name']; ?>
                        </td>
                        <td>
                            <?php echo $r['uni_board']; ?>
                        </td>
                        <td>
                            <?php echo $r['pass_year']; ?>
                        </td>
                        <td>
                            <?php echo $r['grade_division']; ?>
                        </td>
                        <td>
                            <?php echo $r['marks_cgpa']; ?>
                        </td>
                        <td>
                            <?php echo $r['remarks']; ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="conatiner-fluid">
    <div class="row">

    </div>
</div>
<?php require_once "leave_form_footer.php"?>