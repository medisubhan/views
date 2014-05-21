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
			<div class="row">
				<div class="col-lg-6 col-lg-offset-3 successpage-content">
					<p>Terima kasih telah mendaftar sebagai anggota HIKKMI. Data anda sedang kami proses. Setelah disetujui, anda akan mendapatkan informasi selanjutnya melalui email yang terdaftar.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-2 col-lg-offset-5 link-website">
					<a href="http://hikkmi.org/"><h2>Hikkmi.org</h2></a>
				</div>
			</div>
        </div>
        
        
        
        <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
    </body>
</html>