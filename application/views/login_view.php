<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>AMI Training Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!-- The styles -->
	<!-- id="bs-css" -->
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
		<!-- The Navigation Bar -->
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					<a class="brand" href="index.html"><img src="<?php echo base_url();?>img/ami.png"><span>&nbsp;AMI Training Center</span></a>
					
				</div>
			</div>
		</div>
		<!-- The Navigation Bar -->
		<div class="container-fluid">
		<div class="row-fluid">
		
			<div class="row-fluid">
				<div class="span5 center login-header">
					<!-- Error Header -->
					<?php if(!is_null($error_msg)) {?>
						<?php echo $error_msg;?>
					<?php } else { ?>
						<div class="alert alert-info">Please login with your Username and Password.</div>
					<?php } ?>
					<!-- Error Header -->

				</div><!--/span-->
			</div><!--/row-->
			
			<div class="row-fluid">
				<div class="well span5 center login-box">
					<form class="form-horizontal" action='<?php echo base_url();?>index.php/authentication' method="post">
						<fieldset>
							<div class="input-prepend" title="Enter Username" data-rel="tooltip">
								<span class="add-on"><i class="icon-user"></i></span>
								<input autofocus class="input-large span10" name="username" id="username" type="text" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Enter Password" data-rel="tooltip">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" />
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend">
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>
							</div>
							<div class="clearfix"></div>

							<p class="center span5">
							<button type="submit" class="btn btn-large btn-primary" id="loginbtn">Login</button>
							</p>
						</fieldset>
					</form>
				</div><!--/span-->

			</div><!--/row-->
				</div><!--/fluid-row-->
		
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
