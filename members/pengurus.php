
      <div class="col-md-12  edit-content page-wrapper edit-view-badan-usaha">

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
				<?php echo form_open('submit_data/submitPengurus',$attributes);?> 
    
   <!-- <form class="form-horizontal form-edit" role="form" action="<?php echo base_url();?>index.php/submit_data/submitPengurus" method="post"> -->
             
   
        
  
    <legend class="legend">Pengurus</legend>
    <div class="form-group">
        <label for="inputgred" class="col-sm-3 control-label col-input-pengurus">  Nama </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3 ">
            <input type="text" class="form-control form-control-edit"  name="nama" value="<?php echo set_value('nama'); ?>">
			
        </div>
		
		
        <label for="inputjabatan" class="col-sm-2 control-label ">Jabatan</label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3">
            <input type="type" placeholder="" class="form-control form-control form-control-edit" name="jabatan" value="<?php echo set_value('jabatan'); ?>">
        </div>
		<div class="gagal col-md-6" style="color:red;">
				<?php echo form_error('nama'); ?>
		</div>
		<div class="gagal col-md-6" style="color:red;">
				<?php echo form_error('jabatan'); ?>
		</div>
    </div>
    <div class="form-group form-group-edit">
        <label for="inputtahun" class="col-sm-3 control-label col-input-pengurus"> Tanggal Lahir </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3">
            <input type="text" placeholder="" class="form-control datepicker form-control form-control-edit" name="tgl_lahir" value="<?php echo set_value('tgl_lahir'); ?>">
        </div>
		
        <label for="inpuNPWP" class="col-sm-2 control-label"> Pendidikan</label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-2">
            <select class="form-control form-control form-control-edit" id="" name="pendidikan" value="<?php echo set_value('pendidikan'); ?>" >
                <option >SD</option>
                <option >SMP</option>
                <option >SMA</option>
                <option >S1</option>
                <option >S2</option>
                <option >S3</option>
            </select>
        </div>
		<div class="gagal col-md-12" style="color:red;">
				<?php echo form_error('tgl_lahir'); ?>
		</div>
		<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('pendidikan'); ?>
		</div>
    </div>
    <div class="form-group form-group-edit">
        <label for="inputAlamat" class="col-sm-3 control-label col-input-pengurus"> Alamat </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-5">
            <textarea class="form-control form-control form-control-edit" rows="3"  name="alamat" id="" value="<?php echo set_value('alamat'); ?>"></textarea>
        </div>
    </div>
	<div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('alamat'); ?>
	</div>
    <div class="form-group form-group-edit">
        <label for="inputasosiasi" class="col-sm-3 control-label col-input-pengurus">No. KTP </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-4">
            <input type="text" placeholder="" class="form-control form-control form-control-edit" id="" name="no_ktp" value="<?php echo set_value('no_ktp'); ?>">
        </div>
    </div>
    <div class="gagal" style="color:red;background-color:white;">
				<?php echo form_error('no_ktp'); ?>
	</div>
        
    <div class="form-group">
        
        <div class="col-sm-3 col-sm-offset-9 col-edit-btn-pengurus-2">
            <input class="btn btn-primary pull-right" type="submit" value="Tambah Data Pengurus">
        </div>
    </div>
	
</form>
</div>
    </div>

        