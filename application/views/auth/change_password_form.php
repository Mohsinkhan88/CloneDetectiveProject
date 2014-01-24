<?php include("header.php") ?>
<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
);
?>	<div id="right">
		
			<div class="btn-box">
				<div class="content">
					<a href="#" class="item">
						<img src="gfx/icons/big/dashboard.png" alt="Dashboard" />
						<span>Dashboard</span>
						Back to the dashboard
					</a>
					
					<a href="#" class="item">
						<img src="gfx/icons/big/messages.png" alt="Messages" />
						<span>Messages</span>
						Go to your inbox
					</a>
					
					<a href="#" class="item">
						<img src="gfx/icons/big/settings.png" alt="Settings" />
						<span>Settings</span>
						Change your settings
					</a>
					
					<a href="#" class="item">
						<img src="gfx/icons/big/support.png" alt="Support" />
						<span>Support</span>
						Need some support?
					</a>
					
					<a href="#" class="item">
						<img src="gfx/icons/big/statics.png" alt="Statics" />
						<span>Statics</span>
						See your statistics
					</a>
					
				</div>
			</div>
			
			<div class="section">
				<div class="box">
					<div class="title"> Reset Password <span class"hide"> </span> 
					</div>
					<div class="content">
						<?php echo form_open($this->uri->uri_string()); ?>
						<div class="row">
							<?php echo form_label('Old Password', $old_password['id']); ?> 
							<div class="right"><?php echo form_password($old_password); ?></div>
							<div class="right"><div class="message red"><?php echo form_error($old_password['name']); ?> <?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:''; ?> </div> </div>
						</div>
						<div class="row">
							<?php echo form_label('New Password', $new_password['id']); ?> 
							<div class="right"><?php echo form_password($new_password); ?></div>
							<div class="right"><div class="message red"><?php echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:''; ?> </div> </div>
						</div>
						<div class="row">
							<?php echo form_label('Confirm New Password', $confirm_new_password['id']); ?>
							<div class="right"><?php echo form_password($confirm_new_password); ?></div>
							<div class="right"><div class="message red"><?php echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:''; ?> </div> </div>
						</div>
						<div class="row">
						<button type= "submit" class="green"><?php echo form_submit('change', 'Change Password'); ?>
						<?php echo form_close(); ?>
						</div>
					</div>
				</div>	
	
				
				
				
			
			</div>
		</div>	
<?php include("footer.php") ?>