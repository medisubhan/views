
      <div class="col-md-12  edit-content page-wrapper">
    
    <div class="well ">
    
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
				<?php echo form_open('submit_data/submit_tenaga_kerja',$attributes);?> 
    <!--<form class="form-horizontal form-edit form-edit-view" action="<?php echo base_url();?>index.php/submit_data/submit_tenaga_kerja" method="post" role="form">-->
    <legend class="legend">Tenaga Kerja  </legend>
        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group"> 
                    <label for="inputgred" class="col-sm-5 control-label">   Nama   </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-edit" name="nama" id="" value="<?php echo set_value('nama'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('nama'); ?>
				</div>
                <div class="row form-group">
                    <label for="inputtahun" class="col-sm-5 control-label">    Tanggal Lahir </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>    
                    <div class="col-sm-4">
                        <input type="text" placeholder="" class="form-control form-control-edit datepicker" name="tgl_lahir" id="" value="<?php echo set_value('tgl_lahir'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('tgl_lahir'); ?>
				</div>
                <div class="row form-group">
                    <label for="inputAlamat" class="col-sm-5 control-label">  Alamat </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <textarea class="form-control form-control-edit" rows="3" id="" name="alamat" value="<?php echo set_value('alamat'); ?>" ></textarea>
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('alamat'); ?>
				</div>
                <div class="row form-group">
                    <label for="inputasosiasi" class="col-sm-5 control-label"> No. KTP </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" class="form-control form-control-edit" name="no_ktp" id="" value="<?php echo set_value('no_ktp'); ?>" >
                    </div>
                </div> 
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('no_ktp'); ?>
				</div>
            </div>
            <div class="col-md-6 ">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> PJT </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" name="pjt" id="" value="<?php echo set_value('pjt'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('pjt'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label">  PJB </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" name="pjb" id="" value="<?php echo set_value('pjb'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('pjb'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> No. Regristrasi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-3">
                        <input type="type" placeholder="" class="form-control form-control-edit" name="no_registrasi" id="" value="<?php echo set_value('no_registrasi'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('no_registrasi'); ?>
				</div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label">  Jenis Sertifikat </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" name="jenis_sertifikat" id="" value="<?php echo set_value('jenis_sertifikat'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('jenis_sertifikat'); ?>
				</div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> Bidang </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" name="bidang" id="" value="<?php echo set_value('bidang'); ?>" >
                    </div>
                </div>
				<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('bidang'); ?>
				</div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                 <label for="inpuNPWP" class="col-sm-5 control-label">  Pendidikan </label>
                 <div class="col-xs-1 col-dot-edit-2 ">:</div>
                 <div class="col-sm-3">
                    <select class="form-control form-control-edit" name="pendidikan" id="" value="<?php echo set_value('pendidikan'); ?>" >
                        <option >SD</option>
                        <option >SMP</option>
                        <option >SMA</option>
                        <option >S1</option>
                        <option >S2</option>
                        <option >S3</option>
                    </select>
                </div>
               </div>
            </div>
			<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('pendidikan'); ?>
				</div>
        </div>  
        <div class="form-group">
            
            <div class=" col-sm-3 col-sm-offset-9">
                <input class="btn btn-primary pull-right" type="submit" value="Tambah Data Tenaga Kerja">
            </div>
        </div>
    </form>
    </div>
        </div>
    