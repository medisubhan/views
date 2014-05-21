<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - Admin</title>

    <!-- Bootstrap core CSS -->
	<?php echo link_tag(base_url().'assets/css/bootstrap.css'); ?>

    <!-- Add custom CSS here -->
     <?php echo link_tag(base_url().'assets/css/sb-admin.css'); ?>
	 <?php echo link_tag(base_url().'assets/js/development-bundle/themes/ui-lightness/jquery-ui.css'); ?>
    <!-- Page Specific CSS -->
      <script src="<?php echo base_url();?>assets/js/jquery-1.8.3.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery-1.9.2.custom.min.js"></script>
      <script src="<?php echo base_url();?>assets/js/jquery.ui.core.js"></script>
	  <script src="<?php echo base_url();?>assets/js/development-bundle/ui/jquery.ui.datepicker.js"></script>
      <script>
           $(function() {
           $( ".datepicker" ).datepicker({
               changeMonth: true,
               changeYear: true,
			   yearRange: '1970:2025'
           });
            $.datepicker.setDefaults($.datepicker.regional['nl']); 
            $.datepicker.setDefaults({ dateFormat: 'yy-mm-dd' });
           });
		   
		     $(function () {  
            $("#txtYear").datepicker(  
       {  
  
           changeMonth: true,  
           changeYear: true,  
           showButtonPanel: true,  
           dateFormat: 'yy',  
           onClose: function (dateText, inst) {  
               var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();  
               var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();  
               $(this).datepicker('setDate', new Date(year, month, 1));  
  
           }  
       });  
            $("txtYear.ClientID").click(function () {  
                $(".ui-datepicker-calendar").hide();  
            });  
        });
      </script>
   
  </head>

  <body>

    <div id="wrapper">
            <!-- header -->
	<?php echo $_header;?>
    <!-- content-->
    <?php echo $_content;?>
	
        </div>
      <!-- JavaScript -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</body>
    </html>