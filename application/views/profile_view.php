
<!DOCTYPE html>
<html lang="en">
<head>
	<!--
		Charisma v1.0.0

		Copyright 2012 Muhammad Usman
		Licensed under the Apache License v2.0
		http://www.apache.org/licenses/LICENSE-2.0

		http://usman.it
		http://twitter.com/halalit_usman
	-->
	<meta charset="utf-8">
	<title>AMI Training Center - Manage Profile</title>


	<!-- The styles -->
	<link href="<?php echo base_url();?>css/bootstrap-cerulean.css" rel="stylesheet">
	<style type="text/css">
	  body {
		padding-bottom: 40px;
	  }
	  .sidebar-nav {
		padding: 9px 0;
	  }
	</style>
	<link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo base_url();?>css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
	<link href='<?php echo base_url();?>css/fullcalendar.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/fullcalendar.print.css' rel='stylesheet'  media='print'>
	<link href='<?php echo base_url();?>css/chosen.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/colorbox.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.cleditor.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.noty.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/noty_theme_default.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.min.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/elfinder.theme.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/jquery.iphone.toggle.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/opa-icons.css' rel='stylesheet'>
	<link href='<?php echo base_url();?>css/uploadify.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="<?php echo base_url();?>img/favicon.ico">
		
</head>

