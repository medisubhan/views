    <div class="col-md-12 edit-content edit-view-badan-usaha page-wrapper">
		<div class="well well-edit well-header-auto">
		<?php foreach ($user_list as $u_key){ ?>
			<div class="row">
				<div class="col-lg-1 col-lg-offset-10 space"><?php echo anchor('welcome/members/uploadbadanusaha', '<button class="btn btn-primary pull-right" type="button">Upload File</button>');?></div>
				<div class="col-lg-1 space"> <?php echo anchor("show_data/show_edit_badan_usaha/$u_key->id", '<button class="btn btn-primary pull-right" type="button">Edit</button>');?></div>
			</div>
			<form action="DataAdministrasiUsaha.html"> 
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
			</form> 
        </div>
	</div>
        