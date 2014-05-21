
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
				<?php echo form_open('submit_data/submit_pengalaman',$attributes);?> 
       
     
        <div class="form-group">
            <div class="col-md-6">
                <legend class="legend">Proyek </legend>
                <div class="">
                    <div class="row form-group">
                        <label for="inputgred" class="col-sm-4 control-label col-pengalaman-edit-form">     Tahun  </label>
                        <div class="col-xs-1 col-dot-edit-2 ">:</div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control form-control-edit" name="tahun_proyek"  id="txtYear" value="<?php echo set_value('tahun_proyek'); ?>" >
                        </div>
                    </div>
					<div class="gagal" style="color:red;background-color:white;">
						<?php echo form_error('tahun_proyek'); ?>
					</div>
                    <div class="row form-group">
                        <label for="inputtahun" class="col-sm-4 control-label">    Nama </label>
                        <div class="col-xs-1 col-dot-edit-2 ">:</div>
                        <div class="col-sm-7">
                            <input type="text" placeholder="" class="form-control form-control-edit" name="nama_proyek" id="" value="<?php echo set_value('nama_proyek'); ?>">
                        </div>
                    </div>
					<div class="gagal" style="color:red;background-color:white;">
						<?php echo form_error('nama_proyek'); ?>
					</div>
                    <div class="row form-group">
                        <label for="inputAlamat" class="col-sm-4 control-label">  Nilai </label>
                        <div class="col-xs-1 col-dot-edit-2 ">:</div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="" class="form-control form-control-edit" name="nilai_proyek" id="" value="<?php echo set_value('nilai_proyek'); ?>">
                        </div>
                    </div>
					<div class="gagal" style="color:red;background-color:white;">
						<?php echo form_error('nilai_proyek'); ?>
					</div>
                </div> 
            </div>
            <div class="col-md-6">
                <legend class="legend"> Nomor  </legend>
                    <div class=""> 
                            <div class="row form-group">
                                <label for="inpuNPWP" class="col-sm-5 control-label">    Kontrak </label>
                                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                                <div class="col-sm-4">
                                    <input type="type" placeholder="" class="form-control form-control-edit" name="kotrak_nomor" id="" value="<?php echo set_value('kotrak_nomor'); ?>">
                                </div>
                            </div>
							<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('kotrak_nomor'); ?>
							</div>
                            <div class="row form-group">
                                <label for="inpuNPWP" class="col-sm-5 control-label"> NKPK </label>
                                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                                <div class="col-sm-5">
                                    <input type="type" placeholder="" class="form-control form-control-edit" name="nkpk_nomor" id="" value="<?php echo set_value('nkpk_nomor'); ?>">
                                </div>
                            </div>
							<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('nkpk_nomor'); ?>
							</div>
                            <div class="row form-group">
                                <label for="inpuNPWP" class="col-sm-5 control-label">  Berita Acara Serah Terima </label>
                                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                                <div class="col-sm-6">
                                    <textarea class="form-control form-control-edit" rows="3" name="berita_acara_no" id="" value="<?php echo set_value('berita_acara_no'); ?>"></textarea>
                                </div>
                            </div>
							<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('berita_acara_no'); ?>
							</div>
                    </div>
            </div>
        </div>
        <div class="border-again"></div>
   
            <div class="">
			<legend class="legend"> Tanggal </legend>
                <div class="col-lg-12">
                    <div class="row form-group">
                        <label for="inputtahun" class="col-sm-3 control-label">    Pemberi Tugas </label>
                        <div class="col-xs-1 col-dot-edit-2 ">:</div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="" class="form-control form-control-edit" name="pemberi_tugas" id="" value="<?php echo set_value('pemberi_tugas'); ?>">
                        </div>
                    </div>
					<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('pemberi_tugas'); ?>
							</div>
                    <div class="row form-group">
                        <label for="inputtahun" class="col-sm-3 control-label">   Sub Bidang Kualifikasi  </label>
                        <div class="col-xs-1 col-dot-edit-2 ">:</div>
                        <div class="col-sm-3">
                            <input type="text" placeholder="" class="form-control form-control-edit" name="bidang_kualifikasi" id="" value="<?php echo set_value('bidang_kualifikasi'); ?>">
                        </div>
                    </div>
					<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('bidang_kualifikasi'); ?>
							</div>
                    
                    <div class="border-again no-padding"> 
                        <div class="row form-group">
                            <label for="inpuNPWP" class="col-sm-3 control-label">    Berita Acara Serah Terima </label>
                            <div class="col-xs-1 col-dot-edit-2 ">:</div>
                            <div class="col-sm-4">
                                <textarea class="form-control form-control-edit" name="berita_acara_tgl" rows="3" id="" value="<?php echo set_value('berita_acara_tgl'); ?>"></textarea>
                            </div>
                        </div>
						<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('berita_acara_tgl'); ?>
							</div>
                        <div class="row form-group">
                            <label for="inpuNPWP" class="col-sm-3 control-label"> Kontrak </label>
                            <div class="col-xs-1 col-dot-edit-2 ">:</div>
                            <div class="col-sm-3">
                                <input type="type" placeholder="" name="kontrak" class="form-control form-control-edit" id="" value="<?php echo set_value('kontrak'); ?>">
                            </div>
                        </div>
						<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('kontrak'); ?>
							</div>
                        <div class="row form-group">
                            <label for="inpuNPWP" class="col-sm-3 control-label">  Mulai </label>
                            <div class="col-xs-1 col-dot-edit-2 ">:</div>
                            <div class="col-sm-3">
                                <input type="type" placeholder="" name="mulai" class="form-control form-control-edit datepicker" id="" value="<?php echo set_value('mulai'); ?>">
                            </div>
                        </div>
						<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('mulai'); ?>
							</div>
                        <div class="row form-group">
                            <label for="inpuNPWP" class="col-sm-3 control-label">  Selesai </label>
                            <div class="col-xs-1 col-dot-edit-2 ">:</div>
                            <div class="col-sm-3">
                                <input type="type" placeholder="" name="selesai" class="form-control form-control-edit datepicker" id="" value="<?php echo set_value('selesai'); ?>">
                            </div>
                        </div>
						<div class="gagal" style="color:red;background-color:white;">
								<?php echo form_error('selesai'); ?>
							</div>
                    </div>
                </div>
            </div>
            <div class="form-group">
        <div class=" col-sm-2 col-sm-offset-9">
            <input class="btn btn-primary  " type="submit" value="Tambah Data Pengalaman">
        </div>
    </div>
        </form>
 </div> 
       
        </div>
