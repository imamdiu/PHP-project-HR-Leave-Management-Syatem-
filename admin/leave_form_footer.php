</div>
<!-- /.content-wrapper -->
 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2018 <a href="https://corporate-office-29940.business.site/?m=true" target="_blank">Jalalalbadit.com</a>.</strong> All rights
    reserved.
  </footer>		
  
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
		<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

		
<!-- jQuery 3 -->
<script src="admin-theme/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="admin-theme/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="admin-theme/bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="admin-theme/plugins/input-mask/jquery.inputmask.js"></script>
<script src="admin-theme/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="admin-theme/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="admin-theme/bower_components/moment/min/moment.min.js"></script>
<script src="admin-theme/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="admin-theme/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="admin-theme/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="admin-theme/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll -->
<script src="admin-theme/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="admin-theme/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="admin-theme/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="admin-theme/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="admin-theme/dist/js/demo.js"></script>
<!-- Page script -->
<script>
  /*$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd-mm-yyyy', { 'placeholder': 'dd-mm-yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'DD/MM/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
	
	//Date picker for Join
     $('#joindate').datepicker({
      autoclose: true
    })

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })*/
</script>

<script>
			$('#todaySdate').datepicker({
				format: "dd-mm-yyyy",
				//daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			$('#date').datepicker({
				format: "dd-mm-yyyy",
				//daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				//pair: $('#joindate'),
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			$('#last_leave_date').datepicker({
				format: "dd-mm-yyyy",
				//daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				//pair: $('#joindate'),
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			
			$('#fromdate').datepicker({
				format: "dd-mm-yyyy",
				daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				//pair: $('#joindate'),
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			
			$('#todate').datepicker({
				format: "dd-mm-yyyy",
				daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				
				autoclose: true,
				//minDate: '0',
				//maxDate: '+1Y+6M'
			})
			.on('change', function(ev) {
				
				var fromdate = $("#fromdate").data('datepicker').viewDate;
				var todate = $("#todate").data('datepicker').viewDate;
				todate.setDate(todate.getDate() + 1);
				
				// sort the weekends out
				var weekend_count = 0;
				for (i = fromdate.valueOf(); i <= todate.valueOf(); i+= 86400000) {
					var temp = new Date(i);
					if (temp.getDay() == 5) {
						weekend_count++;
					}
				}
					//var diff = ((endDate-startDate)/86400000) - weekend_count;;
					//$('#days').val(diff);
					//days=days+1;
					
				var diff = ((todate - fromdate) / 86400000) - weekend_count;
				$('#days').val(diff);
				//days=days+1;
				
			});
			
			$('#joindate').datepicker({
				format: "dd-mm-yyyy",
				daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				//$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			
			$('#dateOfbirth').datepicker({
				format: "dd-mm-yyyy",
				//daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				//$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
			
			$('#joining_date').datepicker({
				format: "dd-mm-yyyy",
				//daysOfWeekDisabled: "5", //Disaable Weeken...............
				todayHighlight: 'TRUE',
				autoclose: true,
				//minDate: 0,
				//maxDate: '+1Y+6M'
				}).on('change', function(ev) {
				
				//$('#todate').datepicker('setStartDate', $("#fromdate").val());
			});
		</script>


</body>
</html>
