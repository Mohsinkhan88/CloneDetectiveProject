<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
if ($this->config->item('use_username', 'tank_auth')) {
	$login_label = 'Email or login';
} else {
	$login_label = 'Email';
}
?>
<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Clonalyzer: Forget Password</title>
	
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

	<div id="wrapper" class="login">
    
    <div id="top">
			<h1 id="logo"><a href="./"></a></h1>
			<div id="labels"></div>
		</div>
    
		<div class="box">
			<div class="title">Forget Password<span class="hide"></span></div>
			<div class="content">
				<div class="message inner blue">
					<span>New password will be sent via registered email.</span>
				</div>
				<?php if(false) { ?>
					<div class="message inner red"><span><b>Error</b>: Invalid Email Address.</span></div>
				<?php } ?>
				<?php echo form_open($this->uri->uri_string()); ?>
					<div class="row">
						<?php echo form_label($login_label, $login['id']); ?>
						<div class="right"><?php echo form_input($login); ?></div>
						<div class="msg_err">
							<?php echo form_error($login['name']); ?>
							<?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
						</div>
					</div>
					<div class="row">
						<div class="right">
							<span>
								<button type="submit"><?php echo form_submit('submit', 'Reset', 'style="height:25px;width:90px;"'); ?></button>
							</span>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
$(function(){
	$("#cancel").click(function(){
		window.location.href = "<?php echo base_url()."home" ; ?>" ;
	}) ;
}) ;
</script>
<?php include("footer.php") ?>