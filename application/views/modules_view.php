<?php if($this->session->userdata('permission') != 'instructor') { redirect(base_url() . 'index.php/404');} ?>
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
						<!--
						<li>
							<form class="navbar-search pull-left">
								<input placeholder="Search" class="search-query span2" name="query" type="text">
							</form>
						</li>
					-->
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
						<a href="<?php echo base_url();?>index.php/modules">Manage Modules</a>
					</li>
				</ul>
				
			</div>
			
			<div class="alert alert-success">
				<b>Note:</b>
				<ul>
					<li>Use the Search bar to filter the information you need</li>
					<li>Click the column name to toggle order by column</li>
				</ul>
			</div>

			<div class="row-fluid">
				<div class="span7">

					<!-- add module -->
					<div class="box">
						<div class="box-header well" data-original-title>
							<h2><i class="icon-user"></i> Add Modules</h2>
						</div>
						
						<div class="box-content">
							<?php if(!is_null($this->session->userdata('error'))) echo $this->session->userdata('error'); ?>
							<form method="post" action="<?php echo base_url();?>index.php/modules/add_modules">
								<table class="table">
									<tr>
										<td>
											<label>Module Name: </label>
											<input autofocus type="text" id="module_name" name="module_name">
										</td>
										
									</tr>
									<tr>
										<td>
											<label>Company: </label>
											<select name="company_name" >
												<?php
													if(!is_null($records)) {
														foreach ($records as $row) {
															echo '<option value="' . $row->company_name . '">' . $row->company_name . '</option>';
														}
													}

												?>
												<option value="Other">Other</option>
											</select>
										</td>
									</tr>
									<tr>
										<td>
											<button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Add Module</button>
										</td>
										<td>&nbsp;</td>
									</tr>
								</table>
							</form>
							
							
						</div>
					</div>
					<!-- add module -->

					<!-- list module-->
					<div class="box">
						<div class="box-header well" data-original-title>
							<h2><i class="icon-user"></i> List of Modules</h2>
							<div class="box-icon">
								<!--
								<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
								<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
								<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
							-->
							</div>
						</div>
						<div class="box-content">

		
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>Module Name <span title=".icon  .icon-triangle-ns " class="icon icon-triangle-ns"></span></th>
									  <th>Company <span title=".icon  .icon-triangle-ns " class="icon icon-triangle-ns"></span></th>
									  <th>&nbsp;</th>
								  </tr>
							  </thead>   
							  <tbody>
								
								<?php if(isset($records2)) : foreach($records2 as $row) : ?>
									<tr>
										<td><?php echo $row->module_name;?></td>
										<td><?php echo $row->company_name;?></td>
										<td>
											<a id="<?php echo $row->module_id;?>" style="cursor:pointer;" class="editbutton btn btn-info"><i class="icon-edit icon-white"></i></a>
											<a id="<?php echo $row->module_id;?>" style="cursor:pointer;" class="deletebutton btn btn-danger"><i class="icon-trash icon-white"></i> </a>	
										</td>
									</tr>
									<?php endforeach;?>

								<?php endif; ?>
								
							</table>
							<small>Page rendered in: {elapsed_time} seconds</small>
						</div>
					</div>
				</div>
				<div class="box span5">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-picture"></i> Module File Manager</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div class="alert alert-info">
							<button type="button" class="close" data-dismiss="alert">×</button>
							<i class="icon-info-sign"></i> In this section, you will be able to manage files that will be available on your <a href="<?php echo base_url();?>index.php/presenter">Classroom Presenter</a> page.
						</div>
						<div class="file-manager" id="elfinder"></div>
					</div>
				</div><!--/span-->
			</div>
			
       
			<!-- content ends -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
		<hr>

		<footer>
			<p class="pull-left">&copy; <a href="" target="_blank">Alliance Mansols Incorporated</a> 2013</p>
			<p class="pull-right">Powered by: <a href="">TDC</a></p>
		</footer>
	</div><!--/.fluid-container-->

	<div class="modal hide fade" id="modalConfirm">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Delete Module</h3>
		</div>
		<div class="modal-body">
			<p>Are you sure you want to delete this data?</p>
		</div>
		<div class="modal-footer">
			<a class="btn btn-primary" id="triggerdelete">Yes</a>
			<a href="#" class="btn" data-dismiss="modal">No</a>
		</div>
	</div>

	<div class="modal hide fade" id="modalEditModule">
		<form method="post" action="<?php echo base_url();?>index.php/modules/edit_modules">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h3>Edit Module</h3>
			</div>
			<div class="modal-body">
				
				<table class="table">
					<tr>
						<td>
							<label>Module Name: </label>
							<input autofocus type="text" id="edit_module_name" name="edit_module_name">
						</td>
						
					</tr>
					<tr>
						<td>
							<label>Company: </label>
							<select name="edit_company_name" id="edit_company_name">
								<?php
									if(!is_null($records)) {
										foreach ($records as $row) {
											echo '<option value="' . $row->company_name . '">' . $row->company_name . '</option>';
										}
									}

								?>
								<option value="Other">Other</option>

							</select>
						</td>
					</tr>
				</table>
				
			</div>
			<div class="modal-footer">
				<a href="#" class="btn" data-dismiss="modal">Cancel</a>
				<button class="btn btn-primary" type="submit">Save changes</button>
			</div>
		</form>
	</div>

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


	<script src="<?php echo base_url();?>js/jquery.jeditable.js"></script>
	

	<script type="text/javascript" charset="utf-8">

		$(".editbutton").click(function() {
		        //$('#modalEditSemester').modal('show');
		        var form_data = {
		        	dataid: $(this).attr('id'),
		        	ajax: '1'
		        };

		        var request = $.ajax({
		        	url: "<?php echo base_url();?>index.php/modules/edit_modules",
		        	type: 'POST',
		        	data: form_data
		        });

		        request.done(function (response, textStatus, jqXHR){
			        $('#modalEditModule').modal('show');
					var temp = new Array();
					temp = response.split("*");
					$('#edit_module_name').val(temp[0]);
					$('#edit_company_name').val(temp[1]);

			    });
				    	
			});

			//this is very poor and unsafe don't you worry I'll fix this later using ajax request
			var deleteid;

			$(".deletebutton").click(function() {
				$('#modalConfirm').modal('show');
				deleteid = $(this).attr('id');

			});

			$("#triggerdelete").click(function() {
		        window.location.href = "<?php echo base_url();?>index.php/modules/delete_module/" + deleteid;				    	
			});

	</script>
			
</body>
</html>
