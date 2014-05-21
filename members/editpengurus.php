
      <div class="col-md-12  edit-content page-wrapper">
    <div class="well ">
    
    <div class="header-content container">
    
    </div>
    <div class="well well-edit">
    <?php foreach ($user_list as $u_key){ ?>
    <form class="form-horizontal form-edit" role="form" action="<?php echo base_url();?>index.php/submit_data/updatePengurus" method="post">
    <legend class="legend">Pengurus</legend>
    <div class="form-group">
        <input id="info_id" type="hidden" name="id" value="<?php echo $u_key->id;?>">
        <label for="inputgred" class="col-sm-3 control-label col-input-pengurus">  nama </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3 ">
            <input type="text" class="form-control form-control-edit" value="<?php echo $u_key->nama;?>"  name="nama">
        </div>
        <label for="inputjabatan" class="col-sm-2 control-label ">Jabatan</label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3">
            <input type="type" placeholder="" class="form-control form-control form-control-edit" value="<?php echo $u_key->jabatan;?>" name="jabatan">
        </div>
    </div>
    <div class="form-group form-group-edit">
        <label for="inputtahun" class="col-sm-3 control-label col-input-pengurus"> Tanggal Lahir </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-3">
            <input type="text" placeholder="" class="form-control datepicker form-control form-control-edit" value="<?php echo $u_key->tgl_lahir;?>" name="tgl_lahir">
        </div>
        <label for="inpuNPWP" class="col-sm-2 control-label"> Pendidikan</label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-2">
            <select class="form-control form-control form-control-edit" id="" name="pendidikan" >
                <option value="<?php echo $u_key->pendidikan;?>">SD</option>
                <option value="<?php echo $u_key->pendidikan;?>">SMP</option>
                <option value="<?php echo $u_key->pendidikan;?>">SMA</option>
                <option value="<?php echo $u_key->pendidikan;?>">S1</option>
                <option value="<?php echo $u_key->pendidikan;?>">S2</option>
                <option value="<?php echo $u_key->pendidikan;?>">S3</option>
            </select>
        </div>   
    </div>
    <div class="form-group form-group-edit">
        <label for="inputAlamat" class="col-sm-3 control-label col-input-pengurus"> Alamat </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-5">
            <textarea class="form-control form-control form-control-edit" rows="3" name="alamat" id=""> <?php echo $u_key->alamat;?></textarea>
        </div>
    </div>
    <div class="form-group form-group-edit">
        <label for="inputasosiasi" class="col-sm-3 control-label col-input-pengurus">No. KTP </label>
        <div class="col-xs-1 control-label min-size ">:</div>
        <div class="col-sm-4">
            <input type="text" placeholder="" class="form-control form-control form-control-edit" id="" value="<?php echo $u_key->no_ktp;?>" name="no_ktp">
        </div>
    </div>
        
    <div class="form-group">
        
        <div class="col-sm-3 col-sm-offset-9 col-edit-btn-pengurus-2">
            <input class="btn btn-primary pull-right" type="submit" value="Simpan Data Pengurus">
        </div>
    </div>
</form>
 <?php }?>
</div>
    </div>

        