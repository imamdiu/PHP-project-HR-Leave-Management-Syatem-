<?php 
	session_start();
	
	if(!isset($_SESSION['id'],$_SESSION['user_role_id']))
	{
		header('location:index.php?lmsg=true');
		exit;
	}		
	
	require_once('../db.inc.php');
	require_once ('header.inc.php');
	//require_once('layouts/header.php'); 
	require_once('left_sidebar.php'); 
	
	
?>

<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
			  <a href="#">Dashboard</a>
			</li>
		</ol>
		
		<h1>Welcome to Dashboard</h1>
		<hr>
		<p>You are login as User ID :  <strong><?php echo $_SESSION['id']; ?></strong></p>
		<p>You are login as Role ID :  <strong><?php echo $_SESSION['user_role_id']; ?></strong></p>
		<p>You are login as USer Name : <strong><?php echo $_SESSION['user_name']; ?></strong></p>
	  
		<ul>
			<li><strong>admin</strong> has <strong>Administrator</strong> rights so all the left bar items are visible to him to Settings</li>
			<li><strong>Other Name</strong> has <strong>Employee</strong> rights and he doesn't have access </li>
			
		</ul>	
      
      <div style="height: 1000px;"></div>
    </div>
    <!-- /.container-fluid-->
</div>	
<?php //require_once('layouts/footer.php');

require_once"leave_form_footer.php"; ?>	