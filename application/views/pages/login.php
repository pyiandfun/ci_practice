<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
</head>
<body>
	<h2>Login</h2>
	<?php if ($this->session->flashdata('error')): ?>
		<p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
	<?php endif; ?>
	<form action="<?php echo site_url('login/login_validation'); ?>" method="post">
		<p>
			<label for="email">Email:</label>
			<input class="form-control" type="email" name="email" value="<?php echo set_value('email'); ?>">
			<?php echo form_error('email'); ?>
		</p>
		<p>
			<label for="password">Password:</label>
			<input class="form-control" type="password" name="password" value="">
			<?php echo form_error('password'); ?>
		</p>
		<p>
			<input class="btb btn-primary" type="submit" value="Login">
		</p>
	</form>
</body>
</html>
