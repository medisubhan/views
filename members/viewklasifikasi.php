<div class="col-md-12  edit-view-badan-usaha edit-content page-wrapper">       
    <div class="well well-edit">
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
    </div>
</div>
        