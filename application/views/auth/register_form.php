<?php include("headerPublic.php") ?>
<?php
if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

		<div id="right" style="margin:0 0 0 0">

			<div class="section">
				<div class="box" style="margin:0" >
					<div class="title">
						Registration
						<span class="hide"></span>
					</div>
					<div class="content">
						<?php echo form_open($this->uri->uri_string()); ?>
						<?php if ($use_username) { ?>
							<div class="row">
								<?php echo form_label('Username', $username['id']); ?>
								<div class="right" style="margin:0 0 0 225px"><?php echo form_input($username); ?></div>
							</div>
                            <div class="row_err">
                            	<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
                            </div>
                        <?php } ?>
							
                            <div class="row">
								<?php echo form_label('Email Address', $email['id']); ?>
								<div class="right" style="margin:0 0 0 225px"><?php echo form_input($email); ?></div>
							</div>
                            <div class="row_err">
                            	<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
                            </div>                            
                                                        
                            <div class="row">
								<?php echo form_label('Password', $password['id']); ?>
								<div class="right" style="margin:0 0 0 225px"><?php echo form_password($password); ?></div>
							</div>
                            <div class="row_err">
                            	<?php echo form_error($password['name']); ?>
                            </div>
							
                            <div class="row">
								<?php echo form_label('Confirm Password', $confirm_password['id']); ?>
								<div class="right" style="margin:0 0 0 225px">
								<?php echo form_password($confirm_password); ?></div>
							</div>
                            <div class="row_err">
                            	<?php echo form_error($confirm_password['name']); ?>
                            </div>
							<table id="captcha_tbl">
                            <?php if ($captcha_registration) {
								if ($use_recaptcha) { ?>

							<tr>
								<td colspan="2">
									<div id="recaptcha_image"></div>
								</td>
								<td>
									<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
									<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
									<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
								</td>
							</tr>
							<tr>
								<td>
									<div class="recaptcha_only_if_image">Enter the words above</div>
									<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
								</td>
								<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
								<td class="error_msg"><?php echo form_error('recaptcha_response_field'); ?></td>
								<?php echo $recaptcha_html; ?>
							</tr>
							<?php } else { ?>
                            
                            <div class="row">
								<?php echo form_label('Enter the code exactly as it appears:'); ?>
								<div class="right" style="margin:0 0 0 225px"><?php echo $captcha_html; ?></div>
							</div>

                            <div class="row">
								<?php echo form_label('Confirmation Code', $captcha['id']); ?>
								<div class="right" style="margin:0 0 0 225px"><?php echo form_input($captcha); ?></div>
							</div>
                            <div class="row_err">
                            	<?php echo form_error($captcha['name']); ?>
                            </div>
                            
							<?php }
							} ?>
                           </table>
						
							<div class="row">
								<label>Terms & Conditions</label>
								<div style="margin:0 0 0 225px">
								<div class="box">
								<div class="title">
									Terms & Conditions
								<span class="hide"></span></div>
								<div class="content">
								<ul class="comments">
								<li>
									Terms & Conditions
									<?php $agreeCheck = array( 'name' => 'agreeCheck', 'id' => 'agreeCheck', 'value' => 'agree', 'checked' => set_checkbox('agreeCheck', 'agree', FALSE));
									
									echo form_checkbox($agreeCheck);
									?>
								</li>
					
							</ul>
						</div>
					</div>
								
								</div>
							</div>
							 <div class="row_err">
                            	<?php echo form_error($agreeCheck['name']); ?><?php echo isset($errors[$agreeCheck['name']])?$errors[$agreeCheck['name']]:''; ?>
                            </div>
				<div class="row">
					<div class="right" style="margin:0 0 0 225px">
                    <span>
						<!-- <button>Back</button> -->
                    	<button><?php echo form_submit('register', 'Register', 'style="height:25px;width:90px;"'); ?></button>
						
						<?php echo form_close(); ?>
                        </span>
					</div>
				</div> 
                            

					</div>
				</div>
			</div>
			
	</div>
<?php include("footer.php") ?>