<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Accordion Example</h2>
  <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
  <div class="panel-group" id="accordion">
    
	
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
	
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
	
  </div> 
</div>
    
</body>
</html>



<div _ngcontent-c15="" class="row">
    <div _ngcontent-c15="" class="col-md-12">
        <div _ngcontent-c15="" class="card">
            <div _ngcontent-c15="" class="card-title-w-btn">
                <h3 _ngcontent-c15="" class="title">Summary</h3>
                <p _ngcontent-c15=""><button _ngcontent-c15="" class="btn btn-info icon-btn"><i _ngcontent-c15="" class="fa fa-plus"></i>Add
                        New</button></p>
            </div>
            <div _ngcontent-c15="" class="card-body">
                <!---->
                <!---->
                <div _ngcontent-c15="" class="scrollable ng-star-inserted" style="">
                    <div _ngcontent-c15="" class="table-responsive">
                        <table _ngcontent-c15="" class="tablesaw table-hover table">
                            <thead _ngcontent-c15="">
                                <tr _ngcontent-c15="" class="text-center">
                                    <th _ngcontent-c15="">Company Name</th>
                                    <th _ngcontent-c15="">Designation</th>
                                    <th _ngcontent-c15="">Location</th>
                                    <th _ngcontent-c15="" width="10%">From Date</th>
                                    <th _ngcontent-c15="" width="11%">To Date</th>
                                    <th _ngcontent-c15="" class="tbl-action">Actions</th>
                                </tr>
                            </thead>
                            <tbody _ngcontent-c15="">
                                <!---->
                                <tr _ngcontent-c15="" class="ng-star-inserted">
                                    <td _ngcontent-c15="">Jalalabad Group</td>
                                    <td _ngcontent-c15="">Project Head, IT Officer, Programmer.</td>
                                    <td _ngcontent-c15="">Dhaka</td>
                                    <td _ngcontent-c15="">Feb 15, 2016</td>
                                    <td _ngcontent-c15="">Jan 1, 2019</td>
                                    <td _ngcontent-c15="" class="tbl-action-details"><button _ngcontent-c15="" class="btn btn-info btn-outline btn-circle btn-xs m-r-5 pull-left"
                                            type="button"><i _ngcontent-c15="" class="fa fa-pencil"></i></button><button
                                            _ngcontent-c15="" class="btn btn-info btn-outline btn-circle btn-xs m-r-5"
                                            type="button"><i _ngcontent-c15="" class="fa fa-trash"></i></button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="col-md-2 col-sm-2 col-xs-12 logo_side">
    <div class="box box-success">

        <h5 class="box-title text-center"><strong>Profile Image</strong></h5>



    </div>

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
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-12 ">

                <img class="img-responsive" src="<?php echo $upload_dir.$row['image'] ?>" width="460" height="345">

            </div>
            <!-- /.col -->

        </div>
        <!-- /.row -->

    </div>
    <?php
					}
				  }
				?>

</div>