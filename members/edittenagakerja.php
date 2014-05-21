
      <div class="col-md-12  edit-content page-wrapper">
    
    <div class="well ">
    
	<div class="header-content container">
	
	</div>
	<?php foreach ($user_list as $u_key){ ?>
    <form class="form-horizontal form-edit form-edit-view" action="<?php echo base_url();?>index.php/submit_data/update_tenaga_kerja" method="post" role="form">
    <legend class="legend">Tenaga Kerja  </legend>
        <div class="form-group">
            <div class="col-md-6">
             <input id="info_id" type="hidden" name="id" value="<?php echo $u_key->id;?>">
                <div class="row form-group"> 
                    <label for="inputgred" class="col-sm-5 control-label">   Nama   </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->nama;?>" name="nama" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputtahun" class="col-sm-5 control-label">    Tanggal Lahir </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>    
                    <div class="col-sm-4">
                        <input type="text" placeholder="" class="form-control form-control-edit datepicker" value="<?php echo $u_key->tgl_lahir;?>" name="tgl_lahir" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputAlamat" class="col-sm-5 control-label">  Alamat </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <textarea class="form-control form-control-edit" rows="3" id="" name="alamat"><?php echo $u_key->alamat;?></textarea>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputasosiasi" class="col-sm-5 control-label"> No. KTP </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="text" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->no_ktp;?>"  name="no_ktp" id="">
                    </div>
                </div> 
            </div>
            <div class="col-md-6 ">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> PJT </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->pjt;?>" name="pjt" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label">  PJB </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->pjb;?>" name="pjb" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> No. Regristrasi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-3">
                        <input type="type" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->no_registrasi;?>" name="no_registrasi" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label">  Jenis Sertifikat </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->jenis_serikat;?>" name="jenis_sertifikat" id="">
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label"> Bidang </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="type" placeholder="" class="form-control form-control-edit" value="<?php echo $u_key->bidang;?>" name="bidang" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                 <label for="inpuNPWP" class="col-sm-5 control-label">  Pendidikan </label>
                 <div class="col-xs-1 col-dot-edit-2 ">:</div>
                 <div class="col-sm-3">
                    <select class="form-control form-control-edit" name="pendidikan" id="">
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
        </div>  
        <div class="form-group">
            
            <div class=" col-sm-3 col-sm-offset-9">
                <input class="btn btn-primary pull-right" type="submit" value="Tambah Data Tenaga Kerja">
            </div>
        </div>
    </form>
     <?php }?>
    </div>
        </div>
    