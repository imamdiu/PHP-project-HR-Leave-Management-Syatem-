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
?>
<?php	
	if(isset($_POST) & !empty($_POST)){
		$degree_title = mysql_real_escape_string($_POST['degree_title']);
		$major_group = mysql_real_escape_string($_POST['major_group']);
		$inst_name = mysql_real_escape_string($_POST['inst_name']);
		$uni_board = mysql_real_escape_string($_POST['uni_board']);
		
        $pass_year = $_POST['pass_year'];
        $grade_division = $_POST['grade_division'];
        $marks_cgpa = $_POST['marks_cgpa'];
		$remarks = $_POST['remarks'];

        if ($degree_title && $marks_cgpa)
        {	
        echo " <br> OK... Field are not empty! ";
        if (!preg_match("#[0-9]{4}#", $pass_year)) 
        { 
            echo "<br> Please enter a valid year!";
        }    
            else{
             
            $UpdateSql = "UPDATE `updatee_educational_info` SET degree_title='$degree_title', major_group='$major_group',inst_name='$inst_name', uni_board='$uni_board', 
            pass_year= '$pass_year', grade_division='$grade_division',marks_cgpa='$marks_cgpa', remarks='$remarks'
        
            WHERE id=$id";
            
            $res = mysqli_query($conn, $UpdateSql);
            if($res){            
                //echo '<script>window.location="personal_info_view.php"</script>';
                echo"Update Information Sucessfully.....thanks";
                }else{
                $fmsg = "Failed to update data......";
            }
        }
        
        }else {
            echo "<br> you have to complete the form!";
    }       
	
	}
?>

<!-- Main Sub content for show Sub Navigation Bar----Start-->
<div class="container">
    <?php
$sql = "select * from users where user_id = '$user_id'";
	$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result)){
			while($row = mysqli_fetch_assoc($result)){
?>
    <br>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <nav class="navbar navbar-inverse bg-color:green;" id="navbar">
                <div class="container-fluid " id="navbar">
                    <div class="btn-group btn-group-justified" class="col-md-8 col-md-offset-2">
                        <ul class="nav navbar-nav">

                            <li class="active" style="margin-left:40px;"><a href="personal_info_edit.php?user_id=<?php echo $row['user_id']; ?>">Personalss</a></li>
                            <li><a href="contact_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Conatct</a></li>
                            <li><a href="educational_info_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Educational</a></li>
                            <li><a href="#" style="margin-left:40px;">Professional</a></li>
                            <li><a href="profile_image_edit.php?user_id=<?php echo $row['user_id']; ?>" style="margin-left:40px;">Protograph</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <?php
	}
  }
?>
</div>
<!-- Main Sub content for show Sub Navigation Bar----end-->

<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">

<!-----For Show Educational Info --start-->
<div class="container-fluid">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="box box-body box-success">
                <div class="card-content table-responsive">

                    <table id="example1" class="table table-bordered table-responsive table-hover table-condensed table-striped">
                        <thead>
                            <tr>
                                <th>User Name</th>

                                <th>Action</th>
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
                                    <?php echo $r['user_name']; ?>
                                </td>
                                <td>
                                    <a ng-click="deleteEducationInfo($event, education.degree)" md-colors="{color: 'pink'}"
                                        aria-label="Delete" style="color: rgb(233, 30, 99);cursor: pointer;">
                                        <i class="fa fa-trash" style="font-size: 20px" data-toggle="modal" data-target="#myModal<?php echo $r['user_id']; ?>">
                                        </i>
                                        <!-- <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal<?php //echo $r['id']; ?>">Delete</button> -->
                                        <!--Modal -->
                                        <div class="modal fade" id="myModal<?php echo $r['user_id']; ?>" role="dialog">
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
                                                        <a href="educational_info_delete.php?user_id=<?php echo $r['user_id']; ?>"><button
                                                                type="button" target="_blank" class="btn btn-danger">
                                                                Yes..!
                                                                Delete</button></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>

                                    <a href="educational_info_edit_yes.php?id=<?php echo $r['id']; ?>" ng-click="deleteEducationInfo($event, education.degree)"
                                        md-colors="{color: 'pink'}" aria-label="Delete" style="color: rgb(233, 30, 99);cursor: pointer;"><i
                                            class="fa fa-edit" style="font-size: 20px"> </i>

                                    </a>

                                </td>
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
    </div>
</div>
<!-----For Show Educational Info --end-->