<body>
		<!-- topbar starts -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"> <img alt="Charisma Logo" src="<?php echo base_url();?>img/ami.png" /> <span>AMI Training Center</span></a>
				
				
				
				<!-- user dropdown starts -->
				<div class="btn-group pull-right" >
					<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="icon-user"></i><span class="hidden-phone"> <?php echo $this->session->userdata('username');?></span>
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url();?>index.php/profile">Profile</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo base_url();?>index.php/logout">Logout</a></li>
					</ul>
				</div>
				<!-- user dropdown ends -->
				
				<div class="top-nav nav-collapse">
					<ul class="nav">
						<li><a href="#">Visit Site</a></li>
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- topbar ends -->
		<div class="container-fluid">
		<div class="row-fluid">
				
			<!-- left menu starts -->
			<div class="span2 main-menu-span">
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Main</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/dashboard"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>
						<li><a class="ajax-link" href=""><i class="icon-cog"></i><span class="hidden-tablet"> Manage Profile</span></a></li>
						
					</ul>
				</div><!--/.well -->
				<br>
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Training Modules</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/modules"><i class="icon-book"></i><span class="hidden-tablet"> Manage Modules</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/presenter"><i class="icon-eye-open"></i><span class="hidden-tablet"> Classroom Presenter</span></a></li>
						<li class="nav-header hidden-tablet">Manage Examinations</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/examination"><i class="icon-pencil"></i><span class="hidden-tablet"> Generate Examination</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/activate"><i class="icon-play"></i><span class="hidden-tablet"> Activate Test</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/analysis"><i class="icon-question-sign"></i><span class="hidden-tablet"> Item Analysis</span></a></li>
						<li class="nav-header hidden-tablet">Trainee Performance</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/attendance"><i class="icon-check"></i><span class="hidden-tablet"> Attendance Checker</span></a></li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/grade"><i class="icon-list-alt"></i><span class="hidden-tablet"> Grade Sheet</span></a></li>
					</ul>
				</div><!--/.well -->

				<br>
				<div class="well nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li class="nav-header hidden-tablet">Reports</li>
						<li><a class="ajax-link" href="<?php echo base_url();?>index.php/reports"><i class="icon-print"></i><span class="hidden-tablet"> Print Reports</span></a></li>
					</ul>
				</div><!--/.well -->

				
			</div><!--/span-->
			<!-- left menu ends -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="span10">
			<!-- content starts -->
			

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url();?>index.php/dashboard">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url();?>index.php/profile">Manage Profile</a>
					</li>
				</ul>
				
			</div>
			
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-cog"></i> Edit Your Profile</h2>
						<div class="box-icon">
							<!--<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>-->
						</div>
					</div>
					<div class="box-content">
						<div class="span3">
							<ul class="thumbnails">

								<li id="image-1" class="thumbnail">
								    <a style="background:url(https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/c48.48.600.600/s160x160/487813_4572432036520_1003867166_n.jpg)" title="" href="http://sphotos-d.ak.fbcdn.net/hphotos-ak-snc6/224997_1057442408004_94515_n.jpg">
								      <img src="https://fbcdn-profile-a.akamaihd.net/hprofile-ak-frc1/c48.48.600.600/s160x160/487813_4572432036520_1003867166_n.jpg" alt="">
								    </a>
								 </li>

								 <li>
								 	<div class="control-group">
										<label class="control-label">Change Profile Picture</label>
										<div class="controls">
										  <input type="file">
										</div>
							  		</div>

								 </li>
							 </ul>
							 
						</div>
						<div class="span9">
							
							<table class="table">
								<tr>
									<td><h3>Change Display Name</h3></td>
									<td>&nbsp;</td>
								</tr>
								<tr>
									<td>Display Name: </td>
									<td><input type="text" id="displayname" name="displayname" 
										value="<?php echo $this->session->userdata('displayname');?>"></td>
								</tr>
								<tr>
									<td>Email Address: </td>
									<td><input type="text" id="email" name="email"
										value="<?php echo $this->session->userdata('email');?>"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><a class="btn btn-info">Change Display Name</a></td>
								</tr>
								<tr>
									<td><h3>Change Password</h3></td>
									<td>&nbsp;</td>
								</tr>	
								<tr>
									<td>Old Password: </td>
									<td><input type="password" id="oldpassword" name="oldpassword" 
										value="<?php echo $this->session->userdata('password');?>"></td>
								</tr>
								<tr>
									<td>New Password: </td>
									<td><input type="text" id="newpassword" name="newpassword"></td>
								</tr>
								<tr>
									<td>Confirm Password: </td>
									<td><input type="text" id="confirmpassword" name="confirmpassword"></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td><a class="btn btn-primary">Change Password</a></td>
								</tr>	
							</table>
						</div>
											
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
			
       
			<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<div class="modal hide fade" id="myModal">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here settings can be configured...</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Close</a>
				<a href="#" class="btn btn-primary">Save changes</a>
			</div>
		</div>

		<footer>
			<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
			<p class="pull-right">Powered by: <a href="">TDC</a></p>
		</footer>
		
	</div><!--/.fluid-container-->

	<!-- external javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

	<!-- jQuery -->
	<script src="<?php echo base_url();?>js/jquery-1.7.2.min.js"></script>
	<!-- jQuery UI -->
	<script src="<?php echo base_url();?>js/jquery-ui-1.8.21.custom.min.js"></script>
	<!-- transition / effect library -->
	<script src="<?php echo base_url();?>js/bootstrap-transition.js"></script>
	<!-- alert enhancer library -->
	<script src="<?php echo base_url();?>js/bootstrap-alert.js"></script>
	<!-- modal / dialog library -->
	<script src="<?php echo base_url();?>js/bootstrap-modal.js"></script>
	<!-- custom dropdown library -->
	<script src="<?php echo base_url();?>js/bootstrap-dropdown.js"></script>
	<!-- scrolspy library -->
	<script src="<?php echo base_url();?>js/bootstrap-scrollspy.js"></script>
	<!-- library for creating tabs -->
	<script src="<?php echo base_url();?>js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script src="<?php echo base_url();?>js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script src="<?php echo base_url();?>js/bootstrap-popover.js"></script>
	<!-- button enhancer library -->
	<script src="<?php echo base_url();?>js/bootstrap-button.js"></script>
	<!-- accordion library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/bootstrap-collapse.js"></script>
	<!-- carousel slideshow library (optional, not used in demo) -->
	<script src="<?php echo base_url();?>js/bootstrap-carousel.js"></script>
	<!-- autocomplete library -->
	<script src="<?php echo base_url();?>js/bootstrap-typeahead.js"></script>
	<!-- tour library -->
	<script src="<?php echo base_url();?>js/bootstrap-tour.js"></script>
	<!-- library for cookie management -->
	<script src="<?php echo base_url();?>js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='<?php echo base_url();?>js/fullcalendar.min.js'></script>
	<!-- data table plugin -->
	<script src='<?php echo base_url();?>js/jquery.dataTables.min.js'></script>

	<!-- chart libraries start -->
	<script src="<?php echo base_url();?>js/excanvas.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.stack.js"></script>
	<script src="<?php echo base_url();?>js/jquery.flot.resize.min.js"></script>
	<!-- chart libraries end -->

	<!-- select or dropdown enhancer -->
	<script src="<?php echo base_url();?>js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler -->
	<script src="<?php echo base_url();?>js/jquery.uniform.min.js"></script>
	<!-- plugin for gallery image view -->
	<script src="<?php echo base_url();?>js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script src="<?php echo base_url();?>js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->
	<script src="<?php echo base_url();?>js/jquery.noty.js"></script>
	<!-- file manager library -->
	<script src="<?php echo base_url();?>js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script src="<?php echo base_url();?>js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script src="<?php echo base_url();?>js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script src="<?php echo base_url();?>js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script src="<?php echo base_url();?>js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script src="<?php echo base_url();?>js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<script src="<?php echo base_url();?>js/charisma.js"></script>
	
		
</body>
</html>
