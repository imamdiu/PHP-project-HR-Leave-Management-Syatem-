<div class="col-md-6">
		<div class="box box-primary">	
			<div class="box-body">
						<div class="form-group">
							<label for="about_you" class="col-sm-2 control-label">Reason of Leave</label>
							<div class="col-sm-10">	
									<textarea class="form-control" rows="3" name="reason_leave" id="reason_leave"  placeholder="Reason if Leave ..."></textarea>
							</div>
						</div>
						
						<div class="form-group">
							<label for="joindate" class="col-sm-2 control-label"  required="required">Join Date</label>
							<div class="col-sm-10">
								<div class="input-group date">
								  <div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								  </div>
								  <input type="text" class="form-control pull-right" id="joindate" name="joindate">
								</div>
							</div>	
						</div>
						
						<div class="form-group">
							<label for="emp_leave_enjoy" class="col-sm-2 control-label">Leave Enjoy</label>
							<div class="col-sm-10">
								<input type="text" name="emp_leave_enjoy"  class="form-control" id="input1" value="<?php echo $r['emp_leave_enjoy']; ?>"placeholder="Leave  Balance form DB(users) ..." disabled="disabled"/>
							</div>
						</div>
						
						<div class="form-group">
							<label for="emp_leave_balance" class="col-sm-2 control-label">Leave Balance</label>
							<div class="col-sm-10">
								<input type="text" name="emp_leave_balance"  class="form-control" id="input1" value="<?php echo $r['emp_leave_balance']; ?>"placeholder="Leave  Balance form DB(users) ..." disabled="disabled"/>
							</div>
						</div>
						<div class="form-group">
							<label for="emp_leave_balance" class="col-sm-2 control-label">Last Leave Date</label>
							<div class="col-sm-10">
								 <input type="text" name="last_leave_date"  class="form-control" id="input1" value="<?php echo $r['last_leave_date']; ?>"placeholder="Last Leave Date form DB(users) ..." disabled="disabled"/>
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
						<button type="submit" class="btn btn-info pull-right">Apply for Leave</button>
					</div>
					
				</form>
				<!-- /.box-body -->
				</div>
          		<!-- /.box -->
			</div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -col-md-6----->	
		
	</div>
	<!-- End Row-->