
      <div class="col-md-12 edit-view-badan-usaha edit-content page-wrapper">
    <div class="well">
        
        
    <?php
	$id = $this->session->userdata('id');
	
	
	foreach ($user_list as $u_key){ ?>
        <div class="row">
            <div class="col-lg-1 col-lg-offset-10 space"><?php echo anchor('show_data/show_badan_usaha', '<button class="btn btn-primary pull-right" type="button">Data View</button>');?></div>
           <div class="col-lg-1 space"> <?php echo anchor("show_data/show_edit_badan_usaha/$u_key->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
        </div>
        <form class="" action="BadanUsaha.html">
        

            <div class="row row-content">
                <div class="col-md-3 ">Nama Badan Usaha </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->nama_badan_usaha)){echo $u_key->nama_badan_usaha;} else{} ?></div>
            </div>
          
            <div class="row row-content">
                <div class="col-md-3 col-alamat-edit ">Alamat Badan Usaha  </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->alamat)){echo $u_key->alamat;} else{}  ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Kabupaten  </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->kabupaten_kota)) {echo $u_key->kabupaten_kota;}else{} ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Kode Pos   </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->kode_pos)) {echo $u_key->kode_pos;}else{} ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3">Telepon    </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->telephone)) { echo $u_key->telephone;} else{}  ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Fax     </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->fax)) { echo $u_key->fax;} else{}  ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Email      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php  if(isset($u_key->email)) { echo $u_key->email;}else{} ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Website      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->website)) { echo $u_key->website; }else{}?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">NPWP      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php if(isset($u_key->npwp)) { echo $u_key->npwp; }else{} ?></div>
            </div>
            
        </form>
      
		
		<?php echo form_open_multipart('upload/upload_gambar');  ?>
        
        <div class="container form-edit form-edit-view form-edit-upload">
		<?php if(isset($upload)){?>
		<div class="upload"> <span>Data berhasil diupload</span></div>
		<?php }?>
		<?php if(isset($delete)){?>
		<div class="delete"> <span>Data berhasil didelete</span></div>
		<?php }?>
		<?php foreach ($path as $data_upload){?>
             <legend class="legend legend-upload">Upload Data Badan Usaha</legend>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    Upload Scan 
                </div>
                <div class="col-lg-1">
                    :
                </div>
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    Domisili 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                
				<?php if(!$data_upload->domisili==""){ ?>
					<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModaldomisili">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModaldomisili" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen Domisili</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row" >
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php echo base_url()."assets/upload/".$data_upload->domisili;  ?>" class="img-responsive" alt="Responsive image">
                                            </div>  
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						
						<?php echo anchor("upload/delete_image/$id/domisili", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
				
				<?php } else {echo "<div class='col-lg-1'>  <input type='file' class='button-upload' name='Domisili'></div>";} ?>
                   
               
                
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    SIUP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
				<?php if(!$data_upload->siup==""){ ?>
                
					
					<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalsiup">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalsiup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen SIUP</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row" >
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php echo base_url()."assets/upload/".$data_upload->siup;  ?>" class="img-responsive" alt="Responsive image">
                                            </div>  
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php echo anchor("upload/delete_image/$id/siup", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
			   
			   <?php } else {echo "<div class='col-lg-1'> <input type='file' class='button-upload' name='SIUP'></div>";} ?>
			
               
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    TDP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
				<?php if(!$data_upload->tdp==""){ ?>
				<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModaltdp">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModaltdp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen TDP</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php echo base_url()."assets/upload/".$data_upload->tdp;  ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php echo anchor("upload/delete_image/$id/tdp", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
			   <?php } else {echo "<div class='col-lg-1'> <input type='file' class='button-upload' name='TDP'></div>";} ?>
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    Sert.Manj 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
				<?php if(!$data_upload->sert1==""){ ?>
				<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalSert">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalSert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen Sert.Manj</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php echo base_url()."assets/upload/".$data_upload->sert1;  ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php echo anchor("upload/delete_image/$id/sert1", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
			   <?php } else {echo "<div class='col-lg-1'> <input type='file' class='button-upload' name='Sert1'></div>";} ?>
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    Sert.Manj.K3 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
				<?php if(!$data_upload->sert2==""){ ?>
				<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalSert3">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalSert3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen Sert.Manj . K3</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php echo base_url()."assets/upload/".$data_upload->sert2;   ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php echo anchor("upload/delete_image/$id/sert2", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
			   <?php } else {echo "<div class='col-lg-1'> <input type='file' class='button-upload' name='Sert2'></div>";} ?>
                
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-3">
                    NPWP & PKP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
				<?php if(!$data_upload->npwp_pkp==""){ ?>
				<div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalNPWP">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalNPWP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen NPWP & PKP</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php  echo base_url()."assets/upload/".$data_upload->npwp_pkp;   ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php echo anchor("upload/delete_image/$id/npwp_pkp", 'hapus',array('class'=>'','onclick'=>"return confirm(
		'Apakah Anda yakin ingin menghapus data siswa?')"));?>
               </div>
			   <?php } else {echo "<div class='col-lg-1'> <input type='file' class='button-upload' name='NPWP'></div>";} ?>
                
                
            </div>
            <div class="row ">
                <div class="col-lg-1 edit-buttom-scan edit-upload-badan">
                </div>
              
                
                <div class=" col-lg-1  col-edit-upload  " > 
					
					<input type="submit" class="btn btn-primary pull-right" value="submit" name="submit"  >
					<?php form_close() ?>
				</div>
                   
                
            </div>
			<?php }?>
        </div>
          <?php }?>
            </div>
        
          
</div>
        