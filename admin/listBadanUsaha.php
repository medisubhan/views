      <div class="col-md-12  edit-content page-wrapper">
		<div class="well well-edit ">
		<div class="row padding">
			<div class="col-sm-3 col-search no-padding">
			  <input type="text" class="form-control form-control-search" id="" placeholder="Search....">
			</div>
		</div>
			<form class="form-horizontal form-edit " role="form">
				<div class="form-group">
					<div class="row">
					<?php foreach ($user_list as $u_key){ ?>
						<div class="col-lg-12">
							<?php echo  anchor("show_data/detail_admin/$u_key->id",$u_key->nama_badan_usaha);?> 
						</div>
					<?php }?>	
					</div>
				</div>
			</form>
		</div>
    </div>
        
     