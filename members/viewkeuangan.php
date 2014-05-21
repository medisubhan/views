    <div class="col-md-12 edit-content edit-view-badan-usaha  page-wrapper">
		<div class="well well-edit well-header-auto">
			<?php foreach ($user_list as $u_key){ ?>
			<div class="row">
				<div class="col-lg-1 col-lg-offset-10 space"> <?php echo anchor("show_data/show_edit_badan_usaha/$u_key->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
			</div>
			<form action="Keuangan.html">
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
					<?php }?>
				<div class="table-responsive">
					<div class="row">
						<div class="col-md-10 col-md-offset-1 col-table">
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
						<div class="col-md-10 col-table col-md-offset-1">
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
			</form>
		</div>
	</div>
        