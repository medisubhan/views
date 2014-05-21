<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CI CRUD</title>

</head>

<body>

<h2> Simple CI CRUD Application </h2>

<table width="600" border="1" cellpadding="5">

<tr>

<th scope="col">Id</th>

<th scope="col">nama_badan_usaha</th>

<th scope="col">alamat</th>

<th scope="col">provinsi</th>

<th scope="col">kabupaten / kota</th>

<th scope="col">kode pos</th>

<th scope="col">telp</th>

<th scope="col">fax</th>

<th scope="col">email</th>

<th scope="col">website</th>

<th scope="col">npwp</th>

<th scope="col">domisili</th>

<th scope="col">siup</th>

<th scope="col">tdp</th>

<th scope="col">mnjMutu</th>

<th scope="col">manajemen mutu</th>

<th scope="col">npwp pkp</th>

<th scope="col">id reg</th>





</tr>

<?php foreach ($user_list as $u_key){ ?>

<tr>

<td><?php echo $u_key->id; ?></td>

<td><?php echo $u_key->nama_badan_usaha; ?></td>

<td><?php echo $u_key->alamat; ?></td>

<td><?php echo $u_key->provinsi; ?></td>

<td><?php echo $u_key->kabupaten_kota; ?></td>

<td><?php echo $u_key->kode_pos; ?></td>

<td><?php echo $u_key->kabupaten_kota; ?></td>

<td><?php echo $u_key->kode_pos; ?></td>

<td><?php echo $u_key->telephone; ?></td>

<td><?php echo $u_key->fax; ?></td>

<td><?php echo $u_key->website; ?></td>

<td><?php echo $u_key->npwp; ?></td>

<td><?php echo $u_key->domisili; ?></td>

<td><?php echo $u_key->siup; ?></td>

<td><?php echo $u_key->tdp; ?></td>

<td><?php echo $u_key->mnjMutu; ?></td>

<td><?php echo $u_key->mnjMutuu; ?></td>

<td><?php echo $u_key->npwp_pkp; ?></td>

<td><?php echo $u_key->id_reg; ?></td>

</tr>

<?php }?>


</table>

</body>

</html>

