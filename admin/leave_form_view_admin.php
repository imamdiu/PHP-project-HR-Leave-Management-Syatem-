<?php 	
	session_start();		
	if(!isset($_SESSION['user_id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}	
	require_once('../db.inc.php');
    require_once "header.inc.php";	
    
	$user_id = $_SESSION['user_id'];
	$user_name = $_SESSION['user_name'];	

    require_once ('leave_form_navbar.php');
?>
<!-- Theme style -->
<link rel="stylesheet" href="admin-theme/dist/customCSS/style_nav.css">
<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="style.css">

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

                        // $user_id = $_SESSION['user_id'];
						// //For leave info from draft leave from table....	
						// $SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
						// $res_draft = mysqli_query($conn, $SelSql);
						// $rd = mysqli_fetch_assoc($res_draft);

					?>
                        <div class="table_line_height">

                            <div class="col-md-4 col-md-offset-1 col-sm-12 col-xs-12">
                                <div class="row">
                                    <table style="border:0;" class="table ">
                                        <tbody>
                                            <div class=" text-center">
                                                <h5 class="box-title"><strong>Personal Details</strong></h5>

                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Name of Employee <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row['fname']. " ". $row['lname'] ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b> Department <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $r['department']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Designation <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $r['designation']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Leave Enjoyed  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $r['emp_leave_enjoy']?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Leave Balance  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $r['emp_leave_balance']?>
                                                    </td>
                                                </tr>
                                                <?php
													$user_id = $_GET['user_id'];
													$SelSql = "SELECT * FROM `users` WHERE user_id=$user_id";
													$res = mysqli_query($conn, $SelSql);
													$ree = mysqli_fetch_assoc($res);
													
													?>
                                                <tr>
                                                    <td>
                                                        <?php echo "<b>Last Leave Date  <b/>"?>
                                                    </td>
                                                    <td>
                                                        <?php echo $ree['last_leave_date']?>
                                                    </td>
                                                </tr>


                                                <div>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.box -->
                            </div>
                            <!-- /.col 666 left-->

									<?php
									$SelSql = "SELECT * FROM `leave_form_draft` WHERE user_id=$user_id";
									$res_draft = mysqli_query($conn, $SelSql);
									$rd = mysqli_fetch_assoc($res_draft);
									?>
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
                    <!-- /.row -->
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.row -for ------9----->


        <div class=" col-md-6 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
            <div style="margin:20px; padding-top:10px;">
                <td>
                    <button type="button" id="print" onclick="printPage()" class="btn btn-info">Print Your Form</button>
                </td>
                <?php        
            //only visible for Employee (For Delete User Info)
			if($_SESSION['user_role_id'] == 2){
			?>
                <td>
                    <a href="leave_form_edit.php?user_id=<?php echo $rd['user_id']; ?>" target=""><button type="button"
                            id="print" class="btn btn-primary">Edit Application</button></a>
                </td>
                <td>
                    <a href="leave_form_delete.php?user_id=<?php echo $rd['user_id']; ?>" target=""><button type="button"
                            id="print" class="btn btn-danger">Delete Application</button></a>
                </td>
                <?php } ?>
                <?php 
			//only visible to admin (For Delete User Info)
			if($_SESSION['user_role_id'] == 1){
			?>
                <td>
                    <a href="leave_accept.php?user_id=<?php echo $rd['user_id']; ?>" target=""><button type="button" id="print"
                            class="btn btn-success">Accept Application</button></a>
                </td>
                <td>
                    <a href="leave_form_reject_admin.php?user_id=<?php echo $rd['user_id']; ?>" target=""><button type="button"
                            id="print" class="btn btn-danger">Reject Application</button></a>
                </td>
                <?php } ?>
            </div>
        </div>

    </div>
    </div><!-- /.row -->
</section><!-- /.content -->

<head>
    <title>Leave Application Submit</title>

    <style>
    .container {
        width: 75%;
        margin: auto;
    }

    .table {
        width: 100%;
        margin-bottom: 20px;
    }

    .table-striped tbody>tr:nth-child(odd)>td,
    .table-striped tbody>tr:nth-child(odd)>th {
        background-color: #f9f9f9;
    }

    @media print {
        #print {
            display: none;
        }
    }


    #print {
        /* width: 200px;
    height: 30px;
    font-size: 18px;
    background: #2E9AFE;
	color:white;
    border-radius: 4px;
	margin-left:28px;
	margin-top:20px;
	margin-bottom:28px; */

        cursor: hand;
    }
    </style>
    <script>
    function printPage() {
        window.print();
    }

    function acceptPage() {


    }
    </script>

</head>


<!-- 
<div class="cotainer-fluid">
    <div class="row">
        <div align="right">
            <b style="color:blue;">Submited Date:</b>
            <?php include('current-date.php'); ?>
        </div>
        <br />
    </div>
</div>


        <div style="margin-left:30px; margin-top:0px;">
    <span style="margin-left:60px; margin-top: 50px;padding-top:30px;">
        <img src="admin-theme/dist/img/jsbl_logo_compress_width_6.png" alt="JSBL LOGO">
    </span>
</div> -->

<?php require_once "leave_form_footer.php"?>