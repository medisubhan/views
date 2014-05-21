<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel=”icon”  href="img/favicon.ico">
    <title>Regristrasi Form</title>
    

    <!-- Bootstrap core CSS -->
	<?php echo link_tag(base_url().'assets/css/bootstrap.css'); ?>
    <?php echo link_tag(base_url().'assets/css/bootstrap.min.css'); ?>
    
    <!-- Custom CSS for the 'Full Width Pics' Template -->
	 <?php echo link_tag(base_url().'assets/css/sb-admin.css'); ?>
</head>

<body class="body">
<div class="container">


    <div class="well">
    <form class="form-horizontal" role="form">
        <center>
   <h4> Regristrasi Form </h4>
            </center>
  <div class="form-group">
    <label for="inputnama" class="col-sm-3 col-sm-offset-3 control-label  ">Nama Badan Usaha :</label>
      <div class="row">
    <div class="col-sm-3" >
      <input type="text" class="form-control" id="" placeholder="nama perusahaan">
        </div>
  </div>
      </div>
      
      <div class="form-group">
    <label for="inputemail" class="col-sm-3 col-sm-offset-3 control-label">Nama :</label>
          <div class="row">
        <div class="col-sm-3 ">
      <input type="text" placeholder="nama" class="form-control" id="">
    </div>
    </div>
  </div>
     <div class="form-group">
    <label for="inputemail" class="col-sm-3 col-sm-offset-3 control-label">Email :</label>
         <div class="row">
        <div class="col-lg-2">
      <input type="email" placeholder="Email" class="form-control" id="">
    </div>
    </div>
  </div>
     <div class="form-group">
    <label for="inpuNPWP" class="col-sm-3 col-sm-offset-3 control-label">Password :</label>
         <div class="row">
        <div class="col-sm-3">
      <input type="password" placeholder="password" class="form-control" id="">
    </div>
    </div>
  </div>
     
        
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-3">
      <button class="btn btn-primary pull-right" type="button">Register</button>
    </div>
	<div class="col-sm-1">
	<?php echo anchor('welcome/members/'.$id='administrasi','<button class="btn btn-primary pull-right" type="button">Sign in</button>');?> 
    </div>
  </div>
  
</form>
    </div>
    </div>

    

    
    <script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/dropdown.js"></script>
<script src="js/affix.js"></script>
<script src="js/transition.js"></script>
</body>
</html>
<!-- JavaScript -->