<!----From of Educational Info for Edit--start--->
<section class="content">
    <div class="row">
        <?php  
    $sql = "SELECT * FROM updatee_educational_info  WHERE user_id = '$user_id'";
    $result = $conn->query($sql);
    while($r = mysqli_fetch_assoc($result))
    {
        $id=$r['id'];
        $user_name=$r['user_name'];
    }
    $id = $_GET['id'];
	$SelSql = "SELECT * FROM `updatee_educational_info` WHERE  id=$id AND user_id=$user_id";
	$res = mysqli_query($conn, $SelSql);
	$r = mysqli_fetch_assoc($res);	
	if(isset($_POST) & !empty($_POST)){
        $degree_title = mysql_real_escape_string($_POST['degree_title']);
		$major_group = mysql_real_escape_string($_POST['major_group']);
		$inst_name = mysql_real_escape_string($_POST['inst_name']);
		$uni_board = mysql_real_escape_string($_POST['uni_board']);
		
        $pass_year = $_POST['pass_year'];
        $grade_division = $_POST['grade_division'];
        $marks_cgpa = $_POST['marks_cgpa'];
        $remarks = $_POST['remarks'];
        
        $UpdateSql = "UPDATE `updatee_educational_info` SET degree_title='$degree_title', major_group='$major_group',inst_name='$inst_name', uni_board='$uni_board', 
				pass_year= '$pass_year', grade_division='$grade_division',marks_cgpa='$marks_cgpa', remarks='$remarks'
				
				WHERE user_id=$user_id AND id=$id";
				
				$res = mysqli_query($conn, $UpdateSql);
				if($res){
					echo '<script>window.location="educational_info_edit.php"</script>';
					echo"Update Information Sucessfully.....thanks";
					}else{
					$fmsg = "Failed to update data......";
				}
	}
?>
        <form class="form-horizontal" method="POST">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="degree_title" class="col-sm-4 control-label"> <strong>Exam/Degree Title </strong></label>
                            <div class="col-sm-7">
                                <select id="degree_title" name="degree_title" class="form-control" required="required" />
                                <option>Select Please</option>
                                <OPTION VALUE="S.S.C" <?php if($r['degree_title']=='S.S.C' ){ echo "selected" ;} ?> >S.S.C</OPTION>
                                <OPTION VALUE="H.S.C" <?php if($r['degree_title']=='H.S.C' ){ echo "selected" ;} ?> >H.S.C</OPTION>
                                <OPTION VALUE="Diploma" <?php if($r['degree_title']=='Diploma' ){ echo "selected" ;} ?>
                                    >Diploma</OPTION>
                                <OPTION VALUE="Bachelor/ Honors" <?php if($r['degree_title']=='Bachelor/ Honors' ){ echo "selected" ;} ?>
                                    >Bachelor/ Honors </OPTION>
                                    <OPTION VALUE="Bachelor/ Honors" <?php if($r['degree_title']=='Bachelor/ Honors' ){ echo "selected" ;} ?>
                                    >Bachelor/ Honors </OPTION>
                                <OPTION VALUE="Masters" <?php if($r['degree_title']=='Masters' ){ echo "selected" ;} ?>
                                    >Masters </OPTION>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="major_group" class="col-sm-4 control-label">Concentration /Major/Group</label>
                            <div class="col-sm-7">
                                <input type="text" name="major_group" class="form-control" user_id="major_group" value="<?php echo $r['major_group']; ?>"
                                    placeholder="Concentration/Major/Group" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inst_name" class="col-sm-4 control-label" required>Institute Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="inst_name" class="form-control" user_id="inst_name" value="<?php echo $r['inst_name']; ?>"
                                    placeholder="Institute Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uni_board" class="col-sm-4 control-label" required>University/Board</label>
                            <div class="col-sm-7">
                                <input type="text" name="uni_board" class="form-control" user_id="uni_board" value="<?php echo $r['uni_board']; ?>"
                                    placeholder="University/Board" />
                            </div>
                        </div>


                    </div>
                    <div class="box-footer">

                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (left) -col-md-6----->

            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="pass_year" class="col-sm-4 control-label">Passing Year</label>
                            <div class="col-sm-7">
                                <input type="number" name="pass_year" class="form-control" user_id="pass_year" value="<?php echo $r['pass_year']; ?>"
                                    placeholder="Exam/Degree Title" required="required" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="grade_division" class="col-sm-4 control-label" required>GPA/Devision (Out Of)</label>
                            <div class="col-sm-7">
                                <input type="text" name="grade_division" class="form-control" user_id="input1" value="<?php echo $r['grade_division']; ?>"
                                    placeholder="GPA/Devision (Out Of)" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marks_cgpa" class="col-sm-4 control-label"> <strong>CGPA/Marks</strong></label>
                            <div class="col-sm-7">
                                <input type="text" name="marks_cgpa" class="form-control" user_id="marks_cgpa" value="<?php echo $r['marks_cgpa']; ?>"
                                    placeholder="Concentration/Major/Group" required="required" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="remarks" class="col-sm-4 control-label">Remarks</label>
                            <div class="col-sm-7">
                                <textarea class="form-control" rows="2" name="remarks" id="remarks" placeholder="Please write About You"> <?php echo $r['remarks']; ?></textarea>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -col-md-6----->

            <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"
                            aria-hidden="true"></span><b> &nbsp Update Educational Info</b></button>
                </div>
            </div>
            <!-- /.col (Full Width for Button) -col-md-12----->

        </form>
        <!--end form--->

        <br>
        <hr>
    </div><!-- /.row -->
</section><!-- /.content -->
<!----From of Educational Info --end--->


<?php require_once "leave_form_footer.php"?>