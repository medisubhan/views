<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Dashboard - SB Admin</title>

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
        <div class=" container">
            <div class="col-lg-4 col-lg-offset-4 col-xs-12 content-login">
                 <div class="col-lg-4 col-xs-5 col-edit-user-login">
                     <?php echo anchor('welcome/', img(array('src'=>'assets/img/login2.png','alt'=>'Responsive image','class'=>'img-responsive login2')));?>
                 </div>
                 <div class="col-lg-6 col-xs-4 col-edit-header-regist ">
                     Regristrasi Form
                      
                 </div>
                <!--<form method="post" role="form" class="form-login col-lg-12 col-xs-12" action="/members/index.php/login/register_member"> -->
				<?php $attributes = array('class' => 'form-login col-lg-12 col-xs-12', 'role' => 'form', 'method' => 'post'); ?>
				<?php echo form_open('register/register_member',$attributes);?>
                  <div class="form-group col-lg-12 ">
				  
                    <input type="text" name="nama_badan_usaha" class="form-control" id="searchboxbadanusaha" placeholder="NAMABADANUSAHA" value="<?php echo set_value('nama_badan_usaha'); ?>">
					<?php echo "<p style='color:red;text-align:center;'".form_error('nama_badan_usaha')."</p>"; ?>
				  </div>
                   <div class="form-group col-lg-12 ">
                    <input type="text" name="nama" class="form-control" id="searchboxnama" placeholder="NAMA" value="<?php echo set_value('nama'); ?>">
					<?php echo "<p style='color:red;text-align:center;'".form_error('nama')."</p>"; ?>
                  </div>
                  <div class="form-group col-lg-12 ">
                    <input type="email" name="email" class="form-control" id="searchboxemail" placeholder="EMAIL" value="<?php echo set_value('email'); ?>">
					<?php echo "<p style='color:red;text-align:center;margin:0;'".form_error('email')."</p>"; ?>
                  </div>
                  <div class="form-group col-lg-12">
                    <input type="password" name="password" class="form-control" id="searchboxpassword" placeholder="Password" value="<?php echo set_value('password'); ?>">
					<?php echo "<p style='color:red;text-align:center;margin:0;'".form_error('password')."</p>"; ?>
                  </div>
                  <div class="col-lg-4 col-lg-offset-4 col-xs-5 col-xs-offset-3 btn-register  footer">
                   
                     <input type="image" src="<?php echo base_url();?>/assets/img/register-btn.png" alt="Submit" class="img-responsive img-logo">
                  </div>
                </form>

                </div>
        </div>
        
        
        
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    </body>
</html>