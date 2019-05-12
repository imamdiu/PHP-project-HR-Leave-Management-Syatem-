<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
  $("button").click(function(){
    $("form").toggle();
  });
});
</script>

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
</style>
</head>

<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<div id="flip">Click to slide the panel down or up</div>
<div id="panel">Hello world!


<form class="form-horizontal" action="educational_info_edit_submit.php" method="POST">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="box box-primary">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="degree_title" class="col-sm-4 control-label">Exam/Degree Title</label>
                            <div class="col-sm-7">
                                <select id="degree_title" name="degree_title" class="form-control" />
                                <option>Select Please</option>
                                <option value="S.S.C" <?php if($r['degree_title']=='ssc' ){ echo "selected" ;} ?>
                                    >S.S.C</option>
                                <option value="H.S.C" <?php if($r['degree_title']=='hsc' ){ echo "selected" ;} ?>
                                    >H.S.C</option>
                                <option value="Diploma " <?php if($r['degree_title']=='diploma ' ){ echo "selected" ;}
                                    ?> > Diploma </option>
                                <option value="Bachelor/ Honors " <?php if($r['degree_title']=='bachelor' ){ echo
                                    "selected" ;} ?>> Bachelor/ Honors </option>
                                <option value="Masters  " <?php if($r['degree_title']=='masters ' ){ echo "selected" ;}
                                    ?>> Masters </option>
                                <option value="Bachelor/ Honors " <?php if($r['degree_title']=='bachelor' ){ echo
                                    "selected" ;} ?>> Bachelor/ Honors </option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="major_group" class="col-sm-4 control-label">Concentration /Major/Group</label>
                            <div class="col-sm-7">
                                <input type="text" name="major_group" class="form-control" user_id="major_group" value="<?php echo $r['major_group']; ?>"
                                    placeholder="Concentration/Major/Group" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inst_name" class="col-sm-4 control-label">Institute Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="inst_name" class="form-control" user_id="inst_name" value="<?php echo $r['inst_name']; ?>"
                                    placeholder="Institute Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="uni_board" class="col-sm-4 control-label">University/Board</label>
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

                        <div class="form-group  <?php if ($_REQUEST['error']==93)
			echo "has-error"; ?> ">
                            <label for="pass_year" class="col-sm-4 control-label">Passing Year</label>
                            <div class="col-sm-7">
                                <input type="number" name="pass_year" class="form-control" user_id="pass_year" value="<?php echo $r['pass_year']; ?>"
                                    placeholder="Exam/Degree Title" />
                                
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="grade_division" class="col-sm-4 control-label">GPA/Devision (Out Of)</label>
                            <div class="col-sm-7">
                                <input type="text" name="grade_division" class="form-control" user_id="input1" value="<?php echo $r['grade_division']; ?>"
                                    placeholder="GPA/Devision (Out Of)" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="marks_cgpa" class="col-sm-4 control-label"> <strong>CGPA/Marks </strong></label>
                            <div class="col-sm-7">
                                <input type="text" name="marks_cgpa" class="form-control" user_id="marks_cgpa" value="<?php echo $r['marks_cgpa']; ?>"
                                    placeholder="Concentration/Major/Group" />
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
                    <button type="submit" name="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"
                            aria-hidden="true"></span><b> &nbsp Insert Educational Info</b></button>
                </div>
            </div>

        </form>
        <!--end form--->
		</div>


  

    <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>

</body>

</html>