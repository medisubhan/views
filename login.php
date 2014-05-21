<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
	<?php echo link_tag(base_url().'assets/css/bootstrap.css'); ?>

    <!-- Add custom CSS here -->
     <?php echo link_tag(base_url().'assets/css/sb-admin.css'); ?>
    <!-- Page Specific CSS -->
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script>
           $(function() {
           $( ".datepicker" ).datepicker({
               changeMonth: true,
               changeYear: true
           });
           });
      </script>
    </head>
    <body style="background-color:#F2F2F4;margin:0;">
		
        <div class="login col-lg-12">
            <div class="col-lg-4 col-lg-offset-4">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/img/logo.png" class="img-responsive img-logo" alt="Responsive image">   
                </a>
            </div>
        </div>
        <div class="container">
		
            <div class="col-lg-4 col-lg-offset-4 col-xs-12 content-login">
				<?php if (isset($error)){?>
					<div class="col-lg-12 error">
				<?php echo $error;?>
					</div>
				<?php }?>
                 <div class="col-lg-5 col-xs-5 col-edit-user-login">
					<div class="col-lg-6 width-create-icon no-padding">
						<img src="<?php echo base_url();?>/assets/img/Users_icon.png" class="img-responsive img-logo" alt="Responsive image">
					</div>
					<div class="col-lg-6 no-padding width-create-user">
						User Login <?php echo validation_errors();?>
					</div>
						 
                 </div>
                 <div class="col-lg-4 col-xs-4 col-lg-offset-3 col-edit-register-login ">
                     <?php echo anchor('register/register_form', img(array('src'=>'assets/img/register.png','alt'=>'Responsive image','class'=>'img-responsive')));?>
                      
                 </div>
                <!--<form method="post" role="form" class="form-login col-lg-12 col-xs-12" action="<?//php echo base_url(); ?>login/validate_credentials"> -->
				<?php $attributes = array('class' => 'form-login col-lg-12 col-xs-12', 'role' => 'form', 'method' => 'post'); ?>
				<?php echo form_open('login/validate_credentials',$attributes);?>
                  <div class="form-group col-lg-12 ">
                    <input type="email" name="email" class="form-control" id="searchboxnama" placeholder="email" >
                  </div>
                  <div class="form-group col-lg-12">
                    <input type="password" name="password" class="form-control" id="searchboxpassword" placeholder="Password" >
                  </div>
                  <div class="col-lg-6 form-lupa footer">
                    <a href="">Lupa Password ?</a>
                  </div>
                  <div class="col-lg-4 col-lg-offset-1 col-sign-in footer">
                      <input type="image" src="<?php echo base_url();?>/assets/img/signin.png" alt="Submit" class="img-responsive img-logo">

                  </div>
                </form>

                </div>
        </div>
        
        
        
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    </body>
</html>