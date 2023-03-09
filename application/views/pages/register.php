<?php
    defined ('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
</head>
    <body>
        <div class="container">
            <br>
                <h3>User Registration</h3>
            <br>
            <div class="panel panel-default">
                <div class="panel panel-heading">Register</div>
                <div class="panel-body">
                <?php if ($this->session->flashdata('success')): ?>
		            <p style="color: green;"><?php echo $this->session->flashdata('success'); ?></p>
	            <?php endif; ?>
	            <?php echo validation_errors('<p style="color: red;">', '</p>'); ?>
                    <form action="<?php echo base_url('register/validation/') ?>" method="post">
                        <div class="form-group">
                            <label>Enter Your Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo set_value('username');?>">
                            <span class="text-danger"><?php echo form_error('userename'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Valid Email Address</label>
                            <input type="email" name="email" class="form-control"  value="<?php echo set_value('useremail');?>">
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Enter Password</label>
                            <input type="password" name="password" class="form-control"  value="<?php echo set_value('userpassword');?>">
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register" value="Register" class="btn btn-info">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>