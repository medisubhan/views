<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <!-- Page Specific CSS -->
   
  </head>

  <body>

    <div id="wrapper">
            <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">HIKKMI MEMBERS MANAGEMENT</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
           <ul class="nav navbar-nav side-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Badan Usaha <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="BadanUsaha.html">Form </a></li>
                <li><a href="viewbadanusaha.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Kualifikasi dan Klasifikasi <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="kualifikasi.html">Form </a></li>
                <li><a href="viewklasifikasi.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Administrasi <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="administrasi.html">Form </a></li>
                <li><a href="viewadministrasi.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Pengurus <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="pengurus.html">Form </a></li>
                <li><a href="viewpengurus.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Keuangan <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="keuangan.html">Form </a></li>
                <li><a href="viewkeuangan.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Tenaga Kerja <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="tenagakerja.html">Form </a></li>
                <li><a href="viewtenagakerja.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Peralatan <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="peralatan.html">Form </a></li>
                <li><a href="viewperalatan.html">Data View</a></li>
              </ul></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Pengalaman <b class="caret"></b>                     </a>
              <ul class="dropdown-menu">
                <li><a href="pengalaman.html">Form </a></li>
                <li><a href="viewpengalaman.html">Data View</a></li>
              </ul></li>
          </ul>

          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown messages-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> Data Anggota  </a>
              
            </li>
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> User <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
      <div class="col-md-12  edit-content page-wrapper">
          <div class="row">
            <div class="col-md-1 col-xs-10 col-edit-button-pengalaman-upload-header space " >
                
            </div>
              <div class="col-md-1 col-xs-2 space col-edit-button-pengalaman-edit-header "  >
                <button class="btn btn-primary pull-right" type="button">Edit</button>
            </div>
          </div>
    
          <div class="well well-edit">
             <form action="pengalaman.html">
                  <div class="header-content">
    <h2 class="kualifikasi">Data Pengalaman Badan Usaha</h2>
    <div class="row row-content-2">
        <div class="col-md-2 ">Nama Badan Usaha </div>
  <div class="col-xs-1 col-xs-edit">:</div>
  <div class="col-md-5">ABAS BERSAUDARA, CV</div>
        </div>
        <div class="row row-content-2">
        <div class="col-md-2 ">Alamat Badan Usaha  </div>
  <div class="col-xs-1 col-xs-edit">:</div>
  <div class="col-md-5">Jl. Rambutan No. 6 Kab. Bangli </div>
        </div>
        
        <div class="row row-content-2">
        <div class="col-md-2 ">Telepon    </div>
  <div class="col-xs-1 col-xs-edit">:</div>
  <div class="col-md-5">0366-91080</div>
        </div>
        
        <div class="row row-content-2">
        <div class="col-md-2 ">NPWP      </div>
  <div class="col-xs-1 col-xs-edit">:</div>
  <div class="col-md-5">01.492.783.4-903.000</div>
        </div>
        </div>

        </form>
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
<tr>
<td >1</td>
<td> 	2010</td>
    <td>rehabilitasi sarana air bersih sama geriya kecamatan tembuku</td>
    <td>244.500.000  </td>
     <td>DPU Kab Bangli </td>
    <td>25003
Perpipaan air bersih / limbah, termasuk perawatannya </td>
    <td>690/237/DPU</td>
    <td>79455</td>
    <td>690/028/DPU</td>
    <td>-</td>
    <td>-</td>
    <td>13 Juli 2010 </td>
    <td>10 Oktober 2010  </td>
</tr>
            </tbody></table>
                </div>
        </div>
        </div>
            </div>
       
        </div>
</div>
        </div>
      <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
    </html>