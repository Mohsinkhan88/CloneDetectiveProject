<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Clonalyzer: Dashboard</title>
	

		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/forms.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/forms-btn.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/menu.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/style_text.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/datatables.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/fullcalendar.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/pirebox.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/modalwindow.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/statics.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/tabs-toggle.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/system-message.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/tooltip.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/wizard.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/wysiwyg.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/wysiwyg.modal.css');?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/wysiwyg-editor.css');?>" />
	
	<!--[if lte IE 8]>
		<script type="text/javascript" src="js/excanvas.min.js"></script>
	<![endif]-->
	
	<script type="text/javascript" src="<?php echo base_url('js/jquery-1.7.1.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.backgroundPosition.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.placeholder.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.1.8.17.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.select.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.ui.spinner.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/superfish.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/supersubs.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.datatables.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/fullcalendar.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.smartwizard-2.0.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/pirobox.extended.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.tipsy.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.elastic.source.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.customInput.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.validate.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.metadata.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.filestyle.mini.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.filter.input.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.flot.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.flot.pie.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.flot.resize.min.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.graphtable-0.2.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/jquery.wysiwyg.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/controls/wysiwyg.image.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/controls/wysiwyg.link.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/controls/wysiwyg.table.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/plugins/wysiwyg.rmFormat.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/costum.js');?>"></script>	
</head>

<body>

<div id="wrapper">
	<div id="container">
	
		<div class="hide-btn top"></div>
		<div class="hide-btn center"></div>
		<div class="hide-btn bottom"></div>
		
		<div id="top">
			<h1 id="logo"><a href="./"></a></h1>
			<div id="labels">
				<ul>
					<li><a href="#" class="user"><span class="bar">Welcome <strong><?php echo $username; ?></strong></span></a></li>
					<li><a href="#" class="settings"></a></li>
					<li class="subnav">
						<a href="#" class="messages"></a>
						<ul>
							<li><a href="#">New message</a></li>
							<li><a href="#">Inbox</a></li>
							<li><a href="#">Outbox</a></li>
							<li><a href="#">Trash</a></li>
						</ul>
					</li>
					<!-- <li><a href="#" class="logout"></a></li> -->
					<li><?php echo anchor('/auth/logout/', ' ', 'class="logout"'); ?></li>
				</ul>
			</div>
			<div id="menu">
				<ul> 
					<li><a href="dashboard.html">Dashboard</a></li> 
					<li class="current"><a href="forms.html">Forms</a> </li> 
					<li>
						<a href="tables.html">Tables</a>
						<ul> 
							<li><a href="#">First item</a></li>
							<li class="current">
								<a href="#">Second item</a>
								<ul> 
									<li><a href="#">First item</a></li>
									<li class="current"><a href="#">Second item</a></li>
									<li><a href="#">Third item</a></li>
									<li><a href="#">Fourth item</a></li>
								</ul> 
							</li>
							<li><a href="#">Third item</a></li>
							<li><a href="#">Fourth item</a></li>
						</ul>
					</li>
					<li><a href="charts.html">Charts</a></li>
					<li><a href="uielements.html">UI Elements</a></li>
					<li><a href="typography.html">Typography</a></li>
					<li><a href="gallery.html">Gallery</a></li>
					<li><a href="boxgrid.html">Boxgrid</a></li>
					<li><a href="icons.html">Icons</a></li>
				</ul>
			</div>
		</div>
		
		<div id="left">
			<div class="box search">
				<div class="content">
					<form action="">
						<input type="text" value="" placeholder="Search" />
						<button type="submit"></button>
					</form>
				</div>
			</div>
			
			<div class="box submenu">
				<div class="content">
					<ul>
						<li><a href="#">First item</a></li>
						<li class="current">
							<a href="#">Second item</a>
							<ul>
								<li><a href="#">First item</a></li>
								<li class="current"><a href="#">Second item</a></li>
								<li><a href="#">Third item</a></li>
								<li><a href="#">Fourth item</a></li>
							</ul>
						</li>
						<li><a href="#">Third item</a></li>
						<li><a href="#">Fourth item</a></li>
					</ul>
				</div>
			</div>
			
			<div class="box statics">
				<div class="content">
					<ul>
						<li><h2>Statistics</h2></li>
						<li>Total Clones<div class="info red"><span>999</span></div></li>
						<li>New Clones <div class="info blue"><span>654</span></div></li>
						<li>Users <div class="info green"><span>7</span></div></li>
						<li>Last update <div class="info black"><span>01.20.2012</span></div></li>
					</ul>
				</div>
			</div>
			
			<div class="box togglemenu">
				<div class="content">
					<ul>
						<li><h2>Toggle Menu</h2></li>
						<li class="title">Clone 1</li>
						<li class="content">
							Clone 1
						</li>
						<li class="title">Clone 2</li>
						<li class="content">
							Clone 2
						</li>
						<li class="title">Clone 3</li>
						<li class="content">
							Clone 3
						</li>
					</ul>
				</div>
			</div>
		</div>