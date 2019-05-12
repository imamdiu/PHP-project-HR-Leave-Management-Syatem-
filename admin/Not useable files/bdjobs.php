<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>bdjobs.com :: Largest Job Site in Bangladesh</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<!-- Bootstrap CSS -->

<!--<link rel="stylesheet" type="text/css" href="/../fonts/web-icon.css">
<link rel="stylesheet" href="/../css/responsive.css">

 <script src="/../js/new_jqyery.js" type="text/javascript"></script>-->
 

<style>

.modal {
 
  padding: 0!important;
  overflow-y: auto;
}


</style>
<script type="text/javascript" async="" src="//u.heatmap.it/conf/mybdjobs.bdjobs.com.js"></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="https://u.heatmap.it/log.js"></script><script type="text/javascript">
function ReadCookie(cookieName) {
	var theCookie = " " + document.cookie;
	var ind = theCookie.indexOf(" " + cookieName + "=");
	if (ind == -1) ind = theCookie.indexOf(";" + cookieName + "=");
	if (ind == -1 || cookieName == "") return "";
	var ind1 = theCookie.indexOf(";", ind + 1);
	if (ind1 == -1) ind1 = theCookie.length;
	return unescape(theCookie.substring(ind + cookieName.length + 2, ind1));
}
function update_file()
{
	var file_cookie=ReadCookie("FileDate");
	var cv_cookie=ReadCookie("TodaysDate");
	var file=document.getElementById("file");
	
	if (file_cookie.indexOf('+')>0)
	{
		file_cookie=file_cookie.replace('+',' ');
		file_cookie=file_cookie.replace('+',' ');
	}
	
	var file_date=new Date(file_cookie);
	var cv_date=new Date(cv_cookie);

	if (cv_date>file_date)
	{  
		$('#F_U_message').html("This section has been updated successfully.<br />To increase your chance of getting a perfect job,  <br />make sure other sections and uploaded resume are updated too.</p>");
	   $('#myModal').modal('show');
	   $('#myModal').css("left", "40%");
	  
     $('#myModal').css("top", "30%");
	   $(file).attr("title","Make sure your uploaded resume is updated.");
		$(file).tooltip('show');
		
	}
	else
	{
		$('#F_U_message').html("This section has been updated successfully.<br> To increase your chance of getting a perfect job,<br> make sure other sections are also updated and upload an updated resume.");
		$('#myModal').modal('show');
	   $('#myModal').css("left", "40%");
	  
     $('#myModal').css("top", "30%");
	  $(file).attr("title","Upload your updated resume.");
		$(file).tooltip('show');
		javascript:parent.jQuery.fancybox({afterClose:parent.location.reload(true)});
	}
}
</script>

		<link rel="stylesheet" href="/../css/bootstrap.min.css">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

		<link rel="stylesheet" href="/../css/style.css">
        <link rel="stylesheet" href="/../css/datepicker.css">
		<link rel="stylesheet" type="text/css" href="/../fonts/web-icon.css">
		<link rel="stylesheet" href="/../css/responsive.css">
        <link rel="stylesheet" href="/../css/jquery-ui.css">
		
		<script src="/../js/jquery-2.0.2.js" type="text/javascript"></script>
        <script src="/../js/jquery-ui.js" type="text/javascript"></script>
		<script type="text/javascript" src="../js/bootstrap.min.js"></script>
		<script src="/../js/new_jqyery.js" type="text/javascript"></script>
		<script type="text/javascript" src="../js/new_js/common.js"></script>
	
			<link rel="stylesheet" type="text/css" href="/../css/edit-resume.css">

			
			<script type="text/javascript" src="../js/new_js/common_edit_resume.js"></script>
			<script type="text/javascript" src="../js/bootstrap-datepicker.js"></script>
			<script type="text/javascript" src="../js/new_js/_DateValidation.js"></script>	

	
				
				<link rel="stylesheet" href="/../css/autocomplete.css">

				
				<script type="text/javascript" src="/../js/new_js/autocomplete_new.js"></script>
				<script type="text/javascript" src="../js/new_js/common_new_check.js"></script>
			
        <script type="text/javascript">
		
			$(document).on('click','.promo-top .btn.close', function(e){
				e.preventDefault();
				$('.promo-top').slideUp();
				$('.promo-minimized').removeClass('hidden');
				setAssessmentCookie('MyAssessmentTopbanner',0);
			});
	
			$(document).ready(function(){                  
				setTimeout(function(){
					$('.promo-top').slideDown().removeClass('hidden');
				
				}, 500);
				
			});

			$(document).on('click','.promo-minimized i.toggle', function(e){
				e.preventDefault();
				$('.promo-top').slideDown().removeClass('inactive');
				
				
				$('.promo-minimized').addClass('hidden').removeClass('active');
				setAssessmentCookie('MyAssessmentTopbanner',1);
			});
		
			
			function checkAssessmentCookie(cookieName,show) {
    
				//console.log(user);
				if (show == 0) {
					//alert("Welcome again " + user);
					setAssessmentCookie(cookieName,1);
				} else {
					
					delete_cookie(cookieName);
				}
			}
			
			
			function delete_cookie(name) {
			  document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
			}
			
			function setAssessmentCookie(cname, cvalue) {
				console.log("y");
				var d = new Date();
				exdays=1;
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+d.toUTCString();
				document.cookie = cname + "=" + cvalue + "; "+ expires ;

			 }
			
		</script>

<script language="JavaScript">
	function SubmitForm()
	{
		//alert(document.getElementById("U_ID").value);
		document.getElementById("AplyForm").submit();
	}
</script>


	<script type="text/javascript" src="../js/new_js/personal_Edit.js"></script>



	<script>
		(function(h,e,a,t,m,p) {
		m=e.createElement(a);m.async=!0;m.src=t;
		p=e.getElementsByTagName(a)[0];p.parentNode.insertBefore(m,p);
		})(window,document,'script','https://u.heatmap.it/log.js');
	</script>
	

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56024242-1', 'auto');
  ga('send', 'pageview');

</script>

<script type="text/javascript">
//
//	  var _gaq = _gaq || [];
//	  _gaq.push(['_setAccount', 'UA-36961160-1']);
//	  _gaq.push(['_trackPageview']);
//	
//	  (function() {
//		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
//		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
//		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
//	  })();
//	
	</script>


<style>
.lcp {
    margin: 8px 0px;
    height: 70px;
}

.txt-add-location {
    width: auto;
    height: 30px;
    display: inline-block;
    margin: 5px;
    background: #FFFFFF;
    border: none;
    outline: none;
    outline-width: 0;
    float: left;
}
.txt-add-location:focus,.txt-add-location:hover {
    background: #FFFFFF;
    border: none;
    outline: none;
    outline-width: 0;
}

.New-job .btn-default.btn-add-location {
    display: inline-block;
    border-radius: 0px 3px 3px 0px;
    width: 50px;
    background-color: #FFF;
    margin-left: -4px;
    height: 35px;
    border: 1px solid #CCC;
    border-left: none;
    color: #212121;
}

    .New-job .btn-default.btn-add-location:hover {
        background-color: #ebebeb;
    }

.selected-location {
    min-height: 40px;
    background: #FFFFFF;
    border: 1px solid #CCCCCC;
    overflow-y: auto;
    border-radius: 4px;
    padding: 0px;
}
.selected-location-title {
    font-size: 14px;
    padding: 0px 0px 5px 0px;
}

.selected-location .well {
    float: left;
    width: auto;
    height: auto;
    margin: 5px;
    background-color: #f2f2f2;
    border: none;
    box-shadow: none;
    padding: 5px;
    border-radius: 5px;
}

.well .location-close {
    float: right;
    background-color: #757679;
    margin: 2px 0px 0px 5px;
    padding: 1px 5px 1px 5px;
    line-height: 14px;
    color: #fff;
    font-size: 12px;
    -webkit-border-radius: 30px;
    -moz-border-radius: 30px;
    border-radius: 30px;
    behavior: url(css/PIE.htc);
    position: relative;
    overflow: auto;
}

.ui-autocomplete {
    max-height: 150px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
    /* add padding to account for vertical scrollbar */
    padding-right: 5px;
    z-index: 2147483647;
    cursor: pointer;
}
/*.ui-autocomplete-loading {
    background:url('http://www.hsi.com.hk/HSI-Net/pages/images/en/share/ajax-loader.gif') no-repeat right center;
}*/
.ui-menu .ui-menu-item a{
    font-size: 13px;
}
.job-board .btn-default{
    background: #eeeeee !important;
    color: #212121 !important;
    border: 1px solid #cccccc;
}
.job-board .btn-default:hover{
    background: #dddddd !important;
}
</style><script type="text/javascript">

function openVediobox(strPart )
{
	if (strPart=="Per")
	{
		var ifream= document.getElementById("Iframe");
		ifream.src="https://www.youtube.com/embed/80mJo93_4Es?rel=0&amp;wmode=Opaque";
		ifream.height="400px";
		
	}
	
}
  </script></head>







 
<body>


<style>
.c1{
	position:fixed;
	background-color:#AE0000;
	text-align:center;
	width:100%;
	height:21px;
	color:#FFF;
	font-size:13px;
	font-weight:bold;
	font-family:Arial, Helvetica, sans-serif;
	top:0;
	padding-top:3px;
	margin-top:6px;
	z-index: 101;
	}
 </style>
 <noscript>
<div class="c1">

This site works best with Javascript enabled. Your browser's Javascript is disabled.To enable <a href="EnablingJSTbl.asp" target="_blank" style="color:#0FF;">click here</a>

</div>
</noscript>


    


<!--sss=https://mybdjobs.bdjobs.com/new_mybdjobs/step_05_view.asp  is=--><!--,8,-->
<script language="javascript" type="text/javascript">
//var districtList="";
//var countryList="";

var lang = 'EN';
var outputdata = []; 
var currentLocation = '';
var isCvPosted = 'True'
</script>


       
   <div class="feedback-left" style="display: block;">
   
    <a href="https://jobs.bdjobs.com/feedback.asp?val=mybdjobs" class="btn btn-default" target="_blank"><i class="icon-chat"></i>&nbsp;Feedback</a>
</div>



    	<div class="promo-top inactive" style="display: block;">
            <div class="container">   
                <div class="inner">                                                                                                		

                    <a href="http://mybdjobs.bdjobs.com/mybdjobs/assessment/smnt_certification_help.asp" target="_blank" onclick="ga('send','event', 'assessmentTopBanner','click','step_01_view.asp',1);">
                        <img src="https://mybdjobs.bdjobs.com/mybdjobs/images/assessment_promo_bg_1.png" alt="">
                    </a>
                    <a href="javascript:checkAssessmentCookie('MyAssessmentTopbanner',0);" class="btn close">
                        <i class="icon-times-o"></i>
                    </a>
                </div>
            </div>
        </div>
    
        <div class="promo-minimized  active">
            <a href="javascript:checkAssessmentCookie('MyAssessmentTopbanner',1);">
                <i class="icon-angle-down toggle"></i>
            </a>
        </div>
        
        
        
        
    
    
<div class="topBar hidden-sm hidden-xs">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <ul class="pull-left brands">
                     <li><a href="http://jobs.bdjobs.com/jobsearch.asp" class="jobs" target="_blank">Jobs</a></li>
                     <li><a href="javascript:void();" class="mybdjobs active">My Bdjobs</a></li>
                     <li><a href="http://bdjobstraining.com/" class="training" target="_blank">Training</a></li>
                     <li><a href="http://corporate3.bdjobs.com/" class="corporate" target="_blank">Employers</a></li>
                  </ul>
                  <div class="topBar-right pull-right">
                     <ul class="pull-left icons">
                        <li><a href="https://www.facebook.com/mybdjobs" target="_blank"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://plus.google.com/+BdjobscomLtd" target="_blank"><i class="icon-google-plus"></i></a></li>
                        <li><a href="https://www.youtube.com/mybdjobs" target="_blank"><i class="icon-youtube"></i></a></li>
                        <li><a href="https://www.bdjobs.com/contact.asp" target="_blank"><i class="icon-phone"></i></a></li>
                     </ul>
                     
                      <div class="btn-group lang-btn" role="group" aria-label="...">
                        <a href="javascript:void();" class="btn bn active">ENG</a>
                        <a href="https://mybdjobs.bdjobs.com/bn/new_mybdjobs/step_01_viewbn.asp" class="btn bn"><i class="icon-bn"></i></a>
                     </div>
                     
                    <!-- <div class="btn-group lang-btn" role="group" aria-label="...">
                        <a href="" class="btn bn active"><i class="icon-bn"></i></a>
                        <button type="button" class="btn">ENG</button>
                     </div>-->


                  </div>
               </div>
            </div>
         </div>
      </div>
