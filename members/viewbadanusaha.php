<div class="col-md-12  edit-view-badan-usaha edit-content page-wrapper">
    <div class="well">
    <?php foreach ($user_list as $u_key){ ?>
        <div class="row">
            <div class="col-lg-1 col-lg-offset-10 space"><?php echo anchor('welcome/members/uploadbadanusaha', '<button class="btn btn-primary pull-right" type="button">Upload File</button>');?></div>
           <div class="col-lg-1 space"> <?php echo anchor("show_data/show_edit_badan_usaha/$u_key->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
        </div>
        <form class="" action="BadanUsaha.html">
        

            <div class="row row-content">
                <div class="col-md-3 ">Nama Badan Usaha </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->nama_badan_usaha; ?></div>
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
        <?php }?>
		<?php foreach ($upload as $data_upload){?>
			
        <div class="container form-edit form-edit-view ">
                   <legend class="legend legend-view">Data Dokumen Upload</legend>
				   <?php if(isset($error)){echo $error;} else{} ?>
            <div class="container">
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    Domisili 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                <div class="col-lg-2">
                    Berlaku s.d
               </div>
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
                                                <img src="<?php if(isset($data_upload->domisili)){ echo base_url()."assets/upload/".$data_upload->domisili; } else{}  ?>" class="img-responsive" alt="Responsive image">
                                            </div>  
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                
                
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    SIUP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                <div class="col-lg-2">
                    Berlaku s.d
               </div>
               <div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalSIUP">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalSIUP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen SIUP</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php   if(isset($data_upload->siup)){ echo base_url()."assets/upload/".$data_upload->siup; }  else{}  ?>" class="img-responsive" alt="Responsive image">
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    TDP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                <div class="col-lg-2">
                    Berlaku s.d
               </div>
               <div class="col-lg-3">
                    <a data-toggle="modal" href="#myModalTDP">View Dokumen</a>
                   <!-- Modal -->
                        <div class="modal fade" id="myModalTDP" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Contoh Dokumen TDP</h4>
                                    </div>
                                    <div class="modal-body">
                                       <div class="row">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                <img src="<?php if(isset($data_upload->tdp)){ echo base_url()."assets/upload/".$data_upload->tdp; } else{}   ?>" class="img-responsive" alt="Responsive image">
                                            </div>   
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    Sert.Manj 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
               <div class="col-lg-2">
                    Berlaku s.d
               </div>
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
                                                <img src="<?php if(isset($data_upload->sert1)){ echo base_url()."assets/upload/".$data_upload->sert1; } else{}   ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    Sert.Manj.K3 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                <div class="col-lg-2">
                    Berlaku s.d
               </div>
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
                                                <img src="<?php if(isset($data_upload->sert2)){ echo base_url()."assets/upload/".$data_upload->sert2; } else{}   ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
                
            </div>
            <div class="row edit-buttom-scan">
                <div class="col-lg-2">
                    NPWP & PKP 
                </div>
                <div class="col-lg-1 col-up-1-edit">
                    :
                </div>
                <div class="col-lg-2">
                    Berlaku s.d
               </div>
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
                                                <img src="<?php if(isset($data_upload->npwp_pkp)){ echo base_url()."assets/upload/".$data_upload->npwp_pkp; } else{}   ?>" class="img-responsive" alt="Responsive image">
                                            </div>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
               </div>
            </div>
            </div>
        </div>
		<?php }?>
    </div> 
    
</div>
       