
      <div class="col-md-12  edit-content page-wrapper">
    <div class="well well-edit">
    
    <div class="header-content container">
	
	</div>      
    
  <?php foreach ($user_list as $u_key){ ?>      
  <form class="form-horizontal form-edit form-edit-view"  role="form" action="<?php echo base_url();?>index.php/submit_data/update_peralatan" method="post">
    <legend class="legend">Peralatan  </legend>
  <input id="info_id" type="hidden" name="id" value="<?php echo $u_key->id;?>">
        <div class="form-group">
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inputgred" class="col-sm-4 control-label">    Jenis </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->jenis;?>" name="jenis" id="inputgred">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputtahun" class="col-sm-4 control-label">    Kapasitas </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-4">
                        <input type="text" placeholder="" value="<?php echo $u_key->kapasistas;?>" name="kapasitas" class="form-control form-control-edit" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputAlamat" class="col-sm-4 control-label">  Merk </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="" value="<?php echo $u_key->merk;?>" name="merk" class="form-control form-control-edit" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inputasosiasi" class="col-sm-4 control-label">   Tahun </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="text" placeholder="" value="<?php echo $u_key->tahun;?>" name="tahun" class="form-control form-control-edit" id="">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label"> Kondisi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-3">
                        <input type="type" placeholder="" value="<?php echo $u_key->kondisi;?>" name="kondisi" class="form-control form-control-edit" id="">
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label">   Lokasi </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="type" placeholder="" value="<?php echo $u_key->lokasi;?>" name="lokasi" class="form-control form-control-edit" id=""><br>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label"> Jumlah </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-5">
                        <input type="type" placeholder="" value="<?php echo $u_key->jumlah;?>" name="jumlah" class="form-control form-control-edit" id=""><br>
                    </div>
                </div>
                <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-4 control-label">  Harga (Rp.) </label>
                    <div class="col-xs-1 col-dot-edit-2 ">:</div>
                    <div class="col-sm-6">
                        <input type="type" placeholder="" value="<?php echo $u_key->harga;?>" name="harga" class="form-control form-control-edit" id=""><br>
                    </div>
                </div>
            </div> 
    </div>    
    <div class="form-group">
        <div class=" col-sm-2 col-sm-offset-9">
            <input class="btn btn-primary  " type="submit" value="Simpan Data Peralatan">
        </div>
        
    </div>
</form>
<?php }?>
 </div>  
       
        </div>
