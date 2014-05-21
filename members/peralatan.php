
      <div class="col-md-12  edit-content page-wrapper">
    <div class="well well-edit">
    
    <div class="header-content container">
	<?php foreach ($user_list as $u_key){ ?>
                <div class="form-group col-lg-12">
                    <label for="BadanUsaha" class="col-sm-2  control-biasa">Nama Badan Usaha  </label>
                    <div class="col-xs-1 control-biasa min-size">:</div>
                    <label for="BadanUsaha" class="col-sm-4  control-biasa"><?php if(isset($u_key->nama_badan_usaha)) { echo $u_key->nama_badan_usaha; }else {}?> </label> 
                </div>
                <div class="form-group col-lg-12 ">
                    <label for="alamat" class="col-sm-2  control-biasa col-alamat">Alamat Badan Usaha  </label>
                    <div class="col-xs-1 control-biasa min-size">:</div> 
                    <label for="BadanUsaha" class="col-sm-3  control-biasa"><?php if(isset($u_key->alamat)){echo $u_key->alamat;} else{}  ?></label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">Kabupaten  </label>
                    <div class="col-xs-1 control-biasa min-size">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa"><?php if(isset($u_key->kabupaten_kota)) {echo $u_key->kabupaten_kota;}else{} ?></label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">Telepon  </label>
                    <div class="col-xs-1 control-biasa min-size">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa"><?php if(isset($u_key->telephone)) { echo $u_key->telephone;} else{}  ?></label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">NPWP  </label>
                    <div class="col-xs-1 control-biasa min-size">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa"><?php if(isset($u_key->npwp)) { echo $u_key->npwp; }else{} ?></label>
                </div>
    <?php }?>
	</div>      
    
    

<?php $attributes = array('class' => 'form-horizontal form-edit form-edit-view', 'role' => 'form', 'method' => 'post'); ?>
				<?php echo form_open('submit_data/submit_peralatan',$attributes);?> 
 <!-- <form class="form-horizontal form-edit form-edit-view"  role="form" action="<?php echo base_url();?>index.php/submit_data/submit_peralatan" method="post">-->
    <legend class="legend">Peralatan  </legend>
  
        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inputgred" class="col-sm-4 control-label">    Jenis </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
					
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-edit" name="jenis" id="inputgred" value="<?php echo set_value('jenis'); ?>" >
                    </div>
                </div>
				
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('jenis'); ?>
				</div>
			
                <div class="row form-group">
                    <label for="inputtahun" class="col-sm-4 control-label">    Kapasitas </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="" name="kapasitas" class="form-control form-control-edit" id="" value="<?php echo set_value('kapasitas'); ?>">
                    </div>
                </div>
				
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('kapasitas'); ?>
				</div>
			
                <div class="row form-group">
                    <label for="inputAlamat" class="col-sm-4 control-label">  Merk </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="" name="merk" class="form-control form-control-edit" id="" value="<?php echo set_value('merk'); ?>">
                    </div>
                </div>
				
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('merk'); ?>
				</div>
		
                <div class="row form-group">
                    <label for="inputasosiasi" class="col-sm-4 control-label">   Tahun </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="" name="tahun" class="form-control form-control-edit" id="txtYear" value="<?php echo set_value('tahun'); ?>">
                    </div>
                </div>
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('tahun'); ?>
				</div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label"> Kondisi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-3">
                        <input type="type" placeholder="" name="kondisi" class="form-control form-control-edit" id="" value="<?php echo set_value('kondisi'); ?>">
                    </div>
                </div>
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('kondisi'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label">   Lokasi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="type" placeholder="" name="lokasi" class="form-control form-control-edit" id="" value="<?php echo set_value('lokasi'); ?>"><br>
                    </div>
                </div>
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('lokasi'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label"> Jumlah </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="type" placeholder="" name="jumlah" class="form-control form-control-edit" id="" value="<?php echo set_value('jumlah'); ?>"><br>
                    </div>
                </div>
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('jumlah'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label">  Harga (Rp.) </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="type" placeholder="" name="harga" class="form-control form-control-edit" id="" value="<?php echo set_value('harga'); ?>"><br>
                    </div>
                </div>
				<div class="gagal" style="color:red; background-color:white;">
				<?php echo form_error('harga'); ?>
				</div>
            </div> 
    </div>    
    <div class="form-group">
        <div class=" col-sm-2 col-sm-offset-9">
            <input class="btn btn-primary  " type="submit" value="Tambah Data Peralatan">
        </div>
        
    </div>
</form>
 </div>  
       
        </div>
