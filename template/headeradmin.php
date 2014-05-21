

<nav class="navbar navbar-inverse navbar-fixed-top navbar-fixed-edit" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar-header-edit">
          <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand navbar-brand-edit" href="index.html">HIKKMI ADMIN MANAGEMENT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse navbar-ex1-edit">
            <ul class="navbar-baru-edit">
			<li class="dropdown messages-dropdown dropdown-edit-image">
            <div class="row col-md-img-edit">
            <div class="col-md-4 col-md-offset-4 col-img-edit-header ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url();?>/assets/img/logo.png" class="img-responsive img-logo" alt="Responsive image">   </a></div></div>
            </li>
		  </ul>
           <ul class="nav navbar-nav navbar-right navbar-user">
			<li class="dropdown messages-dropdown dropdown-title-edit">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <font color="white"><?php echo $judul;?></font>  </a>
              
            </li>
           <!-- <li class="dropdown messages-dropdown navbar-data-anggota">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><font  color="#0292D9">Data Anggota </font>   </a>
              
            </li>-->
            <li class="dropdown user-dropdown navbar-data-user">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><?php echo anchor('login/logout', '<i class="fa fa-power-off"></i> Log Out');?></li>
              </ul>
            </li>
          </ul>
			   <ul class="nav navbar-nav side-nav navbar-edit">
				<li class="dropdown dropdown-edit">
					<?php echo anchor('welcome/admin/approval', '<i class="fa fa-caret-square-o-down"></i>Pending','class="dropdown-toggle"');?>
				</li>
				<li class="dropdown dropdown-edit">
					<?php echo anchor('show_data/list_badan_usaha', '<i class="fa fa-caret-square-o-down"></i>List Badan Usaha','class="dropdown-toggle"');?>
				</li>
			  </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
	 