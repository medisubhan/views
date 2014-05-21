<div class="col-md-12  edit-content page-wrapper">
    <div class="well wel-edit">
    <div class="header-content container">
                <div class="form-group col-lg-12">
                    <label for="BadanUsaha" class="col-sm-2  control-biasa">Nama Badan Usaha  </label>
                    <div class="col-xs-1 col-dot-edit">:</div>
                    <label for="BadanUsaha" class="col-sm-4  control-biasa">ABAS BERSAUDARA, CV </label> 
                </div>
                <div class="form-group col-lg-12 ">
                    <label for="alamat" class="col-sm-2  control-biasa col-alamat">Alamat Badan Usaha  </label>
                    <div class="col-xs-1 col-dot-edit">:</div> 
                    <label for="BadanUsaha" class="col-sm-3  control-biasa">Jl. Rambutan No. 6 </label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">Kabupaten  </label>
                    <div class="col-xs-1 col-dot-edit">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa">Kab. Bangli</label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">Telepon  </label>
                    <div class="col-xs-1 col-dot-edit">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa">0366-91080</label>
                </div>
                <div class="form-group col-lg-12">
                    <label for="Kabupaten" class="col-sm-2  control-biasa">NPWP  </label>
                    <div class="col-xs-1 col-dot-edit">:</div>
                    <label for="BadanUsaha" class="col-sm-3 control-biasa">01.492.783.4-903.000</label>
                </div>
        </div>

     <form action="<?php echo base_url();?>index.php/submit_data/submitAdministrasi" method="post" class="form-horizontal form-edit no-padding" role="form">   
       <div class="">
    <legend class="legend">Akte Pendirian</legend>
    <div class="border-again no-margin">    
  
      
    <div class="form-group col-lg-6">
            <label for="inputgred" class="col-sm-5 col-xs-6 control-label">  No Akte  </label>
            <div class="col-xs-1 col-dot-edit-2 ">:</div>
            <div class="col-sm-4 form-group">
                <input type="text" name="noAkte" class="form-control form-control-edit"  id="">
            </div>
            <label for="selectkabupaten" class="col-sm-5 col-xs-6 control-label">Nama Notaris </label>
            <div class="col-xs-1 col-dot-edit-2 ">:</div>
            <div class="col-sm-6 form-group">
                <input type="text" name="namaNotaris" placeholder="" class="form-control form-control-edit" id="">
            </div>
            <label for="inputAlamat" class="col-sm-5 col-xs-6 control-label">Alamat </label>
            <div class="col-xs-1 col-dot-edit-2 ">:</div>
            <div class="col-sm-6 form-group">
                <textarea name="alamat" class="form-control form-control-edit" rows="3" id=""></textarea>
            </div>
    </div>
    <div class="form-group col-lg-6">
        <label for="KemampuanDasar" class="col-sm-5 col-xs-6 control-label">   Provinsi </label>
        <div class="col-xs-1 col-dot-edit-2 ">:</div>
        <div class="col-sm-5 form-group">
            <select name="provinsi" class="form-control form-control-edit" id="">
                <option >Bogor</option>
                <option >Tangerang</option>
                <option >Jakarta Barat</option>
                <option >Jakarta Selatan</option>
                <option >Jakarta Utara</option>
                <option >Jakarta Pusat</option>
             </select>
        </div>
        <label for="selectkabupaten" class="col-sm-5 col-xs-6 control-label">Kabupaten </label>
        <div class="col-xs-1 col-dot-edit-2 ">:</div>
        <div class="col-sm-6 form-group">
             <select name="kabupaten" class="form-control form-control-edit" id="">
                <option >Bogor</option>
                <option >Tangerang</option>
                <option >Jakarta Barat</option>
                <option >Jakarta Selatan</option>
                <option >Jakarta Utara</option>
                <option >Jakarta Pusat</option>
             </select>
        </div>
    </div>
  
    <div class="form-group form-group-edit">
            
    </div>
</div>
     
        <legend class="legend"> Pengesahan</legend>
        <div class="border-again edit-content-bottom">
        
 
    
    <div class="row">
        <div class="col-md-6">
            <div class="row form-group">
                <label for="inpuNPWP" class="col-sm-7 control-label "> <h4> Mentri Hukum dan Ham </h4> </label>
            </div>
            <div class="row form-group">
               <label for="inputfax" class="col-sm-4  col-xs-6 control-label "> Nomor </label>
                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                <div class="col-sm-5 col-xs-12">
                    <input name="noPengesahan" type="type" placeholder="" class="form-control form-control-edit" id="">     
                </div>
            </div>
            <div class="row ">
                <label for="inpuNPWP" class="col-sm-4 col-xs-6 control-label"> Tanggal </label>
                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                <div class="col-sm-5 col-xs-12">
                    <input name="tglPengesahan" type="type" placeholder="" class="form-control form-control-edit" id="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row form-group">
                    <label for="inpuNPWP" class="col-sm-5 control-label ">  <h4> Pengadilan Negri </h4>  </label>
            </div>
            <div class="row form-group">
                 <label for="inpuNPWP" class="col-sm-3 col-xs-6 control-label"> Nomor </label>
                 <div class="col-xs-1 col-dot-edit-2 ">:</div>
                <div class="col-sm-5 col-xs-12">
                    <input name="noPengadilan" type="type" placeholder="" class="form-control form-control-edit" id="">
                </div>
            </div>
            <div class="row">
                <label for="inpuNPWP" class="col-sm-3 col-xs-6 control-label"> Tanggal </label>
                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                <div class="col-sm-5 col-xs-12">
                    <input name="tglPengadilan" type="type" placeholder="" class="form-control form-control-edit" id="">
                </div>
            </div>
        </div>
    </div>
        
        <div class="form-group">
            <label for="inpuNPWP" class="col-sm-2 control-label">    <h4> Lembar Negara </h4>  </label>
        </div>
  
        <div class="form-group">
            <label for="inpuNPWP" class="col-sm-2 col-xs-6 control-label"> Nomor </label>
            <div class="col-xs-1 col-dot-edit-2 ">:</div>
            <div class="col-sm-3 col-xs-12">
                <input type="type" name="noLembar" placeholder="" class="form-control form-control-edit" id="">
            </div>
        </div>
        <div class="form-group">
                <label for="inpuNPWP" class="col-sm-2 col-xs-6 control-label"> Tanggal </label>
                <div class="col-xs-1 col-dot-edit-2 ">:</div>
                <div class="col-sm-3 col-xs-12">
                    <input type="type" name="tglLembar" placeholder="" class="form-control form-control-edit" id="">
                </div>
        </div>
    </div>
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-4 col-xs-8 col-sm-edit-button">
                <button class="btn btn-primary pull-right" type="button">Register</button>
            </div>
        </div>
    </div>
        </form>
    </div>
</div>
