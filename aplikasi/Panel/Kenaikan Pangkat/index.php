
 <!-- BEGIN: Page Main-->
 <div class="main-content app-content mt-0">
 	<div class="side-app">

 		<!-- CONTAINER -->
 		<div class="main-container container-fluid">

 			<!-- PAGE-HEADER -->
 			<div class="page-header">
 				<h1 class="page-title"></h1>
 				<div>
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="index.php">Home</a></li>
 						<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=<?=$folder;?>"><?=$judul;?></a></li>
 					</ol>
 				</div>

 			</div>
 			<!-- PAGE-HEADER END -->

 			<!-- Row -->
 			<div class="row row-sm">
 				<div class="col-lg-12">
 					<div class="card">
 						<div class="card-header">
 							<h3 class="card-title"><?=$folder;?></h3>
 						</div>
 						<div class="card-body">
 							<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
 									<thead>
 										<tr>
 											<th>No</th>

    <th>Pegawai</th>

    <th>Pangkat Awal</th>

    <th>Pangkat Berikutnya</th>

    <th>Tanggal Pengajuan</th>

    <th>Alasan</th>

    <th>Status</th>

<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM naik_pangkat
JOIN user USING(id_user)
");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_naik_pangkat'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['nama_pengguna'];?></td>

<?php 
$id_pangkat_awal = $data['id_pangkat_awal'];
$id_pangkat_berikutnya = $data['id_pangkat_berikutnya'];
$row = mysqli_query($koneksi,"SELECT * FROM pangkat WHERE id_pangkat='$id_pangkat_awal'");
while ($rows = mysqli_fetch_array($row)) {
 ?>
<td><?=$rows['nama_pangkat'];?></td>
<?php } ?>
<?php 
$row = mysqli_query($koneksi,"SELECT * FROM pangkat WHERE id_pangkat='$id_pangkat_berikutnya'");
while ($rows = mysqli_fetch_array($row)) {
 ?>
<td><?=$rows['nama_pangkat'];?></td>
<?php } ?>

<td><?=tgl($data['tanggal_pengajuan']);?></td>

<td><?=$data['alasan_pengajuan'];?></td>

<td><?=$data['status_pengajuan'];?></td>

<td align="center">
<?php if ($data['status_pengajuan'] == "Pending"): ?>
<a href="index.php?page=<?=$folder;?>&form=detail&akhir&ida=<?=$id;?>&id=<?=$data['id_user'];?>&idp=<?=$data['id_pangkat_berikutnya'];?>" class="btn btn-icon btn-primary">
Naikkan Pangkat
</a>
<a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>&id_pegawai=<?=$data['id_user'];?>&nama_pegawai=<?=$data['nama_pengguna'];?>" class="btn btn-icon btn-primary">
Ubah Data
</a>
<?php else: ?>
<a href="index.php?page=<?=$folder;?>&form=detail&awal&ida=<?=$id;?>&id=<?=$data['id_user'];?>&idp=<?=$data['id_pangkat_awal'];?>" class="btn btn-icon btn-primary">
Kembalikan Pangkat
</a>	
<?php endif ?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
<!-- End Row -->

</div>
<!-- CONTAINER CLOSED -->

</div>
</div>
<!-- END: Page Main-->