<!--pagename: https://mybdjobs.bdjobs.com/bn/new_mybdjobs/step_01_viewbn.asp-->
<div class="notifications top-left"></div>
<div class="header">

         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <nav class="navbar navbar-default">
                  
                     <div class="navbar-option">
                        <a href="javascript:void(0)" class="btn navbar-toggle hidden-md hidden-lg">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </a>
                     </div>
                    
                     <div class="logo">
                        <a href="https://www.bdjobs.com"><img class="img-responsive" src="https://bdjobs.com/images/logo.png" alt="Logo" title="bdjobs.com logo"></a>
                     </div>

                     <!-- START MOBILE ONLY NOTIFICATION BELL AND FLY MENU -->
                     <div class="mobile-menu-right hidden-lg hidden-md">
                        <ul>
                          <li class="fly-menu">
                            <a href="javascript:void();" class="fly-opener active navbar-toggle">
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                            </a>
                            <a href="javascript:void();" class="fly-closer not-active">
                              ×
                            </a>
                        </li>
                        </ul>
                     </div>
                     <!-- END MOBILE ONLY NOTIFICATION BELL AND FLY MENU -->
					
                     

                     <div class="collapse navbar-menu navbar-header navbar-collapse">
                        <ul class="nav navbar-nav">
                           <li>
                              <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick Links <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                 <li><a href="http://jobs.bdjobs.com/OtherJobs.asp?JobType=new">New Jobs</a></li>
                                 <li><a href="http://jobs.bdjobs.com/OtherJobs.asp?JobType=deadline">Deadline Tomorrow</a></li>
                                 <li><a href="http://jobs.bdjobs.com/OtherJobs.asp?JobType=parttime">Part Time</a></li>
                                 <li><a href="http://jobs.bdjobs.com/OtherJobs.asp?JobType=contract">Contractual</a></li>
                                 <li><a href="http://jobs.bdjobs.com/OtherJobs.asp?JobType=government">Government</a></li>
                                 <li><a href="http://jobs.bdjobs.com/locationwisejobs.asp">Location Wise</a></li>
                                 <li><a href="http://jobs.bdjobs.com/locationwisejobs.asp?jobtype=overseas">Overseas</a></li>
                              </ul>
                           </li>
                           <li><a href="http://jobs.bdjobs.com/Company_list.asp">Employer List</a></li>
                           <li><a href="https://www.bdjobs.com/career/counsel.asp" target="_blank">Career Resources</a></li>
                           <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/faq.asp" target="_blank">FAQ</a></li>
                         
                          <li class="switch-bn hidden-md hidden-lg"><a href="https://mybdjobs.bdjobs.com/bn/new_mybdjobs/step_01_viewbn.asp">বাংলাতে দেখুন</a></li>
							
                           <li class="dropdown user-details">
                              <a href="javascript:void(0)" class="dropdown-toggle user-dropdown" id="userDetailsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                              <img src="https://my.bdjobs.com/photos//1425001-1450000/581435459v8q0t.jpg?var=1312201840" alt="User photo">
                              <span class="user-name">
                              Mohammad Imam Hossain<i class="icon-angle-down"></i>
                              </span>
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="userDetailsDropdown">
                                 <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/logout.asp" class="btn-signout"><i class="icon-sign-out"></i>&nbsp;Sign Out</a></li>
                              </ul>
                           </li>
                           
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </div>

