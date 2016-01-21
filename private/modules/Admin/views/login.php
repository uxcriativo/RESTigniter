<div class="container">
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="panel panel-default">
			   <div class="panel-heading">
					<h1><?php echo lang('login_heading');?></h1>
					<p><?php echo lang('login_subheading');?></p>
					</div>
					<div id="infoMessage ">
						<?php if($message){?>
						<div class="alert alert-warning" role="alert"><?=$message;?></div>
						<?php }?>
					</div>
				  	<div class="panel-body">
					<?php echo form_open("admin/login");?>
					
					  <p>
					    <?php echo lang('login_identity_label', 'identity');?>
					    <?php echo form_input($identity);?>
					  </p>
					
					  <p>
					    <?php echo lang('login_password_label', 'password');?>
					    <?php echo form_input($password);?>
					  </p>
					
					  <p>
					    <?php echo lang('login_remember_label', 'remember');?>
					    <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
					  </p>
					
					
					  <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
					
					<?php echo form_close();?>
					
					<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
				</div>
			</div>
			<p>ADMIN-AREA:  admin@admin.com / password</p>
			<p>MEMBER-AREA: demo@demo.com   / demo1234</p>
		</div>
	</div>
</div>