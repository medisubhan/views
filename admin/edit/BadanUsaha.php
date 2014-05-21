

  
      <div class="col-md-12  edit-content page-wrapper">
    <div class="well ">
    <form class="form-horizontal form-edit " role="form">
    <?php foreach ($user_list as $u_key){ ?>
  <div class="form-group">
    <label for="inputnama" class="col-sm-4 col-edit-Badan control-label">Nama Badan Usaha </label>
      <div class="titik col-sm-1">:</div>
    <div class="row">
      <div class="col-sm-5">
      <input type="text" class="form-control  form-control-edit" value="<?php echo $u_key->nama_badan_usaha; ?>" id="" placeholder="">
    </div>
        </div>
  </div>
  <div class="form-group ">
    <label for="inputAlamat" class="col-sm-4 col-edit-Badan control-label">Alamat </label>
      <div class="titik col-sm-1">:</div>
    <div class="row">
      <div class="col-sm-5">
      <textarea class="form-control form-control-edit" rows="3" id=""><?php echo $u_key->alamat; ?></textarea>
    </div>
    </div>    
  </div>
     <div class="form-group ">
         <div class="row">
         <div class="col-sm-12">
            <div class="row form-group ">
                <label for="selectkabupaten" class="col-sm-3  col-sm-offset-1  control-label  ">Provinsi </label>
                <div class="titik col-sm-1">:</div>
     <div class="row">
        <div class="col-sm-5 col-edit-2">
      <select class="form-control form-control-edit" value="<?php echo $u_key->kabupaten_kota; ?>" id="">
        <option >Bogor</option>
        <option >Tangerang</option>
        <option >Jakarta Barat</option>
        <option >Jakarta Selatan</option>
        <option >Jakarta Utara</option>
        <option >Jakarta Pusat</option>
      </select>
        </div>
    </div>
            </div>
             <div class="row form-group ">
                <label for="selectkabupaten" class="col-sm-3   control-label col-sm-offset-1 ">Kabupaten </label>
                <div class="titik col-sm-1">:</div>
     <div class="row">
        <div class="col-sm-5 col-edit-2">
      <select class="form-control form-control-edit" id="">
        <option >Bogor</option>
        <option >Tangerang</option>
        <option >Jakarta Barat</option>
        <option >Jakarta Selatan</option>
        <option >Jakarta Utara</option>
        <option >Jakarta Pusat</option>
      </select>
        </div>
    </div>
            </div>
<div class="row form-group">
                        <label for="inputpos" class="col-sm-3 col-edit-Badan col-sm-offset-1  col-edit   control-label label-pos ">Kode Pos </label>
                <div class="titik col-sm-1">:</div>
                    <div class="row">
                        <div class="col-sm-2 col-edit-2">
                            <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->kode_pos; ?>" id="" placeholder="">
                        </div>
                    </div>
                  </div>
        <div class="row form-group">
            <label for="inputpos" class="col-sm-3 col-edit-Badan col-sm-offset-1  col-edit   control-label label-pos ">Telepon </label>
            <div class="titik col-sm-1">:</div>
            <div class="row">
                <div class="col-sm-2 col-edit-2">
                        <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->telephone; ?>" id="" placeholder="" value="">
                </div>
            </div>
        </div>
             <div class="row form-group">
                <label for="inputfax" class="col-sm-3 col-edit-Badan col-sm-offset-1 control-label col-edit">Fax </label>
                 <div class="titik col-sm-1">:</div>
           <div class="row">    
            <div class="col-sm-3 col-edit-2">
      <input type="text" class="form-control form-control-edit " value="<?php echo $u_key->fax; ?>" id="" placeholder="" value="">
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
                    <input type="email" class="form-control form-control-edit" value="<?php echo $u_key->email; ?>" id="" placeholder="">
                </div>
        </div>
        <div class="form-group">
              <label for="inputemail" class="col-sm-4 col-edit-Badan control-label">Website </label>
            <div class="titik col-sm-1">:</div>
            <div class="col-sm-4 ">
                <input type="email" class="form-control form-control-edit" value="<?php echo $u_key->website; ?>" id="" placeholder="" value="">
            </div>
         </div>
            
     <div class="form-group ">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">NPWP </label>
         <div class="titik col-sm-1">:</div>
    <div class="col-sm-4">
      <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->npwp; ?>" id="" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Domisili         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit " value="<?php echo $u_key->domisili; ?>" id="" placeholder="">
    </div>  
  </div>
        
  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">SIUP         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit" value="<?php echo $u_key->siup; ?>" id="" placeholder="">
    </div>  
  </div>

  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">TDP         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit" value="<?php echo $u_key->tdp; ?>" id="" placeholder="">
    </div>  
  </div>
  
  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Sert.Manj         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit" value="<?php echo $u_key->mnjMutu; ?>" id="" placeholder="">
    </div>  
  </div>
        
  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">Sert.Manj 3         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit" value="<?php echo $u_key->mnjMutuu; ?>" id="" placeholder="">
    </div>  
  </div>
        
  <div class="form-group">
    <label for="inputnpwp" class="col-sm-4 col-edit-Badan control-label">NPWP & PKP         </label>
      <div class="titik col-sm-1">:</div>
       <label  class="col-sm-3 col-edit-Berlaku control-label">Berlaku S.d        </label>
    <div class="col-sm-3">
      <input type="text" class="form-control datepicker form-control-edit " value="<?php echo $u_key->npwp_pkp; ?>"id="" placeholder="">
    </div>  
  </div>
    
     
        
  <div class="form-group">
    <div class="col-sm-offset-1 col-sm-9">
      <button class="btn btn-primary pull-right" type="button">Register</button>
    </div>
  </div>
  <?php }?> 
</form>


          </div>
    </div>
        
     