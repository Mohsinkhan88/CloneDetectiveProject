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
	<!--
		<div class="hide-btn top"></div>
		<div class="hide-btn center"></div>
		<div class="hide-btn bottom"></div>
		-->
		<div id="top">
			<h1 id="logo"><a href="./"></a></h1>
			<div id="labels" class="rightHead"><?php echo anchor('/auth/login/', 'Login'); ?></div>
		</div>
