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
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	//'style' => 'margin:0;padding:0',
);
$remember_label = array(
	'class' => 'check',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>
<head>
	
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
	<title>Clonalyzer: Login</title>
	
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
			<div id="labels">
			</div>
		</div>
	<div class="box">
		<div class="title">
			Login
			<span class="hide"></span>
		</div>
		<div class="content">
			<div class="message inner blue">
			<span><b>Information</b>: Please enter user name and password </span>
			 <?php echo $this->session->flashdata('message'); ?>
			</div>
		<?php echo form_open($this->uri->uri_string()); ?>
				<div class="row">
					<?php echo form_label($login_label, $login['id']); ?>
					<div class="right"><?php echo form_input($login); ?></div>
				</div>
                <div class="row_err">
                	<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
                </div>
				<div class="row">
					<?php echo form_label('Password', $password['id']); ?>
					<div class="right"><?php echo form_password($password); ?></div>
				</div>
   				<div class="row_err">
                	<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
                </div>
				<div class="row">
					<?php echo form_label('Remember me', $remember['id'], $remember_label); ?>
					<div class="right"><?php echo form_checkbox($remember); ?></div>
				</div>
                <div class="row">
					<div class="right2">
                	<?php echo anchor('/auth/forgot_password/', 'Forgot password'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register'); ?>
                    </div>
                </div>
				<div class="row">
					<div class="right">
                    <span>
						<button><?php echo form_submit('submit', 'Login','style="height:25px;width:90px;"'); ?></button>
                        </span>
					</div>
				</div>
<?php echo form_close(); ?>
		</div>
	</div>
	
</div>

</body>

</html> 