<!--is:True-->
<div class="leftsidebar">
<div class="container">
<div class="row">
<div class="col-md-3 sidebar">
<div class="row">
    <div class="col-md-12">
               <div class="mobile-menu-left-overlay"></div>
                        <nav class="side-menu hidden-sm hidden-xs">
                           <ul>
                              <li>
                                 <a href="javascript:void();" class="close">×</a>
                              </li>
                              <li>
                                  <a href="https://mybdjobs.bdjobs.com/mybdjobs/welcome.asp" class="">
                                 <i class="icon-home"></i>Home
                                 </a>
                              </li>
                              <li class="title">RESUME</li>
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/masterview.asp " class="">
                                 <i class="icon-view-resume"></i>  View Resume
    
                                 </a>
                              </li>
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="active" onclick="ga('send', 'event', 'EditResume', 'click', '/new_mybdjobs/step_01_view.asp', 1);
    ">
                                 <i class="icon-edit"></i>  Edit Resume
                                 </a>
                              </li>
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/file_upload.asp" id="file" data-toggle="tooltip" data-placement="auto" title="" class="">
                                 <i class="icon-cloud-upload"></i>  Upload Resume
    
                                 </a>
                              </li>
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/mail_form.asp" onclick="ga('send', 'event', 'mail_form', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                                 <i class="icon-send-email"></i> Email Resume
                                 </a>
                              </li>
                             <!-- <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/del_resume.asp" onclick="ga('send', 'event', 'DeleteResume', 'click', '', 1);"  >
                                 <i class="icon-trush-can"></i> Delete Resume
                                 </a>
                              </li>-->
                              <li class="title">My Activities</li>
                              <li>
                              <a href="https://mybdjobs.bdjobs.com/mybdjobs/apply_position.asp" onclick="ga('send', 'event', 'DeleteResume', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                              <i class="icon-applied"></i>
                              Online Application</a></li>
                              <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/resume_Email.asp" onclick="ga('send', 'event', 'EmailedResume', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                              <i class="icon-emailed-resume"></i>
                              Emailed Resume</a></li>
                              <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/show_cart.asp" onclick="ga('send', 'event', 'DeleteResume', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                              <i class="icon-star"></i>
                              Shortlisted Job</a></li>
                              <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/Emp_Followed.asp" onclick="ga('send', 'event', 'DeleteResume', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                              <i class="icon-building-plus"></i>
                              Following Employer</a></li>
                              
                              <!-- employer activity -->
                              
                              <li class="title">Employer Activities</li>
                              
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/resume_view.asp" onclick="ga('send', 'event', 'EmployerMessage', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                                 <i class="icon-view-resume"></i> Employer Viewed Resume
                                 </a>
                              </li>
                              
                              
                             
                             
                            
                                
                                
    <!--                            <li class="title">Assessment<span class="badge pull-right">New</span></li>
    -->                               
                                           <li class="title">Assessment</li>
    
                                         
                               <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/assessment/smnt_certification_home.asp" class="">
                                <i class="icon-certified-badge"></i> Employability Certification
                                 </a>
                              </li>
                             
                             
                                 <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/assessment/smnt_assessment_home.asp" class="">
                                 <i class="icon-employer"></i> Assessment (for specific job)
                                 </a>
                              </li>
                              
                               <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/assessment/smnt_certification_help.asp?r=lm" target="_blank" class="">
                                <i class="icon-question"></i> Assessment Help
                                 </a>
                              </li>
                              
                              
                              
                              <!-- end employer activity -->
                              
                              
                              <li class="title">Personalization</li>
                              <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/favouritesearch.asp" onclick="ga('send', 'event', 'JobAgent', 'click', '/new_mybdjobs/step_01_view.asp', 1);" class="">
                                 <i class="icon-heart-o"></i> Favourite Search 
                                 </a>
                              </li>
                             
                              <!--<li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/block_emp.asp" onclick="ga('send', 'event', 'BlockEmployers', 'click', '', 1);" >
                                 <i class="icon-blocked-employer"></i> Block Employer
                                 </a>
                              </li>-->
                              <!-- <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/email_notify.asp" onclick="ga('send', 'event', 'EmailNotification', 'click', '', 1);" <'%=strClass_act%><'%=strClass%>>
                                  <i class="icon-envelope-bell"></i> Email Notification
                                 </a>
                              </li>-->
                               
                             <!-- <li>
                                <a href="https://mybdjobs.bdjobs.com/mybdjobs/view_stats.asp" >
                                 <i class="icon-stats"></i> My Stats
                                 </a>
                              </li>-->
                              <li class="divider"></li>
                               <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/accountsetting.asp" class="">
                                 <i class="icon-cogs"></i><strong> Account Settings</strong>
                                 
                                 </a>
                              </li>
                              <li>
                              </li><li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/videoHelp.asp" target="_blank">
                                 <i class="icon-video-help"></i> Help Videos
                                 </a>
                              </li>
                              <!-- <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/edit_account.asp" >
                                 <i class="icon-switching"></i>Mybdjobs Credential Change Password
                                 </a>
                              </li>-->
                               <li>
                                 <a href="https://mybdjobs.bdjobs.com/mybdjobs/logout.asp" class="">
                                 <i class="icon-sign-out"></i> Sign Out
                                 </a>
                              </li>
                               
                             <!-- <li>
                                  <a href="training.asp" onclick="ga('send', 'event', 'Trainings', 'click', '', 1);" >
                                 <i class="icon-training"></i> Trainings
                                 </a>
                              </li>-->
                              
        <!-- <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/assessment/smnt_assessment_home.asp"   >-->
                            
                                 
                                 <!--<i class="glyphicon glyphicon-th"></i> Assessment <span class="badge pull-right">New</span>
                                
                              </li>-->
                              
                              <!--<li class="title">Account</li>-->
                            
                           </ul>
                        </nav>
                     
                    </div>
                <div class="col-md-12 hidden-xs hidden-sm" style="margin:0px auto 0px 5px;">
             		   

<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<ins class="adsbygoogle" style="display:inline-block;width:250px;height:250px" data-ad-client="ca-pub-5130888087776673" data-ad-slot="2833078342"></ins>
		<script>
			/* SquareBanner */  
			(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
<!--<script type="text/javascript"><!--
    google_ad_client = "ca-pub-5130888087776673";  
	/*  */  
    google_ad_slot = ""; 
    google_ad_width = ;
    google_ad_height =  ; 
    //
    </script> -->
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

                </div>

    </div>
</div>
  
                 

   
   <div class="modal fade" id="myModal" role="dialog" style="display:none; height:400px; width:400px;">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">Updated Successfully</h4>
        </div>
        <div class="modal-body">
          <p id="F_U_message">
        </p></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    
     <div class="col-md-3">
            
         </div>
   

<div class="col-md-9 content">

   <div class="big-card">
 

 <ol class="breadcrumb">
	
    
  		 <li><a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp"><span class="icon-home"></span>&nbsp;Home</a></li>
    
   
    
            <li class="active">Edit Resume</li>
			
<!--				<li class="active"></li>
-->			
         </ol>
          
         <!--<div class="switch-back-old">
  				<a style="color:#999;font-size:12px; font-weight:normal;" href="https://mybdjobs.bdjobs.com/mybdjobs/.asp" onclick= "ga('send', 'event', '/.asp', 'click', 'switch old version', 1);"> <i class="icon-angle-left-long"></i> Switch back to old version</a>
		</div>-->
         
       
         
        <div class="btn-group tab-group" role="group" aria-label="...">
        <form action="LinkSubmit.asp" method="post" name="formPS_View" id="formPS_View">
        <input name="hPS" type="hidden" id="hPS" value="false">
       
          
            <button type="button" onclick="location.href='https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp'" class="btn active btn-tab-personal"><i class="icon-user"></i>&nbsp;Personal</button>
            <button type="button" onclick="location.href='https://mybdjobs.bdjobs.com/new_mybdjobs/step_02_view.asp'" class="btn btn-tab-education"><i class="icon-graduation-cap"></i>&nbsp;Education/Training</button>
            <button type="button" onclick="location.href='https://mybdjobs.bdjobs.com/new_mybdjobs/step_03_view.asp'" class="btn btn-tab-employment"><i class="icon-briefcase"></i>&nbsp;Employment</button>
            <button type="button" onclick="location.href='https://mybdjobs.bdjobs.com/new_mybdjobs/step_04_view.asp'" class="btn btn-tab-others"><i class="icon-list"></i>&nbsp;Other Information</button>
            <button type="button" onclick="location.href='https://mybdjobs.bdjobs.com/new_mybdjobs/step_05_view.asp'" class="btn btn-tab-photograph"><i class="icon-camera"></i>&nbsp;Photograph</button>
         
           </form>
         </div>
         
          
          
     

          <div class="confirmation-message">
            <!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
            <span id="c_msg"></span>
</div>
<div class="server-error">
            <!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
            <span id="c_msg"></span>
</div>

          

	
    <div class="loader"></div>
    <div style="color: rgb(0, 0, 0);" class="panel-group resume-panel-group personal" id="accordion" role="tablist" aria-multiselectable="true">
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

                                           	 <!-- <div class="form-group col-md-12">
                                              <label for="">Nationality&nbsp;<abbr title="Required" class="required"></abbr></label>
                                              <input class="form-control onclick-hidden" id="nViewFild" placeholder="" value="Bangladeshi" type="text">
                                              <div class="row btn-form-control hidden">
                                                <div class="col-md-12">
                                                  <div class="checkbox">
                                                    <label>
                                                      <input type="checkbox" name="txtNationality" onClick="DisableNationality();" value="Bangladeshi" checked id="bangladeshi" > Bangladeshi
                                                    </label>
                                                  </div>
                                                </div>
                                            
                                                <div class="col-md-12">
                                                  <input type="text" class="form-control nationality" placeholder="For other country please type." value="Bangladeshi" name="txtNationality" id="otherNationality"  disabled >
                                                </div>
                                              </div>                                             
                                           </div> -->

                                           	<!-- <div class="form-group col-md-12">
                                              <label for="">National Id No</label>
                                             <input type="text" class="form-control" placeholder="" value="19921913368660000" name="txtNationalId" id="txtNationalId">
                                           </div>  -->

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

                                            <!-- <div class="form-group col-md-12">
                                       			<label for="">Present Address&nbsp;<abbr title="Required" class="required"></abbr></label>
                                       			<textarea name="txtPresentAdd" id="txtPresentAdd" cols="30"  class="form-control height-2x">61/2, Shukrabad ,Dhanmondi,Dhaka.</textarea>
                                    	   </div>
                                    	   		<div class="form-group col-md-12">
                                       			<label for="">Permanent Address</label>
                                       			<textarea name="txtPermanentAdd" id="txtPermanentAdd" cols="30" class="form-control height-2x">Village : Gangkanda, Post Office : Panchgachia, Upazilla : Daudkandi, District : Comilla.</textarea>
                                    	   </div> -->
    									   		<!-- <div class="form-group col-md-12">
                                               <label for="">Current Location&nbsp;<abbr title="Required" class="required"></abbr></label>
                                               <div class="row">
                                                  <div class="col-md-12">
                                                  
                                                     <input type="text" class="form-control onclick-hidden" placeholder="" id="locViewField" value="">
                                                     <div class="nationality-control btn-form-control hidden m-b-10">
                                                        <label class="radio-inline onclick-o">
                                                        <input name="optCurrentLocation" id="icon" value="0"  type="radio" onClick="LoadLocations(this.value);" > Inside Bangladesh </label>
                                                        <label class="radio-inline onclick">
                                                        <input name="optCurrentLocation" id="icon" value="1" type="radio" onClick="LoadLocations(this.value);" > Outside Bangladesh </label>
                                                     </div>
                                                  </div>
                                                  <div class="col-md-12 btn-form-control hidden " id="subcurrentDiv">
                                                    
                                              
                                             <input class="form-control  autosuggest ui-autocomplete-input"  type="text" id="txtCurrentLoc" name="txtCurrentLoc" onClick="SetParam(7,'hid_current_location','',1,'');" placeholder="Add location" value="">
                                             <input  type="hidden"  name="hid_current_location" id="hid_current_location" readonly="readonly" value="14"> -->
                                            <!-- </div>
                                            </div>
                                            </div>-->
                                            <!--<INPUT id="selected_current_loc" type="hidden" name="selected_current_loc" value="">-->
                                                  <!-- </div>
                                               </div> 
                                            </div>-->

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
        
		
		<!--start details address-->
        <div class="panel">
        <!-- do in bangla -->
        
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
                    	 <!-- do in bangla -->
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Address Details<i class="indicator icon-plus"></i>
                        </a>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                     <!-- do in bangla -->
                    
                     <!-- do in bangla -->
                        <div class="all-info adrs_0" style="display:block;">
                            <div class="sub-header">
                                <div id="alertDiv_adrs"></div>
                                <div class="edit-tools">
                                    <button class="btn edit-btn" id="addressEditBtn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
                                </div>
                            </div>
                            
                            <form class="row view-mode" id="addressForm" name="addressForm">
                            
                                <div class="col-md-6">
                                    <div class="address-wrap">
                                        <div class="form-group">
                                                <label for="presentAddress">Present Address<abbr title="Required" class="required"></abbr>
                                                </label>
                                                <div id="txtPresentAdd" cols="30" class="height-2x address_Previous" style="margin-bottom: 5px;">61/2, Shukrabad ,Dhanmondi,., Dhaka</div>
                                            
                                                    <input type="text" class="form-control input-disabled btn-form-control hidden" id="presentAddress" value="61/2, Shukrabad ,Dhanmondi,Dhaka." readonly="readonly">
                                                
                                        </div>
                                        <div class="form-group btn-form-control hidden">
                                        
                                            <label class="radio-inline"><input type="radio" name="presentLocation" value="0" checked="">Inside
                                                Bangladesh</label>
                                            <label class="radio-inline"><input type="radio" name="presentLocation" value="1" class="outside">Outside
                                                Bangladesh</label>
                                        </div>
                                        <div class="select-country hide hide" id="countrySelectID">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <select class="form-control" id="present_country_list" name="present_country_list">
                                                            <option value="-1" selected="">Select Country</option>
                                                            <option value="101">Afghanistan</option><option value="102">Albania</option><option value="103">Algeria</option><option value="104">American Samoa</option><option value="105">Andorra</option><option value="106">Angola</option><option value="107">Anguilla</option><option value="108">Antarctica</option><option value="109">Antigua</option><option value="110">Argentina</option><option value="111">Armenia</option><option value="112">Aruba</option><option value="113">Australia</option><option value="114">Austria</option><option value="115">Azerbaijan</option><option value="116">Bahamas</option><option value="117">Bahrain</option><option value="119">Barbados</option><option value="120">Belarus</option><option value="121">Belgium</option><option value="122">Belize</option><option value="123">Benin</option><option value="124">Bermuda</option><option value="125">Bhutan</option><option value="126">Bolivia</option><option value="127">Bosnia and Herzegovina</option><option value="128">Botswana</option><option value="129">Brazil</option><option value="130">British Virgin Islands</option><option value="131">Brunei</option><option value="132">Bulgaria</option><option value="133">Burkina Faso</option><option value="135">Burundi</option><option value="136">Cambodia</option><option value="137">Cameroon</option><option value="138">Canada</option><option value="139">Cape Verde</option><option value="140">Central African Republic</option><option value="141">Chad</option><option value="142">Chile</option><option value="143">China</option><option value="144">Colombia</option><option value="145">Comoros</option><option value="147">Congo</option><option value="146">Congo (Zaire)</option><option value="148">Cook Islands</option><option value="149">Costa Rica</option><option value="150">Cote d'Ivoire (Ivory Coast)</option><option value="151">Croatia</option><option value="152">Cuba</option><option value="153">Cyprus</option><option value="154">Czech Republic</option><option value="155">Denmark</option><option value="156">Djibouti</option><option value="157">Dominica</option><option value="158">Dominican Republic</option><option value="323">East Timor</option><option value="159">Ecuador</option><option value="160">Egypt</option><option value="161">El Salvador</option><option value="162">Equatorial Guinea</option><option value="163">Eritrea</option><option value="164">Estonia</option><option value="165">Ethiopia</option><option value="166">Falkland Islands</option><option value="232">Federated States of Micronesia</option><option value="167">Fiji</option><option value="168">Finland</option><option value="169">France</option><option value="170">French Guiana</option><option value="171">French Polynesia</option><option value="172">Gabon</option><option value="174">Gaza Strip and West Bank</option><option value="175">Georgia</option><option value="176">Germany</option><option value="177">Ghana</option><option value="178">Gibraltar</option><option value="179">Greece</option><option value="180">Greenland</option><option value="181">Grenada</option><option value="182">Guadeloupe</option><option value="183">Guam</option><option value="184">Guatemala</option><option value="185">Guinea</option><option value="186">Guinea-Bissau</option><option value="187">Guyana</option><option value="188">Haiti</option><option value="190">Honduras</option><option value="191">Hong Kong</option><option value="192">Hungary</option><option value="193">Iceland</option><option value="194">India</option><option value="195">Indonesia</option><option value="196">Iran</option><option value="197">Iraq</option><option value="198">Ireland</option><option value="199">Israel</option><option value="200">Italy</option><option value="201">Jamaica</option><option value="202">Japan</option><option value="203">Jordan</option><option value="204">Kazakhstan</option><option value="205">Kenya</option><option value="206">Kiribati</option><option value="207">Kuwait</option><option value="208">Kyrgyzstan</option><option value="209">Laos</option><option value="210">Latvia</option><option value="211">Lebanon</option><option value="212">Lesotho</option><option value="213">Liberia</option><option value="214">Libya</option><option value="215">Liechtenstein</option><option value="216">Lithuania</option><option value="217">Luxembourg</option><option value="218">Macau</option><option value="219">Macedonia</option><option value="220">Madagascar</option><option value="221">Malawi</option><option value="222">Malaysia</option><option value="223">Maldives</option><option value="224">Mali</option><option value="225">Malta</option><option value="226">Marshall Islands</option><option value="227">Martinique</option><option value="228">Mauritania</option><option value="229">Mauritius</option><option value="230">Mayotte</option><option value="231">Mexico</option><option value="233">Moldova</option><option value="234">Monaco</option><option value="235">Mongolia</option><option value="325">Montenegro</option><option value="236">Montserrat</option><option value="237">Morocco</option><option value="238">Mozambique</option><option value="134">Myanmar</option><option value="239">Namibia</option><option value="240">Nauru</option><option value="241">Nepal</option><option value="242">Netherlands</option><option value="243">Netherlands Antilles</option><option value="244">New Caledonia</option><option value="245">New Zealand</option><option value="246">Nicaragua</option><option value="247">Niger</option><option value="248">Nigeria</option><option value="249">North Korea</option><option value="250">Northern Mariana Islands</option><option value="251">Norway</option><option value="252">Oman</option><option value="253">Pakistan</option><option value="254">Palau</option><option value="255">Panama</option><option value="256">Papua New Guinea</option><option value="257">Paraguay</option><option value="258">Peru</option><option value="259">Philippines</option><option value="260">Pitcairn Islands</option><option value="261">Poland</option><option value="262">Portugal</option><option value="263">Puerto Rico</option><option value="264">Qatar</option><option value="265">Reunion</option><option value="266">Romania</option><option value="267">Russia</option><option value="268">Rwanda</option><option value="269">Saint Kitts and Nevis</option><option value="270">Saint Lucia</option><option value="271">Saint Pierre and Miquelon</option><option value="272">Saint Vincent and the Grenadines</option><option value="273">Samoa</option><option value="274">San Marino</option><option value="275">Sao Tome and Principe</option><option value="276">Saudi Arabia</option><option value="277">Senegal</option><option value="278">Serbia</option><option value="279">Seychelles</option><option value="280">Sierra Leone</option><option value="281">Singapore</option><option value="282">Slovakia</option><option value="283">Slovenia</option><option value="284">Solomon Islands</option><option value="285">Somalia</option><option value="286">South Africa</option><option value="287">South Korea</option><option value="324">South Sudan</option><option value="288">Spain</option><option value="289">Sri Lanka</option><option value="290">Sudan</option><option value="291">Suriname</option><option value="292">Swaziland</option><option value="293">Sweden</option><option value="294">Switzerland</option><option value="295">Syria</option><option value="296">Taiwan</option><option value="297">Tajikistan</option><option value="298">Tanzania</option><option value="299">Thailand</option><option value="173">The Gambia</option><option value="189">The Holy See</option><option value="300">Togo</option><option value="301">Tonga</option><option value="302">Trinidad and Tobago</option><option value="303">Tunisia</option><option value="304">Turkey</option><option value="305">Turkmenistan</option><option value="306">Turks and Caicos Islands</option><option value="307">Tuvalu</option><option value="308">Uganda</option><option value="309">Ukraine</option><option value="310">United Arab Emirates</option><option value="311">United Kingdom</option><option value="312">United States</option><option value="313">United States Virgin Islands</option><option value="314">Uruguay</option><option value="315">Uzbekistan</option><option value="316">Vanuatu</option><option value="317">Venezuela</option><option value="318">Vietnam</option><option value="319">West Bank and Gaza Strip</option><option value="320">Western Sahara</option><option value="321">Yemen</option><option value="322">Zambia</option><option value="326">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group">
                                                <input type="text" class="form-control" id="present_country_address" name="present_country_address" placeholder="Type your address">
                                            </div> -->
                                        </div>

                                        <div class="select-wrap ">
                                            <div class="row">
                                                <div class="col-sm-4 pr-control btn-form-control hidden">
                                                    <div class="form-group">
                                                        <select class="form-control" id="present_district" name="present_district" onchange="GetLoadLocations(0,'present','EN','addressForm');">
                                                            <option value="-1" selected="">Select District</option>
                                                            <option value="1">Brahmanbaria</option><option value="2">Bagerhat</option><option value="3">Bandarban</option><option value="4">Barishal</option><option value="5">Bhola</option><option value="6">Bogura</option><option value="7">Barguna</option><option value="8">Chandpur</option><option value="9">Chapainawabganj</option><option value="10">Chattogram</option><option value="11">Chuadanga</option><option value="12">Cumilla</option><option value="13">Cox's Bazar</option><option value="14" selected="">Dhaka</option><option value="15">Dinajpur</option><option value="16">Faridpur</option><option value="17">Feni</option><option value="18">Gaibandha</option><option value="19">Gazipur</option><option value="20">Gopalganj</option><option value="21">Habiganj</option><option value="22">Jamalpur</option><option value="23">Jashore</option><option value="24">Jhalokathi</option><option value="25">Jhenaidah</option><option value="26">Joypurhat</option><option value="27">Khagrachari</option><option value="28">Khulna</option><option value="29">kishoreganj</option><option value="30">Kurigram</option><option value="31">Kushtia</option><option value="32">Lalmonirhat</option><option value="33">Laxmipur</option><option value="34">Madaripur</option><option value="35">Magura</option><option value="36">Manikganj</option><option value="37">Meherpur</option><option value="38">MoulaviBazar</option><option value="39">Munshiganj</option><option value="40">Mymensingh</option><option value="41">Naogaon</option><option value="42">Narail</option><option value="43">Narayanganj</option><option value="44">Narsingdi</option><option value="45">Natore</option><option value="46">Netrokona</option><option value="47">Nilphamari</option><option value="48">Noakhali</option><option value="49">Pabna</option><option value="50">Panchagarh</option><option value="51">Patuakhali</option><option value="52">Pirojpur</option><option value="53">Rajbari</option><option value="54">Rajshahi</option><option value="55">Rangamati</option><option value="56">Rangpur</option><option value="57">Satkhira</option><option value="58">Shariatpur</option><option value="59">Sherpur</option><option value="60">Sirajganj</option><option value="61">Sunamganj</option><option value="62">Sylhet</option><option value="63">Tangail</option><option value="64">Thakurgaon</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 p-control btn-form-control hidden">
                                                    <div class="form-group" id="present_thanaLocation">
                                                        <select class="form-control" id="present_thana" name="present_thana" onchange="GetLoadLocations(1,'present','EN','addressForm');">
                                                            <option value="-1" selected="">Select Thana</option>
                                                            <option value="1658">Joypara</option><option value="1102">Adabor</option><option value="1126">Badda</option><option value="1146">Bangsal</option><option value="1178">Bimanbandar</option><option value="1194">Cantonment</option><option value="1195">Chak Bazar</option><option value="1224">Dakshinkhan</option><option value="1227">Darus Salam</option><option value="1238">Demra</option><option value="1242">Dhamrai</option><option value="1244">Dhanmondi</option><option value="1253">Dohar</option><option value="1280">Gendaria</option><option value="1293">Gulshan</option><option value="1306">Hazaribagh</option><option value="1320">Jatrabari</option><option value="1333">Kadamtali</option><option value="1334">Kafrul</option><option value="1337">Kalabagan</option><option value="1354">Kamrangirchar</option><option value="1368">Keraniganj</option><option value="1376">Khilgaon</option><option value="1377">Khilkhet</option><option value="1383">Kotwali</option><option value="1397">Lalbagh</option><option value="1431">Mirpur</option><option value="1438">Mohakhali</option><option value="1439">Mohammadpur</option><option value="1448">Motijheel</option><option value="1482">Nawabganj</option><option value="1486">Newmarket</option><option value="1498">Pallabi</option><option value="1499">Paltan</option><option value="1538">Ramna</option><option value="1540">Rampura</option><option value="1554">Sabujbagh</option><option value="1570">Savar</option><option value="1572">Shah Ali</option><option value="1574">Shahbag</option><option value="1584">Sher-e-Bangla Nagar</option><option value="1593">Shyampur</option><option value="1617">Sutrapur</option><option value="1629">Tejgaon</option><option value="1630">Tejgaon Industrial Area</option><option value="1640">Turag</option><option value="1644">Uttar Khan</option><option value="1645">Uttara</option><option value="1678">Shahjahanpur</option><option value="1679">Shahjalal Airport</option><option value="1680">Uttara East</option><option value="1681">Uttara West</option><option value="1682">Vatara</option><option value="1683">Wari</option><option value="1684">Bangshal</option><option value="1685">Dakshin Keraniganj</option><option value="1686">Dakshin Khan</option><option value="1687">Darussalam</option><option value="1688">Dhaka Railway</option><option value="1689">Gandaria</option><option value="1690">Mugda</option><option value="1691">New Market</option><option value="1692">Shahbagh</option><option value="1693">South Keraniganj</option><option value="1694">Vashantek</option><option value="1752">New Market TSO</option><option value="1664">Ashulia</option><option value="1665">Rupnagar</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4 pl-control btn-form-control hidden">
                                                    <div class="form-group" id="present_POLocation">
                                                        <select class="form-control" id="present_p_office" name="present_p_office">
                                                            <option value="-1" selected="">Select P.O</option>
                                                            <option value="323">East Timor</option><option value="104">American Samoa</option><option value="105">Andorra</option><option value="108">Antarctica</option><option value="109">Antigua</option><option value="116">Bahamas</option><option value="124">Bermuda</option><option value="132">Bulgaria</option><option value="137">Cameroon</option><option value="141">Chad</option><option value="143">China</option><option value="148">Cook Islands</option><option value="157">Dominica</option><option value="158">Dominican Republic</option><option value="159">Ecuador</option><option value="161">El Salvador</option><option value="163">Eritrea</option><option value="164">Estonia</option><option value="167">Fiji</option><option value="170">French Guiana</option><option value="171">French Polynesia</option><option value="172">Gabon</option><option value="174">Gaza Strip and West Bank</option><option value="176">Germany</option><option value="178">Gibraltar</option><option value="179">Greece</option><option value="180">Greenland</option><option value="181">Grenada</option><option value="184">Guatemala</option><option value="185">Guinea</option><option value="186">Guinea-Bissau</option><option value="187">Guyana</option><option value="188">Haiti</option><option value="190">Honduras</option><option value="192">Hungary</option><option value="194">India</option><option value="195">Indonesia</option><option value="197">Iraq</option><option value="198">Ireland</option><option value="200">Italy</option><option value="202">Japan</option><option value="203">Jordan</option><option value="204">Kazakhstan</option><option value="205">Kenya</option><option value="208">Kyrgyzstan</option><option value="211">Lebanon</option><option value="212">Lesotho</option><option value="214">Libya</option><option value="222">Malaysia</option><option value="224">Mali</option><option value="226">Marshall Islands</option><option value="228">Mauritania</option><option value="232">Federated States of Micronesia</option><option value="236">Montserrat</option><option value="241">Nepal</option><option value="242">Netherlands</option><option value="245">New Zealand</option><option value="247">Niger</option><option value="248">Nigeria</option><option value="251">Norway</option><option value="258">Peru</option><option value="261">Poland</option><option value="262">Portugal</option><option value="264">Qatar</option><option value="265">Reunion</option><option value="268">Rwanda</option><option value="269">Saint Kitts and Nevis</option><option value="271">Saint Pierre and Miquelon</option><option value="272">Saint Vincent and the Grenadines</option><option value="276">Saudi Arabia</option><option value="277">Senegal</option><option value="285">Somalia</option><option value="286">South Africa</option><option value="289">Sri Lanka</option><option value="290">Sudan</option><option value="293">Sweden</option><option value="295">Syria</option><option value="296">Taiwan</option><option value="297">Tajikistan</option><option value="299">Thailand</option><option value="302">Trinidad and Tobago</option><option value="303">Tunisia</option><option value="304">Turkey</option><option value="311">United Kingdom</option><option value="312">United States</option><option value="314">Uruguay</option><option value="316">Vanuatu</option><option value="319">West Bank and Gaza Strip</option><option value="321">Yemen</option><option value="101">Afghanistan</option><option value="102">Albania</option><option value="103">Algeria</option><option value="106">Angola</option><option value="107">Anguilla</option><option value="110">Argentina</option><option value="111">Armenia</option><option value="112">Aruba</option><option value="113">Australia</option><option value="114">Austria</option><option value="115">Azerbaijan</option><option value="117">Bahrain</option><option value="118">Bangladesh</option><option value="119">Barbados</option><option value="120">Belarus</option><option value="121">Belgium</option><option value="122">Belize</option><option value="123">Benin</option><option value="125">Bhutan</option><option value="126">Bolivia</option><option value="127">Bosnia and Herzegovina</option><option value="128">Botswana</option><option value="129">Brazil</option><option value="130">British Virgin Islands</option><option value="131">Brunei</option><option value="133">Burkina Faso</option><option value="134">Myanmar</option><option value="135">Burundi</option><option value="136">Cambodia</option><option value="138">Canada</option><option value="139">Cape Verde</option><option value="140">Central African Republic</option><option value="142">Chile</option><option value="144">Colombia</option><option value="145">Comoros</option><option value="146">Congo (Zaire)</option><option value="147">Congo</option><option value="149">Costa Rica</option><option value="150">Cote d'Ivoire (Ivory Coast)</option><option value="151">Croatia</option><option value="152">Cuba</option><option value="153">Cyprus</option><option value="154">Czech Republic</option><option value="155">Denmark</option><option value="156">Djibouti</option><option value="160">Egypt</option><option value="162">Equatorial Guinea</option><option value="165">Ethiopia</option><option value="166">Falkland Islands</option><option value="168">Finland</option><option value="169">France</option><option value="173">The Gambia</option><option value="175">Georgia</option><option value="177">Ghana</option><option value="182">Guadeloupe</option><option value="183">Guam</option><option value="189">The Holy See</option><option value="191">Hong Kong</option><option value="193">Iceland</option><option value="196">Iran</option><option value="199">Israel</option><option value="201">Jamaica</option><option value="206">Kiribati</option><option value="207">Kuwait</option><option value="209">Laos</option><option value="210">Latvia</option><option value="213">Liberia</option><option value="215">Liechtenstein</option><option value="216">Lithuania</option><option value="217">Luxembourg</option><option value="218">Macau</option><option value="219">Macedonia</option><option value="220">Madagascar</option><option value="221">Malawi</option><option value="223">Maldives</option><option value="225">Malta</option><option value="227">Martinique</option><option value="229">Mauritius</option><option value="230">Mayotte</option><option value="231">Mexico</option><option value="233">Moldova</option><option value="234">Monaco</option><option value="235">Mongolia</option><option value="237">Morocco</option><option value="238">Mozambique</option><option value="239">Namibia</option><option value="240">Nauru</option><option value="243">Netherlands Antilles</option><option value="244">New Caledonia</option><option value="246">Nicaragua</option><option value="249">North Korea</option><option value="250">Northern Mariana Islands</option><option value="252">Oman</option><option value="253">Pakistan</option><option value="254">Palau</option><option value="255">Panama</option><option value="256">Papua New Guinea</option><option value="257">Paraguay</option><option value="259">Philippines</option><option value="260">Pitcairn Islands</option><option value="263">Puerto Rico</option><option value="266">Romania</option><option value="267">Russia</option><option value="270">Saint Lucia</option><option value="273">Samoa</option><option value="274">San Marino</option><option value="275">Sao Tome and Principe</option><option value="278">Serbia</option><option value="279">Seychelles</option><option value="280">Sierra Leone</option><option value="281">Singapore</option><option value="282">Slovakia</option><option value="283">Slovenia</option><option value="284">Solomon Islands</option><option value="287">South Korea</option><option value="288">Spain</option><option value="291">Suriname</option><option value="292">Swaziland</option><option value="294">Switzerland</option><option value="298">Tanzania</option><option value="300">Togo</option><option value="301">Tonga</option><option value="305">Turkmenistan</option><option value="306">Turks and Caicos Islands</option><option value="307">Tuvalu</option><option value="308">Uganda</option><option value="309">Ukraine</option><option value="310">United Arab Emirates</option><option value="313">United States Virgin Islands</option><option value="315">Uzbekistan</option><option value="317">Venezuela</option><option value="318">Vietnam</option><option value="320">Western Sahara</option><option value="322">Zambia</option><option value="324">South Sudan</option><option value="1001">Barishal Division</option><option value="1002">Chattogram Division</option><option value="1003">Dhaka Division</option><option value="1004">Khulna Division</option><option value="1005">Mymensingh Division</option><option value="1006">Rajshahi Division</option><option value="1007">Rangpur Division</option><option value="1008">Sylhet Division</option><option value="325">Montenegro</option><option value="326">Zimbabwe</option><option value="-1">Anywhere in Bangladesh</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="form-group btn-form-control hidden">
                                                <input type="text" class="form-control" id="present_Village" name="present_Village" placeholder="Type your House No/ Road / Village">
                                            </div> -->
                                        </div>

                                        <div class="form-group btn-form-control hidden">
                                            <input type="text" class="form-control" id="present_Village" name="present_Village" value="61/2, Shukrabad ,Dhanmondi,." placeholder="Type your House No / Road / Village">
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="address-wrap permanent-address">
                                        <div class="title-wrap">
                                            <label for="permanentAddress">Permanent
                                                Address
                                            </label>
                                            <div class="checkbox btn-form-control hidden">
                                                <label><input type="checkbox" class="same-address" name="same_address">Same as Present Address</label>
                                            </div>
                                        </div>
                                        <div class="disable-area "> 
                                            <div class="form-group">
                                                <div id="txtPermanentAdd" cols="30" class="height-2x address_Previous " style="margin-bottom: 5px;">Village : Gangkanda, Post Office : Panchgachia, Upazilla : Daudkandi, District : Comilla.</div>
                                            
                                                    <input type="text" class="form-control input-disabled btn-form-control hidden" id="permanentAddress" value="Village : Gangkanda, Post Office : Panchgachia, Upazilla : Daudkandi, District : Comilla." readonly="readonly">
                                                 
                                            </div>
                                            <div class="form-group btn-form-control hidden" id="pr_Option">
                                            
                                                    <label for="presentAddress" class="color-green">
                                                        With the new format update your address in more
                                                        easy
                                                        and organized way.
                                                    </label>
                                                 
                                                <label class="radio-inline inside"><input type="radio" name="permanentLocation" value="0">Inside
                                                    Bangladesh</label>
                                                <label class="radio-inline outside"><input type="radio" name="permanentLocation" value="1" class="outside">Outside Bangladesh</label>
                                            </div>
                                            <div class="select-country hide " id="permanentCountryID">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <select class="form-control" id="permanent_country_list" name="permanent_country_list">
                                                                <option value="-1" selected="">Select Country</option>
                                                                <option value="101">Afghanistan</option><option value="102">Albania</option><option value="103">Algeria</option><option value="104">American Samoa</option><option value="105">Andorra</option><option value="106">Angola</option><option value="107">Anguilla</option><option value="108">Antarctica</option><option value="109">Antigua</option><option value="110">Argentina</option><option value="111">Armenia</option><option value="112">Aruba</option><option value="113">Australia</option><option value="114">Austria</option><option value="115">Azerbaijan</option><option value="116">Bahamas</option><option value="117">Bahrain</option><option value="119">Barbados</option><option value="120">Belarus</option><option value="121">Belgium</option><option value="122">Belize</option><option value="123">Benin</option><option value="124">Bermuda</option><option value="125">Bhutan</option><option value="126">Bolivia</option><option value="127">Bosnia and Herzegovina</option><option value="128">Botswana</option><option value="129">Brazil</option><option value="130">British Virgin Islands</option><option value="131">Brunei</option><option value="132">Bulgaria</option><option value="133">Burkina Faso</option><option value="135">Burundi</option><option value="136">Cambodia</option><option value="137">Cameroon</option><option value="138">Canada</option><option value="139">Cape Verde</option><option value="140">Central African Republic</option><option value="141">Chad</option><option value="142">Chile</option><option value="143">China</option><option value="144">Colombia</option><option value="145">Comoros</option><option value="147">Congo</option><option value="146">Congo (Zaire)</option><option value="148">Cook Islands</option><option value="149">Costa Rica</option><option value="150">Cote d'Ivoire (Ivory Coast)</option><option value="151">Croatia</option><option value="152">Cuba</option><option value="153">Cyprus</option><option value="154">Czech Republic</option><option value="155">Denmark</option><option value="156">Djibouti</option><option value="157">Dominica</option><option value="158">Dominican Republic</option><option value="323">East Timor</option><option value="159">Ecuador</option><option value="160">Egypt</option><option value="161">El Salvador</option><option value="162">Equatorial Guinea</option><option value="163">Eritrea</option><option value="164">Estonia</option><option value="165">Ethiopia</option><option value="166">Falkland Islands</option><option value="232">Federated States of Micronesia</option><option value="167">Fiji</option><option value="168">Finland</option><option value="169">France</option><option value="170">French Guiana</option><option value="171">French Polynesia</option><option value="172">Gabon</option><option value="174">Gaza Strip and West Bank</option><option value="175">Georgia</option><option value="176">Germany</option><option value="177">Ghana</option><option value="178">Gibraltar</option><option value="179">Greece</option><option value="180">Greenland</option><option value="181">Grenada</option><option value="182">Guadeloupe</option><option value="183">Guam</option><option value="184">Guatemala</option><option value="185">Guinea</option><option value="186">Guinea-Bissau</option><option value="187">Guyana</option><option value="188">Haiti</option><option value="190">Honduras</option><option value="191">Hong Kong</option><option value="192">Hungary</option><option value="193">Iceland</option><option value="194">India</option><option value="195">Indonesia</option><option value="196">Iran</option><option value="197">Iraq</option><option value="198">Ireland</option><option value="199">Israel</option><option value="200">Italy</option><option value="201">Jamaica</option><option value="202">Japan</option><option value="203">Jordan</option><option value="204">Kazakhstan</option><option value="205">Kenya</option><option value="206">Kiribati</option><option value="207">Kuwait</option><option value="208">Kyrgyzstan</option><option value="209">Laos</option><option value="210">Latvia</option><option value="211">Lebanon</option><option value="212">Lesotho</option><option value="213">Liberia</option><option value="214">Libya</option><option value="215">Liechtenstein</option><option value="216">Lithuania</option><option value="217">Luxembourg</option><option value="218">Macau</option><option value="219">Macedonia</option><option value="220">Madagascar</option><option value="221">Malawi</option><option value="222">Malaysia</option><option value="223">Maldives</option><option value="224">Mali</option><option value="225">Malta</option><option value="226">Marshall Islands</option><option value="227">Martinique</option><option value="228">Mauritania</option><option value="229">Mauritius</option><option value="230">Mayotte</option><option value="231">Mexico</option><option value="233">Moldova</option><option value="234">Monaco</option><option value="235">Mongolia</option><option value="325">Montenegro</option><option value="236">Montserrat</option><option value="237">Morocco</option><option value="238">Mozambique</option><option value="134">Myanmar</option><option value="239">Namibia</option><option value="240">Nauru</option><option value="241">Nepal</option><option value="242">Netherlands</option><option value="243">Netherlands Antilles</option><option value="244">New Caledonia</option><option value="245">New Zealand</option><option value="246">Nicaragua</option><option value="247">Niger</option><option value="248">Nigeria</option><option value="249">North Korea</option><option value="250">Northern Mariana Islands</option><option value="251">Norway</option><option value="252">Oman</option><option value="253">Pakistan</option><option value="254">Palau</option><option value="255">Panama</option><option value="256">Papua New Guinea</option><option value="257">Paraguay</option><option value="258">Peru</option><option value="259">Philippines</option><option value="260">Pitcairn Islands</option><option value="261">Poland</option><option value="262">Portugal</option><option value="263">Puerto Rico</option><option value="264">Qatar</option><option value="265">Reunion</option><option value="266">Romania</option><option value="267">Russia</option><option value="268">Rwanda</option><option value="269">Saint Kitts and Nevis</option><option value="270">Saint Lucia</option><option value="271">Saint Pierre and Miquelon</option><option value="272">Saint Vincent and the Grenadines</option><option value="273">Samoa</option><option value="274">San Marino</option><option value="275">Sao Tome and Principe</option><option value="276">Saudi Arabia</option><option value="277">Senegal</option><option value="278">Serbia</option><option value="279">Seychelles</option><option value="280">Sierra Leone</option><option value="281">Singapore</option><option value="282">Slovakia</option><option value="283">Slovenia</option><option value="284">Solomon Islands</option><option value="285">Somalia</option><option value="286">South Africa</option><option value="287">South Korea</option><option value="324">South Sudan</option><option value="288">Spain</option><option value="289">Sri Lanka</option><option value="290">Sudan</option><option value="291">Suriname</option><option value="292">Swaziland</option><option value="293">Sweden</option><option value="294">Switzerland</option><option value="295">Syria</option><option value="296">Taiwan</option><option value="297">Tajikistan</option><option value="298">Tanzania</option><option value="299">Thailand</option><option value="173">The Gambia</option><option value="189">The Holy See</option><option value="300">Togo</option><option value="301">Tonga</option><option value="302">Trinidad and Tobago</option><option value="303">Tunisia</option><option value="304">Turkey</option><option value="305">Turkmenistan</option><option value="306">Turks and Caicos Islands</option><option value="307">Tuvalu</option><option value="308">Uganda</option><option value="309">Ukraine</option><option value="310">United Arab Emirates</option><option value="311">United Kingdom</option><option value="312">United States</option><option value="313">United States Virgin Islands</option><option value="314">Uruguay</option><option value="315">Uzbekistan</option><option value="316">Vanuatu</option><option value="317">Venezuela</option><option value="318">Vietnam</option><option value="319">West Bank and Gaza Strip</option><option value="320">Western Sahara</option><option value="321">Yemen</option><option value="322">Zambia</option><option value="326">Zimbabwe</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group">
                                                    <input type="text" class="form-control" id="permanent_country_address" name="permanent_country_address" placeholder="Type your address">
                                                </div> -->
                                            </div>
                                            <div class="select-wrap ">
                                                <div class="row">
                                                    <div class="col-sm-4 pr-control btn-form-control hidden">
                                                        <div class="form-group">
                                                            <select class="form-control" id="permanent_district" name="permanent_district" onchange="GetLoadLocations(0,'permanent','EN','addressForm');">
                                                                <option value="-1" selected="">Select District</option>
                                                                <option value="1">Brahmanbaria</option><option value="2">Bagerhat</option><option value="3">Bandarban</option><option value="4">Barishal</option><option value="5">Bhola</option><option value="6">Bogura</option><option value="7">Barguna</option><option value="8">Chandpur</option><option value="9">Chapainawabganj</option><option value="10">Chattogram</option><option value="11">Chuadanga</option><option value="12">Cumilla</option><option value="13">Cox's Bazar</option><option value="14">Dhaka</option><option value="15">Dinajpur</option><option value="16">Faridpur</option><option value="17">Feni</option><option value="18">Gaibandha</option><option value="19">Gazipur</option><option value="20">Gopalganj</option><option value="21">Habiganj</option><option value="22">Jamalpur</option><option value="23">Jashore</option><option value="24">Jhalokathi</option><option value="25">Jhenaidah</option><option value="26">Joypurhat</option><option value="27">Khagrachari</option><option value="28">Khulna</option><option value="29">kishoreganj</option><option value="30">Kurigram</option><option value="31">Kushtia</option><option value="32">Lalmonirhat</option><option value="33">Laxmipur</option><option value="34">Madaripur</option><option value="35">Magura</option><option value="36">Manikganj</option><option value="37">Meherpur</option><option value="38">MoulaviBazar</option><option value="39">Munshiganj</option><option value="40">Mymensingh</option><option value="41">Naogaon</option><option value="42">Narail</option><option value="43">Narayanganj</option><option value="44">Narsingdi</option><option value="45">Natore</option><option value="46">Netrokona</option><option value="47">Nilphamari</option><option value="48">Noakhali</option><option value="49">Pabna</option><option value="50">Panchagarh</option><option value="51">Patuakhali</option><option value="52">Pirojpur</option><option value="53">Rajbari</option><option value="54">Rajshahi</option><option value="55">Rangamati</option><option value="56">Rangpur</option><option value="57">Satkhira</option><option value="58">Shariatpur</option><option value="59">Sherpur</option><option value="60">Sirajganj</option><option value="61">Sunamganj</option><option value="62">Sylhet</option><option value="63">Tangail</option><option value="64">Thakurgaon</option> 
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 p-control btn-form-control hidden">
                                                        <div class="form-group" id="permanent_thanaLocation">
                                                            <select class="form-control" id="permanent_thana" name="permanent_thana">
                                                                <option value="-1" selected="">Select Thana</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 pl-control btn-form-control hidden">
                                                        <div class="form-group" id="permanent_POLocation">
                                                            <select class="form-control" id="permanent_p_office" name="permanent_p_office">
                                                                <option value="-1" selected="">Select P.O</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="form-group btn-form-control hidden">
                                                    <input type="text" class="form-control" id="permanent_Village" name="permanent_Village" placeholder="Type your House No/ Road / Village">
                                                </div> -->
                                            </div>
                                            
                                            <div class="form-group btn-form-control hidden">
                                                <input type="text" class="form-control" id="permanent_Village" name="permanent_Village" value="" placeholder="Type your House No / Road / Village">
                                            </div>
                                        </div>
                                    </div>
                                    <input type="hidden" name="present_adrsID" value="1667490">
                                    <input type="hidden" name="permanent_adrsID" value="">
                                </div>
                                <div class="col-md-12">
                                    <div class="btn-form-control hidden">
                                        <a href="javascript:void(0)" class="btn btn-primary save" id="addressSaveBtn" onclick="commonUpdate('step_01_update_adrs.asp','addressForm','adrs_0','EN');">Save</a>
                                        <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" id="addressCloseBtn" class="btn btn-default btn-cancel reset">Close</a>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
        </div><!--end details address-->
                <!-- start career application information -->
        <div class="panel">
                           <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                 <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 Career and Application Information&nbsp;<i class="indicator icon-plus"></i>
                                 </a>
                              </h4>
                           </div>
                           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                 <div class="all-info cai_0">
                                    <div class="sub-header">
                                    <div id="alertDiv_cai"></div>
                                       <!--<h4>Your career information</h4>-->
                                       <div class="edit-tools">
                                          <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
                                          
                                       </div>
                                    </div>
                                    <form class="row view-mode" id="caiForm">
                                     
                                       <div class="col-md-12 form-group">
                                          <label for="">Objective&nbsp;<abbr title="Required" class="required"></abbr>
                                          <button type="button" class="btn sub-popover btn-form-control hidden" data-container="body" data-toggle="popover" data-placement="top" data-original-title="What is objective?" data-content="A resume objective is a short summary of your career growth. Objective should be carefully written to fit the job you are  applying for.">
                                       <span class="icon-question"></span>
                                       </button>
                                       </label>
                                          <textarea name="txtObjective" id="txtObjective" cols="10" rows="3" onkeyup="countLetter(this.id , 250 , 'CADD_sp' , 'Objective' , 1)" class="form-control height-2x">Have a strong desire to work in a challenging environment where I can utilize my education and skills. To achieve this aim I am determined to offer honesty, efficiency and sincerity to the optimum level.</textarea>
                                          <span id="CADD_sp" class="btn-form-control hidden" name="CADD_sp"></span>
                                          <div class="example-area m-t-10 btn-form-control hidden">
                                          <label>View Example 
                                          <button type="button" class="btn sub-popover btn-form-control" data-container="body" data-toggle="popover" data-placement="top" data-original-title="Objective Example" data-html="true" data-content="<div><h4>Good Example</h4>
                                          <p>To secure a position with a well-established organization with a stable environment that will lead to a lasting relationship in the field of HealthCare. To obtain a position that will enable the use of my strong organizational skills, Microsoft expertise, and ability to work well with people.<br/></p><h4>Bad Example</h4>
                                          <p> My objective is to deliver my best to satisfy my clients. I am dedicated and hard working. I will be very much active to meet the deadlines of your company.</p></div>">
                                          <span class="icon-question"></span>
                                          

                                       </button></label></div>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label for="">Present Salary</label>
                                          <input type="text" class="form-control" placeholder="" value="13000" name="txtPresentSalary" id="txtPresentSalary" onblur="extractNumber(this,0,false)" onkeypress="return blockNonNumbers(this, event, false, false);" onkeyup="extractNumber(this,0,false)" maxlength="10">
                                          <span class="input-note btn-form-control hidden">TK/ Month</span>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label for="">Expected Salary</label>
                                          <input type="text" class="form-control" placeholder="" value="25000" name="txtExpectedSalary" id="txtExpectedSalary" onblur="extractNumber(this,0,false)" onkeypress="return blockNonNumbers(this, event, false, false);" onkeyup="extractNumber(this,0,false)" maxlength="10">
                                          <span class="input-note btn-form-control hidden">TK/ Month</span>
                                       </div>

                                       <div class="col-md-6 form-group">
                                          <label for="">Looking for (Job Level)</label>

                                          <input class="form-control onclick-hidden" placeholder="" id="lookForView" value="Mid Level job" type="text">

                                          <div class="btn-form-control hidden">
                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Entry"> Entry Level 
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Mid" checked="checked"> Mid Level
                                             </label>

                                             <label class="radio-inline">
                                             <input type="radio" name="optLevel" id="levelRadio" value="Top"> Top Level 
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-6 form-group">
                                          <label for="">Available for (Job Nature)</label>

                                          <input class="form-control onclick-hidden" placeholder="" value="Full Time" type="text" id="availView">

                                          <div class="btn-form-control hidden">
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Full Time" checked="checked"> Full time
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Part Time"> Part time
                                             </label>
                                             <label class="radio-inline">
                                             <input type="radio" name="optAvail" id="avaiRadio" value="Contract"> Contract
                                             </label>
                                          </div>
                                       </div>
                                       <div class="col-md-12">
                                          <div class="btn-form-control hidden">
                                             <a href="javascript:void(0)" class="btn btn-primary save" onclick="cnahgeValueCai();commonUpdate('step_01_update_cai.asp','caiForm','cai_0','EN');">Save</a>
                                             <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="btn btn-default btn-cancel reset">Close</a>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                                 
                              </div>
                           </div>
        </div>
        <!-- end career application information -->
        <!-- start prefferred areas -->
        <div class="panel">
                        <div class="panel-heading" role="tab" id="headingFour">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Preferred Areas&nbsp;<i class="indicator icon-plus"></i>
                              </a>
                           </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                           <div class="panel-body">
                              <div class="all-info jclo_0">
                                 <div class="sub-header">
                                 <div id="alertDiv_jclo"></div>
                                    <!--<h4>Prefered area information</h4>-->
                                    <div class="edit-tools">
                                       <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
                                       
                                    </div>
                                 </div>
                                 <form class="row view-mode" id="jcloForm">
                                  
                                    <div class="form-group col-md-12">
                                       <label for="">Preferred Job Categories&nbsp;<abbr title="Required" class="required"></abbr></label><span class="input-note m-b-10 btn-form-control hidden">Preferred job categories represents your desired sector(s) to work <em><b>(at least 1 category any of section)</b></em></span>

                                       <div class="row">
                                       		<div class="col-md-6 clearfix">
                                            	
                                                <label for="">Functional&nbsp;<em class="btn-form-control hidden">(max 2)</em></label>
                                                	
                                                   	<div class="checkbox-container btn-form-control hidden">
                                                      <div id="item0" class="items_left"><label id="lebel0" class="industry_lebel"><input type="checkbox" value="1" id="1cat" name="chkBolckCM" onclick="getChkValue(1,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat1" class="industry_lebel">Accounting/Finance</span></label></div><div id="item1" class="items_left"><label id="lebel1" class="industry_lebel"><input type="checkbox" value="2" id="2cat" name="chkBolckCM" onclick="getChkValue(2,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat2" class="industry_lebel">Bank/Non-Bank Fin. Institution</span></label></div><div id="item2" class="items_left"><label id="lebel2" class="industry_lebel"><input type="checkbox" value="3" id="3cat" name="chkBolckCM" onclick="getChkValue(3,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat3" class="industry_lebel">Commercial/Supply Chain</span></label></div><div id="item3" class="items_left"><label id="lebel3" class="industry_lebel"><input type="checkbox" value="4" id="4cat" name="chkBolckCM" onclick="getChkValue(4,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat4" class="industry_lebel">Education/Training</span></label></div><div id="item4" class="items_left"><label id="lebel4" class="industry_lebel"><input type="checkbox" value="5" id="5cat" name="chkBolckCM" onclick="getChkValue(5,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat5" class="industry_lebel">Engineer/Architect</span></label></div><div id="item5" class="items_left"><label id="lebel5" class="industry_lebel"><input type="checkbox" value="6" id="6cat" name="chkBolckCM" onclick="getChkValue(6,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat6" class="industry_lebel">Garments/Textile</span></label></div><div id="item6" class="items_left"><label id="lebel6" class="industry_lebel"><input type="checkbox" value="7" id="7cat" name="chkBolckCM" onclick="getChkValue(7,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat7" class="industry_lebel">General Management/Admin</span></label></div><div id="item7" class="items_left"><label id="lebel7" class="industry_lebel"><input type="checkbox" value="8" id="8cat" name="chkBolckCM" onclick="getChkValue(8,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat8" class="industry_lebel">IT/Telecommunication</span></label></div><div id="item8" class="items_left"><label id="lebel8" class="industry_lebel"><input type="checkbox" value="9" id="9cat" name="chkBolckCM" onclick="getChkValue(9,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat9" class="industry_lebel">Marketing/Sales</span></label></div><div id="item9" class="items_left"><label id="lebel9" class="industry_lebel"><input type="checkbox" value="10" id="10cat" name="chkBolckCM" onclick="getChkValue(10,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat10" class="industry_lebel">Media/Advertisement/Event Mgt.</span></label></div><div id="item10" class="items_left"><label id="lebel10" class="industry_lebel"><input type="checkbox" value="11" id="11cat" name="chkBolckCM" onclick="getChkValue(11,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat11" class="industry_lebel">Medical/Pharma</span></label></div><div id="item11" class="items_left"><label id="lebel11" class="industry_lebel"><input type="checkbox" value="12" id="12cat" name="chkBolckCM" onclick="getChkValue(12,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat12" class="industry_lebel">NGO/Development</span></label></div><div id="item12" class="items_left"><label id="lebel12" class="industry_lebel"><input type="checkbox" value="13" id="13cat" name="chkBolckCM" onclick="getChkValue(13,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat13" class="industry_lebel">Research/Consultancy</span></label></div><div id="item13" class="items_left"><label id="lebel13" class="industry_lebel"><input type="checkbox" value="14" id="14cat" name="chkBolckCM" onclick="getChkValue(14,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat14" class="industry_lebel">Secretary/Receptionist</span></label></div><div id="item14" class="items_left"><label id="lebel14" class="industry_lebel"><input type="checkbox" value="15" id="15cat" name="chkBolckCM" onclick="getChkValue(15,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat15" class="industry_lebel">Data Entry/Operator/BPO</span></label></div><div id="item15" class="items_left"><label id="lebel15" class="industry_lebel"><input type="checkbox" value="16" id="16cat" name="chkBolckCM" onclick="getChkValue(16,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat16" class="industry_lebel">Customer Support/Call Centre</span></label></div><div id="item16" class="items_left"><label id="lebel16" class="industry_lebel"><input type="checkbox" value="17" id="17cat" name="chkBolckCM" onclick="getChkValue(17,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat17" class="industry_lebel">HR/Org. Development</span></label></div><div id="item17" class="items_left"><label id="lebel17" class="industry_lebel"><input type="checkbox" value="18" id="18cat" name="chkBolckCM" onclick="getChkValue(18,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat18" class="industry_lebel">Design/Creative</span></label></div><div id="item18" class="items_left"><label id="lebel18" class="industry_lebel"><input type="checkbox" value="19" id="19cat" name="chkBolckCM" onclick="getChkValue(19,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat19" class="industry_lebel">Production/Operation</span></label></div><div id="item19" class="items_left"><label id="lebel19" class="industry_lebel"><input type="checkbox" value="20" id="20cat" name="chkBolckCM" onclick="getChkValue(20,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat20" class="industry_lebel">Hospitality/ Travel/ Tourism</span></label></div><div id="item20" class="items_left"><label id="lebel20" class="industry_lebel"><input type="checkbox" value="21" id="21cat" name="chkBolckCM" onclick="getChkValue(21,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat21" class="industry_lebel">Beauty Care/ Health &amp; Fitness</span></label></div><div id="item21" class="items_left"><label id="lebel21" class="industry_lebel"><input type="checkbox" value="22" id="22cat" name="chkBolckCM" onclick="getChkValue(22,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat22" class="industry_lebel">Law/Legal</span></label></div><div id="item22" class="items_left"><label id="lebel22" class="industry_lebel"><input type="checkbox" value="23" id="23cat" name="chkBolckCM" onclick="getChkValue(23,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat23" class="industry_lebel">Electrician/ Construction/ Repair</span></label></div><div id="item23" class="items_left"><label id="lebel23" class="industry_lebel"><input type="checkbox" value="24" id="24cat" name="chkBolckCM" onclick="getChkValue(24,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat24" class="industry_lebel">Security/Support Service</span></label></div><div id="item24" class="items_left"><label id="lebel24" class="industry_lebel"><input type="checkbox" value="25" id="25cat" name="chkBolckCM" onclick="getChkValue(25,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat25" class="industry_lebel">Driving/Motor Technician</span></label></div><div id="item25" class="items_left"><label id="lebel25" class="industry_lebel"><input type="checkbox" value="26" id="26cat" name="chkBolckCM" onclick="getChkValue(26,'selected_Cat','FilterCat',3,'hidCountCat','cat');" class="email-notification-checkbox">&nbsp;<span id="Valuecat26" class="industry_lebel">Agro (Plant/Animal/Fisheries)</span></label></div>
                                                   </div>
                                       				<div class="chips-container" id="FilterCat">
                                         
                                          <div id="catDIV8" class="well well-sm"><span>IT/Telecommunication</span><a class="btn" href="javascript:removeDiv(8,0,'selected_Cat','hidCountCat','cat');">&nbsp;<i class="icon-times-o"></i></a><input type="hidden" id="Hidcat0" name="Hidcat0" value="8"></div><input type="hidden" id="hidCountCat" name="hidCountCat" value="1">
                                          
                                       </div>
                                        <input name="selected_Cat" type="hidden" id="selected_Cat" value=",8,">
    									<input name="hOption" type="hidden" id="hOption" value="1">
    									<input type="hidden" id="hidChar" name="hidChar">
    									<input type="hidden" id="hidACCat" name="hidACCat" value="Mohammad Imam">
                                               
                                            </div>
                                            <div class="col-md-6 clearfix">
												
                                       <label for="">Special Skills&nbsp;<em class="btn-form-control hidden">(max 2)</em></label>
                                        <div class="checkbox-container btn-form-control hidden">
                                          <div id="item0" class="items_left"><label id="lebel0" class="industry_lebel"><input type="checkbox" value="79" id="79BlueCat" name="chkBolckCM" onclick="getChkValue(79,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat79" class="industry_lebel">পিয়ন</span></label></div><div id="item1" class="items_left"><label id="lebel1" class="industry_lebel"><input type="checkbox" value="80" id="80BlueCat" name="chkBolckCM" onclick="getChkValue(80,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat80" class="industry_lebel">ক্লিনার</span></label></div><div id="item2" class="items_left"><label id="lebel2" class="industry_lebel"><input type="checkbox" value="81" id="81BlueCat" name="chkBolckCM" onclick="getChkValue(81,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat81" class="industry_lebel">মালী</span></label></div><div id="item3" class="items_left"><label id="lebel3" class="industry_lebel"><input type="checkbox" value="78" id="78BlueCat" name="chkBolckCM" onclick="getChkValue(78,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat78" class="industry_lebel">গার্মেন্টস টেকনিশিয়ান / মেশিন অপারেটর</span></label></div><div id="item4" class="items_left"><label id="lebel4" class="industry_lebel"><input type="checkbox" value="82" id="82BlueCat" name="chkBolckCM" onclick="getChkValue(82,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat82" class="industry_lebel">কার্পেন্টার</span></label></div><div id="item5" class="items_left"><label id="lebel5" class="industry_lebel"><input type="checkbox" value="83" id="83BlueCat" name="chkBolckCM" onclick="getChkValue(83,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat83" class="industry_lebel">শো-রুম সহকারি/সেলসম্যান</span></label></div><div id="item6" class="items_left"><label id="lebel6" class="industry_lebel"><input type="checkbox" value="61" id="61BlueCat" name="chkBolckCM" onclick="getChkValue(61,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat61" class="industry_lebel">ডাটা এন্ট্রি/ কম্পিউটার অপারেটর</span></label></div><div id="item7" class="items_left"><label id="lebel7" class="industry_lebel"><input type="checkbox" value="62" id="62BlueCat" name="chkBolckCM" onclick="getChkValue(62,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat62" class="industry_lebel">মেকানিক/ টেকনিশিয়ান</span></label></div><div id="item8" class="items_left"><label id="lebel8" class="industry_lebel"><input type="checkbox" value="63" id="63BlueCat" name="chkBolckCM" onclick="getChkValue(63,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat63" class="industry_lebel">নার্স</span></label></div><div id="item9" class="items_left"><label id="lebel9" class="industry_lebel"><input type="checkbox" value="64" id="64BlueCat" name="chkBolckCM" onclick="getChkValue(64,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat64" class="industry_lebel">ওয়েটার / ওয়েট্রেস</span></label></div><div id="item10" class="items_left"><label id="lebel10" class="industry_lebel"><input type="checkbox" value="65" id="65BlueCat" name="chkBolckCM" onclick="getChkValue(65,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat65" class="industry_lebel">প্যাথলজিষ্ট/ল্যাব সহকারী</span></label></div><div id="item11" class="items_left"><label id="lebel11" class="industry_lebel"><input type="checkbox" value="66" id="66BlueCat" name="chkBolckCM" onclick="getChkValue(66,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat66" class="industry_lebel">ইলেকট্রিশিয়ান/ইলেকট্রনিকস্ টেকনিশিয়ান</span></label></div><div id="item12" class="items_left"><label id="lebel12" class="industry_lebel"><input type="checkbox" value="67" id="67BlueCat" name="chkBolckCM" onclick="getChkValue(67,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat67" class="industry_lebel">ড্রাইভার</span></label></div><div id="item13" class="items_left"><label id="lebel13" class="industry_lebel"><input type="checkbox" value="68" id="68BlueCat" name="chkBolckCM" onclick="getChkValue(68,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat68" class="industry_lebel">শেফ/বাবুর্চী</span></label></div><div id="item14" class="items_left"><label id="lebel14" class="industry_lebel"><input type="checkbox" value="69" id="69BlueCat" name="chkBolckCM" onclick="getChkValue(69,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat69" class="industry_lebel">হাউজকিপার</span></label></div><div id="item15" class="items_left"><label id="lebel15" class="industry_lebel"><input type="checkbox" value="70" id="70BlueCat" name="chkBolckCM" onclick="getChkValue(70,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat70" class="industry_lebel">সিকিউরিটি গার্ড</span></label></div><div id="item16" class="items_left"><label id="lebel16" class="industry_lebel"><input type="checkbox" value="71" id="71BlueCat" name="chkBolckCM" onclick="getChkValue(71,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat71" class="industry_lebel">গ্রাফিক ডিজাইনার</span></label></div><div id="item17" class="items_left"><label id="lebel17" class="industry_lebel"><input type="checkbox" value="72" id="72BlueCat" name="chkBolckCM" onclick="getChkValue(72,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat72" class="industry_lebel">ওয়েল্ডার</span></label></div><div id="item18" class="items_left"><label id="lebel18" class="industry_lebel"><input type="checkbox" value="73" id="73BlueCat" name="chkBolckCM" onclick="getChkValue(73,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat73" class="industry_lebel">প্লাম্বার/পাইপফিটিং</span></label></div><div id="item19" class="items_left"><label id="lebel19" class="industry_lebel"><input type="checkbox" value="74" id="74BlueCat" name="chkBolckCM" onclick="getChkValue(74,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat74" class="industry_lebel">স্যুইং মেশিন অপারেটর</span></label></div><div id="item20" class="items_left"><label id="lebel20" class="industry_lebel"><input type="checkbox" value="75" id="75BlueCat" name="chkBolckCM" onclick="getChkValue(75,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat75" class="industry_lebel">রাজমিস্ত্রি/ নির্মান কর্মী</span></label></div><div id="item21" class="items_left"><label id="lebel21" class="industry_lebel"><input type="checkbox" value="76" id="76BlueCat" name="chkBolckCM" onclick="getChkValue(76,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat76" class="industry_lebel">CAD অপারেটর</span></label></div><div id="item22" class="items_left"><label id="lebel22" class="industry_lebel"><input type="checkbox" value="77" id="77BlueCat" name="chkBolckCM" onclick="getChkValue(77,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat77" class="industry_lebel">ডেলিভারী ম্যান</span></label></div><div id="item23" class="items_left"><label id="lebel23" class="industry_lebel"><input type="checkbox" value="-11" id="-11BlueCat" name="chkBolckCM" onclick="getChkValue(-11,'selected_blue_Cat','FilterBlueCat',3,'hidCountBlueCat','BlueCat');" class="email-notification-checkbox">&nbsp;<span id="ValueBlueCat-11" class="industry_lebel">অন্যান্য স্পেশাল স্কিল্&zwnj;ড জব্&zwnj;স</span></label></div>
                                       </div>
                                       <div class="chips-container" id="FilterBlueCat">
                                         
                                          <input type="hidden" id="hidCountBlueCat" name="hidCountBlueCat" value="0">
                                       </div>
                                        <input name="selected_blue_Cat" type="hidden" id="selected_blue_Cat" value="">
    									<input name="hOption" type="hidden" id="hOption" value="1">
    									<input type="hidden" id="hidChar" name="hidChar">
    									
                                    
                                             	
                                             </div>
                                       </div>
                                    </div>
                                    
                                   <!-- blue color -->
                                    
                                    
                                    <div class="form-group col-md-12">
                                       <label for="">Preferred Job Location&nbsp;<abbr title="Required" class="required"></abbr></label>
                                       <span class="input-note m-b-10 btn-form-control hidden">Preferred Job Location defines the <b>geographical place</b> where you prefer to work.</span>
                                       <div class="" id="subInsideDiv">
                                          <label for="" class="text-normal">Inside Bangladesh:&nbsp;<small class="note-grey btn-form-control hidden">Districts (max 15)</small></label>
                                          <div id="lstJobArea">
                                          <div class="selected-location">
                                           <input class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control" type="text" id="txtSubject" name="txtSubject" onclick="SetParam(1,'hid_location','0',2,'');" placeholder="Add district">
                                              <div id="FilterLocation" class="chips-container">
                                              	
                                              	<input type="hidden" id="hidCountDist" name="hidCountDist" value="0">
                                              </div>
                                            
                                             <input type="hidden" name="hid_location" id="hid_location" readonly="readonly">
                                          </div>
                                          </div>
                                       </div>
                                     <input id="selected_Dist" type="hidden" name="selected_Dist" value="">
                                       
                                       
                                       <div class="" id="subOutsideDiv">
                                          <label for="" class="text-normal">Outside Bangladesh:&nbsp;<small class="note-grey btn-form-control hidden">Countries (max 10)</small></label>
                                          <div id="lstJobArea">
                                          <div class="selected-location">
                                          	<input class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control" type="text" id="txtOutSide" name="txtSubject" onclick="SetParam(1,'hid_outLocation','1',3,'');" placeholder="Add country">
                                              <div id="FilterOverseas" class="chips-container">
                                              	<input type="hidden" id="hidCountOver" name="hidCountOver" value="0">
                                              </div>
                                             
                                             <input type="hidden" name="hid_location" id="hid_outLocation" readonly="readonly">
                                          </div>
                                          </div>
                                       </div>
                                    </div>
                                    <input id="selected_JobCountry" type="hidden" name="selected_JobCountry" value="">
                                    
                                    <div class="form-group col-md-12">
                                       <label for="">Add your preferred organization type (max 12)</label>
                                       <div class="" id="prefOrgDiv">
                                          <!--<span class="input-note m-b-10 btn-form-control hidden">Add your preferred Organization type(max 12)</b>.</span>-->
                                       <div id="lstJobArea">
                                         <div class="selected-location">
                                         <input type="text" id="txtJobArea" name="txtJobArea" class="autosuggest txt-add-location ui-autocomplete-input btn-form-control hidden form-control" onclick="SetParam(2,'hid_jobArea','',4,'');" placeholder="Add organization type">
                                           <div class="chips-container" id="FilterOrg">
                                         
                                               <input type="hidden" id="hidOrg" name="hidOrg" value="0">
                                           </div>
                                          
                                             
                                             <input type="hidden" name="hid_jobArea" id="hid_jobArea" readonly="readonly">
                                             
                                          
                                       		</div>
                                       	  </div>
                                       </div>
                                    </div>
                                    <input id="selected_Job" type="hidden" name="selected_Job" value="">
                                    <div class="col-md-12">
                                       <div class="btn-form-control hidden">
                                          <a href="javascript:void(0)" class="btn btn-primary save" onclick="commonUpdate('step_01_update_jclo.asp','jcloForm','jclo_0','EN');">Save</a>
                                          <a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="btn btn-default btn-cancel">Close</a>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
        <!-- end prefferred areas -->
        <!-- other relevant information -->
        <div class="panel">
                        <div class="panel-heading" role="tab" id="headingFive">
                           <h4 class="panel-title">
                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Other Relevant Information&nbsp;<i class="indicator icon-plus"></i>
                              </a>
                           </h4>
                        </div>


                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                           <div class="panel-body">
                              <div class="all-info ori_0">
                                 <div class="sub-header">
                                
                                   <!-- <h4>Your Personal Informations</h4>-->
                                    <div class="edit-tools">
                                       <button class="btn edit-btn"><i class="icon-pencil-o"></i>&nbsp;Edit</button>
                                       <!--<button class="btn delete-btn"><i class="icon-trush-can"></i>&nbsp;Delete</button>-->
                                    </div>
                                 </div>
                                 	<div id="commonForm_ori">
                                        <div id="commonForm_ori_0">
                                       	  <div id="alertDiv_ori"></div><form class="row view-mode" id="oriForm"><div class="col-md-12 form-group"><label for="">Career Summary<button type="button" class="btn sub-popover btn-form-control hidden" data-container="body" data-toggle="popover" data-placement="top" data-original-title="What is career summary?" data-content="The career summary section is an optional customized section of a resume that lists key achievements, skills, and experience relevant to the position for which you are applying.The career summary section of your resume focuses on your relevant experience and lets the prospective employer know that you have taken the time to create a resume that shows how you are qualified for the job."><span class="icon-question"></span></button></label><textarea name="txtCareerSummary" id="txtCareerSummary" cols="10" rows="3" class="form-control height-2x btn-form-control hidden" onkeyup="countLetter(this.id,490,'CADD_sp1','Career','1')"></textarea><div class="onclick-hidden textarea-texts"></div><span id="CADD_sp1" class="btn-form-control hidden" name="CADD_sp1"></span><div class="example-area m-t-10 btn-form-control hidden"><label>View Example <button type="button" class="btn sub-popover btn-form-control" data-container="body" data-toggle="popover" data-placement="top" data-original-title="Objective Example" data-html="true" data-content="<div><h4>Good Example</h4><strong>Corporate Real Estate Executive (Your Job title):</strong><br/>Increasing Bottom-Line Profitability through Real Estate Strategies<br/><strong>Professional Profile </strong><br/>Accomplished executive with a proven ability to develop and implement real estate strategies that support business and financial objectives. Have led key initiatives that reduced operating budget by $32 million and contributed to 550 percent stock increase. Recognized as an expert in applying financial concepts to asset management decisions.<br/><strong>Areas of Expertise</strong><br/><div style=margin-left:5px><ul><li> High-Volume, High-Dollar Negotiations</li><li>Strategic/Tactical Planning</li><li>Multimillion-Dollar Operating and Capital Budget Administration</li><li>Analytical and Financial Skills</li><li>Statistical Modeling and ROI Analyses</li></ul></div></p><h4>Bad Example</h4><p>I worked for many reputed companies and earned enough knowledge in the field of your given post. I think I am the most eligible candidate for your given post.</p></div>"><span class="icon-question"></span></button></label></div></div><div class="col-md-12 form-group"><label for="">Special Qualification<button type="button" class="btn sub-popover btn-form-control hidden" data-container="body" data-toggle="popover" data-placement="top" data-original-title="What is Special Qualification?" data-content="Special Qualifications (Replacing the Objective) is 3-5 concise sentences on a resume.  It is a summary of your most pertinent experience and qualifications that is customized for the position in which you are applying. This is also a place where attributes, such as punctuality and honesty, can be conveyed that would otherwise not be appropriate under work experience.  Use the job description to help identify the areas of expertise, distinction, traits and related experiences you have without using the words " i'="" or="" 'my'.'=""><span class="icon-question"></span></button></label><textarea name="txtSpecialQualification" id="txtSpecialQualification" cols="10" rows="3" class="form-control height-2x btn-form-control hidden" onkeyup="countLetter(this.id,245,'CADD_sp2','Special','1')"></textarea><div class="onclick-hidden textarea-texts"></div><span id="CADD_sp2" class="btn-form-control hidden" name="CADD_sp2"></span><div class="example-area m-t-10 btn-form-control hidden"><label>View Example <button type="button" class="btn sub-popover btn-form-control" data-container="body" data-toggle="popover" data-placement="top" data-original-title="Objective Example" data-html="true" data-content="<div><h4>Good Example</h4><p><strong>Example #1</strong><div style=margin-left:5px><ul><li>Three years experience working in the_______ (fill in the blank) industry </li><li>Competent at managing responsibilities in a high-volume atmosphere</li><li>Skilled at interacting with customers of all socioeconomic backgrounds </li><li>Hard worker, quick learner, and ability to assume responsibility</li></ul></div><br/><strong>Example2</strong><div style=margin-left:5px><ul><li>Work well under pressure as part of a team</li><li>Well-groomed appearance</li><li>Polite, respectful, and courteous manners</li><li>Responsible, efficient, and flexible</li><li>Ability to work in a fast-paced, intense environment smoothly</li><li>Ability to elicit confidence and build rapport</li><li>Talented in problem solving and office system design</li></ul><br/><strong>Example #3</strong><ul><li>Quick learner, eager to further my _____(fill in the blank) knowledge and skills</li><li>Meticulous worker; attentive to quality and detail</li><li>Able and willing to assist co-workers, supervisors, and clients in a cooperative manner</li><li>Committed to providing total quality work</li><li>Dependable employee with common sense and a variety of skills</li><li>Work well under pressure to meet deadlines</li></ul></div></p><h4>Bad Example</h4><p>I am very energetic and dedicated to office work. I am regular and know the very basic of your required field. I have 5 years of experience in the field and I think I am the best candidate for your Job post.</p></div>"><span class="icon-question"></span></button></label></div></div><div class="form-group col-md-12"><label for="">Keywords&nbsp;<abbr title="Required" class="required"></abbr><button type="button" class="btn sub-popover btn-form-control hidden" data-container="body" data-toggle="popover" data-placement="top" data-original-title="What is Keywords?" data-content="Keywords are specific words or phrases that job seekers use to search for jobs and employers use to find the right candidates. Keywords are used as search criteria in the same way you do research on the Internet. The more keywords you use, the more closely the job will match what you are really looking for.Example:  MBA, BBA, Photography, Computer Diploma, Visual Basic, Visual C++, Java, HTML, Photo Shop, AIUB, BUET, DU, IBA, NSU etc"><span class="icon-question"></span></button></label><div class="onclick-hidden textarea-texts">CSE</div><input class="form-control btn-form-control hidden" placeholder="Add keywords" type="text" value="CSE" name="txtKeyword" id="txtKeyword"></div><div class="col-md-12"><div class="btn-form-control hidden"><a href="javascript:void(0)" class="btn btn-primary save" onclick="commonUpdate('step_01_update_ori.asp','oriForm','ori_0','EN');">Save</a><a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp" class="btn btn-default btn-cancel reset">Close</a></div></div></form>
                                        </div>
                                    </div>
                                        	
                              </div>
                           </div>
                        </div>
         </div>
        <!--end other relevant info -->
        
        
    </div> <!-- end of accordion div -->
    
    </div><!-- another common div -->
   </div><!-- another common div -->
 </div><!-- another common div -->
</div><!-- another common div -->


<!-- END FOOTER AD MOBILE-->


                  <div class="container">
                   <div class="row">
                     <div class="col-md-12">
                      <div class="footer-ad">
                        
					<script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- adResponsiveMdj -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-5130888087776673" data-ad-slot="6796895457" data-ad-format="auto"></ins>
                    <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
						

	                 </div>
                     </div>
                  </div>
               </div>
               <!-- START FOOTER AD MOBILE-->

<script type="text/javascript">	
	 $(document).ready(function() {
		$('.intp').hide();
        $('.showintp').click(function() {
                $('.intp').slideToggle(500);
				$("html, body").animate({ scrollTop: $(document).height() }, 500);
        });
		$('.intp ul li').click(function() {
                $('.intp').slideUp(500);
        });
		
		$('.ot-partners').click(function(){
		$('.oth-partners').slideToggle();
		$(this).find('i').toggleClass('icon-plus icon-minus')
		});
    });
</script>
<script type="text/javascript">
          $(document).on("click",".fatFooter .in-partners",function(){
            $('.fatFooter .all-partners').slideToggle();
            $(this).find('i').toggleClass('icon-plus icon-minus');
          });
</script>



<!-- Fat footer -->



<div class="fatFooter">
    	<div class="container">
       		 <div class="row">
           		 <div class="footer">
                <!--<div class="col-md-4">
                    <h4>About Us</h4>
                    <p>
                      Bdjobs.com Ltd. is the first and leading career management site in the country. Eight young business and IT professional backed by strong command over e-business and .. </p>
                    <a href="https://bdjobs.com/about.asp" title="More" class="btn btn-f-more">More</a>
                </div>-->
               		  <div class="col-md-3 col-sm-3">
                    <h4>About Us</h4>
                    <ul>
                        <li><a target="_blank" href="https://www.bdjobs.com/about.asp">About Bdjobs.com</a></li>
                        <li><a target="_blank" href="https://www.bdjobs.com/tos.asp">Terms &amp; Conditions</a></li>
                        <li>
                            <a href="javascript:void(0);" class="in-partners">International Partners&nbsp;<i class="icon-plus"></i></a>
                        </li>
                        <li>
                            <ul class="all-partners">
                              <li><a href="https://www.babajob.com/" target="_blank">BabaJob</a> <strong>(India)</strong></li>
                              <li><a href="https://www.brightermonday.com/" target="_blank">Brighter Monday</a> <strong> (<!-- East --> Africa)</strong></li>
                              <li><a href="https://www.catho.com.br/" target="_blank">Catho</a> <strong>(Brazil)</strong></li>
                              <li><a href="https://www.jobberman.com/" target="_blank">Jobberman</a> <strong>(West Africa)</strong></li>
                              <li><a href="https://www.jobsdb.com/" target="_blank">jobsDB</a> <strong>(S.E Asia)</strong></li>
                              <li><a href="https://www.jobstreet.com/" target="_blank">JobStreet</a> <strong>(S.E Asia)</strong></li>
                              <li><a href="https://www.jora.com/" target="_blank">Jora</a> <strong>(Worldwide)</strong></li>
                              <li><a href="https://www.manager.com.br/" target="_blank">Manager</a> <strong>(Brazil)</strong></li>
                              <li><a href="https://www.occ.com.mx/" target="_blank">OCC Mundial </a> <strong>(Mexico)</strong></li>
                              <li><a href="https://www.seek.com.au/" target="_blank">SEEK</a> <strong>(Australia)</strong></li>
                              <li><a href="https://www.workana.com/" target="_blank">Workana</a> <strong>(Latin America)</strong></li>
                              <li><a href="https://www.zhaopin.com/" target="_blank">Zhaopin</a> <strong>(China)</strong></li>
                           </ul>
                        </li>
                        
                        <li>
                          <a href="javascript:void(0);" class="ot-partners">Other Partners&nbsp;<i class="icon-plus"></i></a>
                        </li>
                        <li>
                            <ul class="oth-partners">
                                 <li><a href="https://ajkerdeal.com/" target="_blank">AjkerDeal</a> <strong>(Bangladesh)</strong></li>
                                 <li><a href="https://www.beshto.com/" target="_blank">Beshto</a> <strong> (Bangladesh)</strong></li>
                                 <li><a href="https://www.aspiringminds.com/" target="_blank">Aspiring Minds</a> <strong>(India)</strong></li>
                            </ul>
                        </li>
                        
                        
                        <li><a target="_blank" href="https://bdjobs.com/policy/Privacy_policy.asp">Privacy  Policy</a></li>
                        <li><a target="_blank" href="https://jobs.bdjobs.com/feedback.asp">Feedback</a></li>
                        <li><a target="_blank" href="https://www.bdjobs.com/contact.asp">Contact Us</a></li>
                    </ul>
                </div>
                	 <div class="col-md-3 col-sm-3">
                    <h4>Job Seekers</h4>
                    <ul>
                     <li><a href="https://mybdjobs.bdjobs.com/new_mybdjobs/step_01_view.asp">Edit Resume</a></li>
                        <li><a target="_blank" href="https://www.bdjobs.com/career/counsel.asp">Career Counseling</a></li>
                        <li><a href="https://mybdjobs.bdjobs.com/mybdjobs/welcome.asp">My Bdjobs</a></li>
                        <li><a target="_blank" href="https://mybdjobs.bdjobs.com/mybdjobs/faq.asp#content-1">FAQ</a></li>
                        <li><a target="_blank" href="https://mybdjobs.bdjobs.com/mybdjobs/videoHelp.asp">Video Guides</a></li>
                    </ul>
                </div>
                	  <div class="col-md-3 col-sm-3">
                    <h4>Employers</h4>
                    <ul>
                      
                           <li>   <a target="_blank" href="https://corporate3.bdjobs.com/Corporate_NewAccount.asp">Create Account</a></li>
                        <li><a target="_blank" href="https://corporate3.bdjobs.com/services.asp">Products/Service</a></li>
                        <li><a target="_blank" href="https://corporate3.bdjobs.com/">Post a Job</a></li>
                        <li><a target="_blank" href="https://corporate3.bdjobs.com/help/help.asp">FAQ</a></li>
                        <li>  <h5 class="app-heading">Download Employer App</h5></li>
                        <li>
                            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.bdjobs.recruiter">
                                <img class="google-play-badge" src="https://mybdjobs.bdjobs.com/mybdjobs/images/google-play-badge.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Tools &amp; Social Media</h4>
                    <ul>
                   		 
						<li><a target="_blank" href="http://www.bdjobs.com/apps/"><img class="footer-icon" src="https://mybdjobs.bdjobs.com/mybdjobs/images/bdjobs-android-app-color.svg" alt="App">Bdjobs Android App</a></li>
                        <li><a target="_blank" href="http://bdjobs.com/apps/ios/index.html"><img class="footer-icon" src="https://mybdjobs.bdjobs.com/mybdjobs/images/bdjobs-android-app-color.svg" alt="App">Bdjobs iOS App</a></li>
						
                        
                        <li><a target="_blank" href="https://www.facebook.com/mybdjobs"><img class="footer-icon" src="https://mybdjobs.bdjobs.com/mybdjobs/images/facebook-color.svg" alt="Facebook">Facebook</a></li>
                        <li><a target="_blank" href="https://plus.google.com/+BdjobscomLtd"><img class="footer-icon" src="https://mybdjobs.bdjobs.com/mybdjobs/images/google-plus-color.svg" alt="Google Plus">Google+</a></li>
                        <li><a target="_blank" href="https://www.youtube.com/mybdjobs"><img class="footer-icon" src="https://mybdjobs.bdjobs.com/mybdjobs/images/youtube-color.svg" alt="Youtube">Youtube</a></li>
                        <li><a target="_blank" href="https://linkedin.com/company/mybdjobs">
                        <img class="footer-icon" src="https://bdjobs.com/icons/linkedin-color.svg" alt="LinkedIn">LinkedIn</a></li>
                        <li>
                        	<h5 class="app-heading">Download Mobile App</h5>
                        </li>
                        <li>
                        <a target="_blank" href="https://play.google.com/store/apps/details?id=com.bdjobs.app">
                            <img class="google-play-badge" src="https://mybdjobs.bdjobs.com/mybdjobs/images/google-play-badge.svg" alt="">
                        </a>
                        </li>
                        <li>
                            <a target="_blank" href="https://itunes.apple.com/in/app/bdjobs/id1435728822?mt=8">
                                <img class="google-play-badge" src="https://mybdjobs.bdjobs.com/mybdjobs/images/App-Store-Badge.svg" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="f-contacts">
                        Need any support ? Call to <span>16479</span>
                    </div>
                </div>
                 </div>
            </div>
        </div>
	</div>
<div class="scroll-top-wrapper ">
         <span class="scroll-top-inner">
         <i class="glyphicon glyphicon-circle-arrow-up"></i>
         </span>
</div>		

	 
 <div class="confirmation-message" style=" background-color: #68aa47;color: #ffffff;  border-radius: 4px; position: fixed;left: 20px;bottom: 20px;padding: 16px 20px;-webkit-box-shadow: 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24);box-shadow: 0 0 2px rgba(0,0,0,.12), 0 2px 4px rgba(0,0,0,.24); display: none; z-index: 9;">
        <!--<button type="button" class="close"><span aria-hidden="true" >×</span></button>-->
        <span id="c_msg"></span>
        </div>


 <script type="text/javascript" src="https://mybdjobs.bdjobs.com/js/new_js/edit-resume.js"></script> 


 



<script>
$('body').on('focus',".datepicker", function(){
	
	$(this).datepicker({ format: "mm/dd/yyyy" }).on('changeDate', function(ev){
	$(this).datepicker('hide');
	});
});
</script>

<!-- Start Modal -->
<!--<div class="modal fade in edit-mode-wrap" id="editResumeModal" role="dialog" aria-hidden="false" style="display: block;">-->
    	<!--include file = "common_address.asp" -->
<!--</div>-->
<!-- End Modal -->


<script type="text/javascript">
        // $(window).on('load', function () {
        $('#editResumeModal').modal('show'); 
        // });
        $(document).ready(function () {
            $(document).on('change', 'input[type=radio]', function () {
                if ($(this).parents('.address-wrap').find('input[type=radio].outside:checked').length) {
                    $(this).parents('.address-wrap').find('.select-country').removeClass('hide');
                    $(this).parents('.address-wrap').find('.select-wrap').addClass('hide');
                } else {
                    $(this).parents('.address-wrap').find('.select-country').addClass('hide');
                    $(this).parents('.address-wrap').find('.select-wrap').removeClass('hide');
                }
            });
            //Code for (Same as Present Address) checkbox 
            $(document).on('click', '.address-wrap .checkbox .same-address', function () {
                if ($(this).is(':checked')) {
                    $(this).parents('.address-wrap').find('.disable-area').addClass('disable').find(
                        'input,select').prop('disabled', true); 
                    console.log('hi');
                } else {
                    $(this).parents('.address-wrap').find('.disable-area').removeClass('disable').find(
                        'input,select').prop('disabled', false);
                }
            });
                //New address format view mode code 
                $(document).on('click', '#editResumeModal .go-review', function () {
                    //    $(this).parents('.modal').addClass('view-mode-wrap').removeClass('edit-mode-wrap');
                    //     var viewPresentAddress = "";
                    //     if ($('.present-address .outside').is(':checked')) {
                    //         var present_country_list = $(
                    //             '.present-address #present_country_list option:selected').text();
                    //         var present_Village = $('.present-address #present_Village').val();
                    //         viewPresentAddress = present_Village + ', ' + present_country_list;
                    //     } else {
                    //         var present_district = $('.present-address #present_district option:selected').text();
                    //         var present_thana = $('.present-address #present_thana option:selected').text();
                    //         var present_POLocation = $(
                    //             '.present-address #present_POLocation option:selected').text();
                    //         var present_Village = $('.present-address #present_Village').val();
                    //         viewPresentAddress = present_Village + ', ' + present_POLocation + ', ' +
                    //             present_thana + ', ' + present_district;
                    //     }
                    //     $('#editResumeModal .present-address .view-present-address').text(
                    //         viewPresentAddress);

                    //     var viewpermanentAddress = "";
                    //     if ($('#editResumeModal .same-address').is(':checked')) {
                    //         $('#editResumeModal .permanent-address').addClass('hide');
                    //     } else {
                    //         $('#editResumeModal .permanent-address').removeClass('hide');
                    //         if ($('#addressFormPopup .permanent-address .outside').is(':checked')) {
                    //             var permanent_country_list = $(
                    //                 '#addressFormPopup .permanent-address #permanent_country_list option:selected').text();
                    //             var permanent_Village = $('#addressFormPopup .permanent-address #permanent_Village').val();
                    //             viewpermanentAddress = permanent_Village + ', ' + permanent_country_list;

                    //         } else {
                    //             var permanent_district = $(
                    //                 '#addressFormPopup .permanent-address #permanent_district option:selected').text();
                    //             var permanent_thana = $(
                    //                 '#addressFormPopup .permanent-address #permanent_thana option:selected')
                    //                 .text();
                    //             var permanent_POLocation = $(
                    //                 '#addressFormPopup .permanent-address #permanent_POLocation option:selected').text();
                    //             var permanent_Village = $('#addressFormPopup .permanent-address #permanent_Village').val();
                    //             viewpermanentAddress = permanent_Village + ', ' + permanent_POLocation +
                    //                 ', ' +
                    //                 permanent_thana + ', ' + permanent_district;
                    //         }
                    //         $('#editResumeModal .permanent-address .view-permanent-address').text(
                    //             viewpermanentAddress);
                    //     }
                    FormValidation_ForPopUp('EN');
                });

                $(document).on('click', '#editResumeModal .go-back', function () {
                    $(this).parents('.modal').addClass('edit-mode-wrap').removeClass('view-mode-wrap');
                    $('#editResumeModal .permanent-address').removeClass('hide');
                });
            //End of new code 

            //Edit button Click 
            $("#addressEditBtn").click(function(){
                var Location_PresentValue = $('#addressForm input[name=presentLocation]:checked').val(); 
	            var Location_PermanentValue = $('#addressForm input[name=permanentLocation]:checked').val();
                $(".address_Previous").addClass("hidden");

                //New condition
                if(Location_PresentValue == 1){
                    $("#countrySelectID").removeClass("hide");
                }
                if(Location_PermanentValue == 1){
                    $("#permanentCountryID").removeClass("hide");
                }    
            });
            // //Old code for close button 
            // $("#addressCloseBtn").click(function(){
            //     $(".address_Previous").removeClass("hidden");
            //     $("#countrySelectID").addClass("hide");
		    //     $("#permanentCountryID").addClass("hide");
            // });

            //new code 8.12.2018
            //Close button action 
            $("#addressCloseBtn").click(function(){
                
                    $(".address_Previous").removeClass("hidden");
                    $("#countrySelectID").addClass("hide");
                    $("#permanentCountryID").addClass("hide");
                
            });

			 //<!-- do in bangla -->
			$("#btnAdd_adrs").click(function(){
				//$(".noData_adrs").css("display","none");
				$(this).parents("#noData_adrs").css("display","none");
				$(".adrs_0").css("display","block");
				$('#addressEditBtn').trigger('click');
			});

        });
    </script>
  

</div></body></html>