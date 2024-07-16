
<!-- BEGIN: Page Main-->
<div id="main">
<div class="row">

<div class="col s12">
<div class="container">
<div class="section section-data-tables">

<!-- Page Length Options -->
<div class="row">
<div class="col s12">
<div class="card">
<div class="card-content">
<center>
<h5 class="breadcrumbs-title mt-0 mb-0 display-inline"><span>Data <?=$folder;?></span></h5>
</center>
</div>
</div>
<div class="card">
<div class="card-content">
<form method="POST" action="../laporan/user.php" target="_blank">
<div class="input-field col s12">
<button style="float: right;" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-light-blue-cyan">
<i class="material-icons">print</i>
</button>
</div>
</form>
<div class="row">
<div class="col s12">
<table id="page-length-option" class="display">
<thead>
<tr>	
<th>No</th>

    <th>Jabatan</th>

    <th>Nama Lengkap</th>

    <th>Kontak</th>

    <th>Email</th>

    <th>Password</th>

    <th>Tanggal Lahir</th>

    <th>Alamat</th>

    <th>Tanggal Masuk</th>

    <th>Agama</th>

    <th>Akses</th>

</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM user

JOIN jabatan USING(id_jabatan) WHERE akses='Pegawai'
JOIN unitkerja USING(id_unitkerja) 

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_user'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['id_jabatan'];?></td>

<td><?=$data['nama_pengguna'];?></td>

<td><?=$data['telp'];?></td>

<td><?=$data['email'];?></td>

<td><?=$data['password'];?></td>

<td><?=tgl($data['tanggal_lahir']);?></td>

<td><?=$data['alamat'];?></td>

<td><?=tgl($data['tanggal_masuk']);?></td>

<td><?=$data['agama'];?></td>

<td><?=$data['akses'];?></td>

</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<div class="content-overlay"></div>
</div>
</div>
</div>
<!-- END: Page Main-->
