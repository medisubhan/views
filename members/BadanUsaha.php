<div class="col-md-12  edit-content page-wrapper">
    <div class="well "> 
    <?php foreach ($user_list as $u_key){ ?>  
		<form action="<?php echo base_url();?>index.php/submit_data/submitBadanUsaha" method="post" class="form-horizontal form-edit" role="form">
			<div class="form-group">
				<label for="inputnama" class="col-sm-4 col-edit-Badan control-label">Nama Badan Usaha </label>
				<div class="titik col-sm-1">:</div>
				<div class="row">
					<div class="col-sm-5">
						<input type="text" value="<?php echo $u_key->nama_badan_usaha; ?>" name="badanUsaha" class="form-control form-control-edit" id="" placeholder="">
					</div>
				</div>
			</div>
			<div class="form-group ">
				<label for="inputAlamat" class="col-sm-4 col-edit-Badan control-label">Alamat </label>
				<div class="titik col-sm-1">:</div>
				<div class="row">
					<div class="col-sm-5">
						<textarea name="inputAlamat" class="form-control form-control-edit" rows="3" id="" ><?php if(isset($u_key->alamat)){echo $u_key->alamat;} else{}  ?></textarea>
					</div>
				</div>    
			</div>
			<div class="form-group ">
				<div class="row">
					<div class="col-sm-12">
						<div class=" form-group ">
							<label for="selectkabupaten" class="col-sm-3 col-sm-offset-1  control-label  ">Provinsi </label>
							<div class="titik col-sm-1">:</div>
							<div class="row">
								<div class="col-sm-3 col-edit-2">
									<select name="provinsi" class="form-control form-control-edit" id="" value="<?php echo $u_key->provinsi; ?>">
										<option >DKI Jakarta</option>
										
									</select>
								</div>
							</div>
						</div>
						<div class="form-group ">
							<label for="selectkabupaten" class="col-sm-3  col-sm-offset-1 " control-label value="<?php if(isset($u_key->kabupaten_kota)) {echo $u_key->kabupaten_kota;}else{} ?>"  >Wilayah </label>
							<div class="titik col-sm-1">:</div>
							<div class="row">
								<div class="col-sm-3 col-edit-2">
									<select name="kabupaten" class="form-control form-control-edit" id="">
										<option >Jakarta Barat</option>
										<option >Jakarta Selatan</option>
										<option >Jakarta Utara</option>
										<option >Jakarta Pusat</option>
										<option >Jakarta Timur</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label for="inputpos" class="col-sm-3 col-edit-Badan col-sm-offset-1  col-edit   control-label label-pos  ">Kode Pos </label>
							<div class="titik col-sm-1">:</div>
							<div class="row">
								<div class="col-sm-2 col-edit-2">
									<input type="text" name="kodePos" class="form-control form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->kode_pos)) {echo $u_key->kode_pos;}else{} ?>">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label for="inputpos" class="col-sm-3 col-edit-Badan col-sm-offset-1  col-edit   control-label label-pos  ">Telepon </label>
							<div class="titik col-sm-1">:</div>
							<div class="row">
								<div class="col-sm-2 col-edit-2">
									<input type="text" name="tlp" class="form-control form-control-edit" id="" placeholder=""  value="<?php if(isset($u_key->telephone)) { echo $u_key->telephone;} else{}  ?>">
								</div>
							</div>
						</div>
						<div class="row form-group">
							<label for="inputfax" class="col-sm-3 col-edit-Badan col-sm-offset-1 control-label col-edit">Fax </label>
							<div class="titik col-sm-1">:</div>
							<div class="row">    
								<div class="col-sm-3 col-edit-2">
									<input type="text" name="fax" class="form-control form-control-edit " id="" placeholder="" value="<?php if(isset($u_key->fax)) { echo $u_key->fax;} else{}  ?>">
								</div>
							</div> 
						</div>
					</div>
				</div>
            </div>     
			<div class="form-group">
				<label for="inputemail" class="col-sm-4 col-edit-Badan control-label">E-mail </label>
					<div class="titik col-sm-1">:</div>
					<div class="col-sm-4 ">
						<input type="email" value="<?php  if(isset($u_key->email)) { echo $u_key->email;}else{} ?>" name="email" class="form-control form-control-edit" id="" placeholder=""  >
					</div>
			</div>
			<div class="form-group">
				<label for="inputemail" class="col-sm-4 col-edit-Badan control-label">Website </label>
				<div class="titik col-sm-1">:</div>
				<div class="col-sm-4 ">
					<input type="text" name="website" class="form-control form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->website)) { echo $u_key->website; }else{}?>">
				</div>
			</div>
			<div class="form-group ">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">NPWP </label>
				<div class="titik col-sm-1">:</div>
				<div class="col-sm-4">
					<input type="text" name="npwp" class="form-control form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->npwp)) { echo $u_key->npwp; }else{} ?>">
				</div>
			</div>
			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Domisili         </label>
				<div class="titik col-sm-1">:</div>
				<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
				<div class="col-sm-3">
					<input type="text" name="domisili" class="form-control datepicker form-control-edit " id="" placeholder="" value="<?php if(isset($u_key->domisili)) { echo $u_key->domisili; }else{} ?>">
				</div>  
			</div>
        
			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">SIUP         </label>
				<div class="titik col-sm-1">:</div>
				<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
				<div class="col-sm-3">
					<input type="text" name="siup" class="form-control datepicker form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->siup)) { echo $u_key->siup; }else{} ?>">
				</div>  
			</div>

			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">TDP         </label>
				<div class="titik col-sm-1">:</div>
				<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
				<div class="col-sm-3">
					<input type="text" name="tdp" class="form-control datepicker form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->tdp)) { echo $u_key->tdp; }else{} ?>">
				</div>  
			</div>
  
			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Manajemen Mutu 1         </label>
				<div class="titik col-sm-1">:</div>
				<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
				<div class="col-sm-3">
					<input type="text" name="manajemenMutu" class="form-control datepicker form-control-edit" id="" placeholder="" value="<?php if(isset($u_key->mnjMutu)) { echo $u_key->mnjMutu; }else{} ?>">
				</div>  
			</div>
        
			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Manajemen Mutu  2       </label>
				<div class="titik col-sm-1">:</div>
				<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
				<div class="col-sm-3">
					<input type="text" name="manajemenMutuu" class="form-control datepicker form-control-edit"  id="" placeholder="" value="<?php if(isset($u_key->mnjMutuu)) { echo $u_key->mnjMutuu; }else{} ?>">
				</div>  
			</div>
        
			<div class="form-group">
				<label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">NPWP & PKP         </label>
					<div class="titik col-sm-1">:</div>
					<label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
					<div class="col-sm-3">
						<input type="text" name="npwpPkp" class="form-control datepicker form-control-edit " id="" placeholder="" value="<?php if(isset($u_key->npwp_pkp)) { echo $u_key->npwp_pkp; }else{} ?>">
					</div>  
			</div>
    
     
        
			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-9">
					<input type="submit"  alt="Submit" class="btn btn-primary pull-right">
				</div>
			</div>
		</form>
  <?php }?>
    </div>
</div>
        
     