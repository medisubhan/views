<div class="col-md-12  edit-view-badan-usaha edit-content page-wrapper">
    <div class="well">
       
		<div class="col-lg-offset-4 no-padding title-detail"><h3>Data Badan Usaha</h3></div>
		<div class="header-top-title"></div>
        <?php foreach ($user_list as $u_key){ ?>
        <div class="row">
            <div class="col-lg-1 space"> <?php echo anchor("show_data/edit_admin/$u_key->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
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
                <div class="col-md-5"><?php echo $u_key->alamat; ?> </div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Kabupaten  </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->kabupaten_kota; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Kode Pos   </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->kode_pos; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3">Telepon    </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->telephone; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Fax     </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->fax; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Email      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->email; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">Website      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->website; ?></div>
            </div>
            <div class="row row-content">
                <div class="col-md-3 ">NPWP      </div>
                <div class="col-xs-1 col-xs-edit">:</div>
                <div class="col-md-5"><?php echo $u_key->npwp; ?></div>
            </div>
         
        </form>
          <?php }?> 
 <?php foreach ($upload as $data_upload){?>
			
        <div class="container form-edit form-edit-view ">
                   <legend class="legend legend-view">Data Dokumen Upload</legend>
				   
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
			<div class="col-lg-offset-4 no-padding title-detail"><h3>Data Kualifikasi & Klasifikasi</h3></div>
		    <div class="header-top-title"></div>
            <div class="row">
                <div class="col-lg-1 space"> 
					<?php echo anchor('welcome/admin/editkualifikasi', '<button class="btn btn-primary pull-right" type="button">Edit</button>');?> 
            </div>
			<div class="table-responsive col-table">
				<table class=" table  table-bordered table-hover  "  >
					<thead class="table-edit" style="">          
						<tr>
							<td rowspan="2" >No</td>
							<td rowspan="2" >Sub Bidang Klasifikasi/Layanan </td>
							<td  rowspan="2" >Nomor Kode</td>
							<td rowspan="2">Gred</td>
							<td colspan="2">Kemampuan Dasar</td>
							<td rowspan="2" >Asosiasi</td>
							<td  rowspan="2">Batas Req.Ulang Th.11</td>
							<td  rowspan="2">Status Perpanjangan 2011</td>
						</tr>
						<tr>
							<td  >Tahun</td>
							<td >Nilai (Juta) </td>
						</tr>
					</thead>
					<tbody class="table-edit-body">
						<tr>
							<td >1</td>
							<td> 	Bangunan-bangunan non perumahan lainnya, termasuk perawatannya</td>
							<td>21005</td>
							<td>Gred - 2</td>
							<td>  </td>
							<td>0 </td>
							<td>APAKSINDO </td>
							<td>20-Sep-2016</td>
							<td></td>
						</tr>
						<tr>
							<td >2</td>
							<td> 	Pekerjaan interior, termasuk perawatannya</td>
							<td>21103/td>
							<td> Gred - 2 </td>
							<td> </td> 
							<td>0 </td>
							<td>APAKSINDO </td>
							<td>20-Sep-2016</td>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
				<div class="col-lg-offset-4 no-padding title-detail"><h3>Data Administrasi</h3></div>
				<div class="header-top-title"></div>
                <div class="row">
                    <div class="col-lg-1 space"> <?php echo anchor('welcome/admin/editadministrasi', '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
                    </div>
				<div class="table-responsive ">
					<div class="row">
						<div class="col-md-5 col-md-offset-3 col-table">
							<table class=" table table-hover table-bordered" >
								<thead class="table-edit">
									<tr>
										<td colspan="3">Akte Pendirian</td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<tr>
										<td >No. Akte</td>
										<td>:</td>
										<td>32</td>
									</tr>
									<tr>
										<td >Nama Notaris</td>
										<td>:</td>
										<td>I Putu Widara, SH</td>
									</tr>
									<tr>
										<td >Alamat</td>
										<td>:</td>
										<td>Bangli</td>
									</tr>
									<tr>
										<td >Kota/Kabupaten</td>
										<td>:</td>
										<td>Kab. Bangli</td>
									</tr>
									<tr>
										<td >Propinsi</td>
										<td>:</td>
										<td>Bali</td>
									</tr>
									<tr>
										<td >Tanggal Akte</td>
										<td>:</td>
										<td>Selasa, 29 Oktober 1991</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<table class=" table table-hover table-bordered" >
								<thead class="table-edit">
									<tr>
										<td colspan="8" >Pengesahan</td>
									</tr>
									<tr>
										<td colspan="2" >Menteri Kehakiman dan HAM</td>
										<td colspan="2" >Pengadilan Negri</td>
										<td colspan="2" >Lembar Negara</td>
										<td colspan="2" >Pengesahan DEPKUMHAM</td>
									</tr>
									<tr>
										<td >Nomor</td>
										<td >Tanggal</td>
										<td >Nomor</td>
										<td >Tanggal</td>
										<td >Nomor</td>
										<td >Tanggal</td>
										<td>No.DEPKUMHAM</td>
										<td>Tanggal</td>
									</tr>
								</thead>
								<tbody class="table-edit-body"> 
									<tr>
										<td >-</td>
										<td>-</td>
										<td>22.HT.01.10.TAHUN 1991</td>
										<td>Selasa, 29 Oktober 1991 </td>
										<td>- </td>
										<td>- </td>
										<td></td>
										<td></td>
									</tr>
								</tbody>
							</table>
						</div>      
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<table class=" table table-hover table-bordered"  >
								<thead class="table-edit">
									<tr>
										<td colspan="7" >Akte Perubahan</td>
									</tr>
									<tr>
										<td >No</td>
										<td  >Akte</td>
										<td >Nama Notaris</td>
										<td  >Alamat</td>
										<td >Kota/Kabupaten</td>
										<td  >Propinsi</td>
										<td  >Tanggal Akte</td> 
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<tr>
										<td ></td>
										<td  ></td>
										<td ></td>
										<td  ></td>
										<td ></td>
										<td  ></td>
										<td  ></td> 
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-offset-5 no-padding title-detail"><h3>Data Pengurus</h3></div>
				<div class="header-top-title"></div>
                
				<div class="row">
                    <div class="col-md-12 col-table">
                        <div class="table-responsive">
							<table class=" table table-hover table-bordered"  >
								<thead class="table-edit">                            
									<tr>
										<td >No</td>
										<td >Nama</td>
										<td >Tempat / Tanggal Lahir</td>
										<td >Alamat</td>
										<td >No.KTP</td>
										<td >Jabatan</td>
										<td >Pendidikan</td> 
										<td></td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<?php if(isset($table)){
                                foreach($table as $row){ ?>
                                    <tr>
                                    
                                        <td ><?php echo $row->id; ?></td>
                                        <td> <?php echo $row->nama; ?></td>
                                        <td><?php echo $row->tgl_lahir; ?></td>
                                        <td><?php echo $row->alamat; ?>  </td>
                                        <td><?php echo $row->no_ktp; ?> </td>
                                        <td><?php echo $row->jabatan; ?></td>
                                        <td><?php echo $row->pendidikan; ?></td>
                                        <td><?php echo anchor("show_data/show_edit_pengurus/$row->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></td>
                                        
                                    </tr>
                                <?php }?>
                            
                                <?php }else {?>
                                <tr>
                                    
                                        <td ></td>
                                        <td> </td>
                                        <td></td>
                                        <td> </td>
                                        <td> </td>
                                        <td></td>
                                        <td></td>
                                        
                                    </tr>
                                
                                <?php
                                }
                                ?>
								</tbody>
							</table>
                        </div>
                    </div>
                </div>
				<div class="col-lg-offset-5 no-padding title-detail"><h3>Data Keuangan</h3></div>
				<div class="header-top-title"></div>
                <div class="row">
                    <div class="col-lg-1 space"> <?php echo anchor('welcome/admin/editkeuangan', '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
                </div>
				<div class="table-responsive">
					<div class="row">
						<div class="col-md-5 col-md-offset-3 col-table">
							<table class="table table-hover table-bordered"  >
								<thead class="table-edit">            
									<tr>
										<td  colspan="4">SPT PPh 2 tahun Terakhir </td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Pembayaran Wajib Pajak</td>
										<td>0  </td>
									</tr>
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Pembayaran Wajib Pajak</td>
										<td>0  </td>
									</tr>
								</tbody >
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8 col-table col-md-offset-2">
							<table class=" table table-hover table-bordered"  >
								<thead class="table-edit">           
									<tr>
										<td  colspan="4">Omset 5 tahun Terakhir </td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Nilai Omset pada Tahun Bersangkutan (Rp)</td>
										<td>0  </td>
									</tr>
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Nilai Omset pada Tahun Bersangkutan (Rp)</td>
										<td>0  </td>
									</tr>
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Nilai Omset pada Tahun Bersangkutan (Rp)</td>
										<td>0  </td>
									</tr>
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Nilai Omset pada Tahun Bersangkutan (Rp)</td>
										<td>0  </td>
									</tr>
									<tr>
										<td >Tahun</td>
										<td> 	</td>
										<td>Nilai Omset pada Tahun Bersangkutan (Rp)</td>
										<td>0  </td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-table">
							<table class=" table table-hover table-bordered"  >
								<thead class="table-edit">   
									<tr>
										<td  colspan="8">Pemilik Saham </td>
									</tr>
									<tr>
										<td  >No </td>
										<td  >Nama </td>
										<td  >Nomor KTP/NPWP </td>
										<td  >Alamat </td>
										<td  >Jumlah Saham </td>
										<td  >Nilai Satuan Saham </td>
										<td  >Modal Dasar </td>
										<td  >Modal disetor </td>
									</tr>  
								</thead>
								<tbody class="table-edit-body">
									<tr>
										<td >1</td>
										<td>I Made Darma MP	</td>
										<td>22.0604.011258.0001</td>
										<td>Lingk/Br.Pule Bangli   </td>
										<td>0</td>
										<td>0</td>
										<td>200.000.000</td>
										<td>200.000.000</td>
									</tr>
									<tr>
										<td >2</td>
										<td>I Putu Darsana Alit	</td>
										<td>22.0604.311265.0027</td>
										<td>Br.Pule    </td>
										<td>0</td>
										<td>0</td>
										<td>200.000.000</td>
										<td>200.000.000</td>
									</tr>
								</tbody>          
							</table>
						</div>
					</div>
				</div>
				<div class="col-lg-offset-5 no-padding title-detail"><h3>Data Tenaga Kerja</h3></div>
				<div class="header-top-title"></div>
                
				<div class="row">
					<div class="col-md-12 col-table">
						<div class="table-responsive">
							<table class=" table table-hover table-bordered" >
								<thead class="table-edit">            
									<tr>
										<td>No</td>
										<td>Nama</td>
										<td>Tempat / Tanggal Lahir</td>
										<td>Alamat</td>
										<td>No.KTP</td>
										<td>PJT</td>
										<td>PJB</td>
										<td>Bidang</td>
										<td>Pendidikan</td>
										<td>No.Registrasi</td>
										<td>Jenis Sertifikat</td>
										<td></td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<?php if(isset($table2)){
								foreach($table2 as $row){ ?>
									<tr>
										<td ><?php echo $row->id; ?></td>
										<td> <?php echo $row->nama; ?></td>
										<td><?php echo $row->tgl_lahir; ?></td>
										<td><?php echo $row->alamat; ?> </td>
										<td><?php echo $row->no_ktp; ?> </td>
										<td><?php echo $row->pjt; ?> </td>
										<td><?php echo $row->pjb; ?></td>
										<td><?php echo $row->bidang; ?></td>
										<td><?php echo $row->pendidikan; ?></td>
										<td><?php echo $row->no_registrasi; ?></td>
										<td><?php echo $row->jenis_serikat; ?></td>
										<td><?php echo anchor("show_data/show_edit_pekerja/$row->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></td>
									</tr>
									
									<?php }?>
								
								<?php }else {?>
								<tr>
									
										<td ></td>
										<td> </td>
										<td></td>
										<td> </td>
										<td> </td>
										<td></td>
										<td></td>
										<td> </td>
										<td></td>
										<td></td>
										<td></td>
										
									</tr>
								
								<?php
								}
								?>
								</tbody>
							</table>
						</div>      
					</div>    
				</div>
				<div class="col-lg-offset-5 no-padding title-detail"><h3>Data Peralatan</h3></div>
				<div class="header-top-title"></div>
                
				<div class="row">
                    <div class="col-md-10 col-md-offset-1 col-table">
                        <div class="table-responsive">
							<table class=" table table-hover table-bordered " >
								<thead class="table-edit">
									<tr>
										<td >No</td>
										<td >Jenis</td>
										<td >Kapasitas</td>
										<td >Merk</td>
										<td >Tahun</td>
										<td >Kondisi</td>
										<td >Lokasi</td>
										<td >Jumlah</td>
										<td >Harga (Rp.)</td> 
										<td></td>
									</tr>
								</thead>
								<tbody class="table-edit-body">
									<?php if(isset($table3)){
								foreach($table3 as $row){ ?>
									<tr>
									
										<td ><?php echo $row->id; ?></td>
										<td> <?php echo $row->jenis; ?></td>
										<td><?php echo $row->kapasistas; ?></td>
										<td><?php echo $row->merk; ?>  </td>
										<td><?php echo $row->tahun; ?> </td>
										<td><?php echo $row->kondisi; ?></td>
										<td><?php echo $row->lokasi; ?></td>
										<td><?php echo $row->jumlah; ?></td>
										<td><?php echo $row->harga; ?></td>
										<td><?php echo anchor("show_data/show_edit_peralatan/$row->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></td>
									</tr>
								<?php }?>
								
								<?php }else {?>
								<tr>
									
										<td ></td>
										<td> </td>
										<td></td>
										<td> </td>
										<td> </td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										
									</tr>
								
								<?php
								}
								?>
								</tbody>
							</table>
                        </div>
                    </div>
                </div>
			<div class="col-lg-offset-5 no-padding title-detail"><h3>Data Pengalaman</h3></div>
			<div class="header-top-title"></div>
   
			<div class="row">
				<div class="col-md-12 col-table">
					<div class="table-responsive">
						<table class=" table table-hover table-bordered " >
							<thead class="table-edit">         
								<tr>
									<td rowspan="2" >No</td>
									<td  colspan="3">Proyek</td>
									<td rowspan="2" >Pemberi Tugas</td>
									<td rowspan="2">Sub Bidang Kualifikasi</td>
									<td colspan="3" >Nomor</td>
									<td colspan="5">Tanggal</td>
								</tr>
								<tr>
									<td  >Tahun</td>
									<td  >Nama</td>
									<td>Nilai (Rp)</td>
									<td  >Kontrak</td>
									<td  >NKPK</td>
									<td  >Berita Acara Serah Terima</td>
									<td >Berita Acara Serah Terima</td>
									<td >Kontrak</td>
									<td >Mulai</td>
									<td >Selesai</td>
									<td></td>
								</tr>
							</thead>
							<tbody class="table-edit-body">
								<?php if(isset($table4)){
								foreach($table4 as $row){ ?>
									<tr>
									
										<td ><?php echo $row->id; ?></td>
										<td> <?php echo $row->tahun_proyek; ?></td>
										<td><?php echo $row->nama_proyek; ?></td>
										<td><?php echo $row->nilai_proyek; ?>  </td>
										<td><?php echo $row->pemberi_tugas; ?></td>
										<td><?php echo $row->bidang_kualifikasi; ?></td>
										<td><?php echo $row->kotrak_nomor; ?></td>
										<td><?php echo $row->nkpk_nomor; ?></td>
										<td><?php echo $row->berita_acara_no; ?></td>
										<td><?php echo $row->berita_acara_tgl; ?></td>
										<td><?php echo $row->kontrak; ?></td>
										<td><?php echo $row->mulai; ?></td>
										<td><?php echo $row->selesai; ?></td>	
										<td><?php echo anchor("show_data/show_edit_tenaga_kerja/$row->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></td>
									
									</tr>
								<?php }?>
								<?php }else {?>
								<tr>
									<td ></td>
									<td></td>
									<td></td>
									<td> </td>
									<td> </td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td> </td>
									<td> </td>
								</tr>
								<?php }?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
    </div> 
    
</div>
       