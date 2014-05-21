    <div class="col-md-12  edit-content edit-view-badan-usaha page-wrapper"> 
        <div class="well well-edit">
			
			<?php foreach ($user_list as $u_key){ ?>
			<?php if($this->session->flashdata('message')){echo "<div class='col-md-12 add'>Data Berhasil Ditambah</div>";} else{}?>
			<div class="row">
				<div class="col-lg-1 col-lg-offset-10 space"><?php echo anchor('welcome/members/uploadbadanusaha', '<button class="btn btn-primary pull-right" type="button">Upload File</button>');?></div>
				<div class="col-lg-1 space"> <?php echo anchor("welcome/members/pengalaman", '<button class="btn btn-primary pull-right" type="button">Add</button>');?></div>
			</div>
            <form action="pengalaman.html">
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
									<td colspan="4">Tanggal</td>
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
								</tr>
							</thead>
							<tbody class="table-edit-body">
							<?php if(isset($table)){
								foreach($table as $row){ ?>
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
