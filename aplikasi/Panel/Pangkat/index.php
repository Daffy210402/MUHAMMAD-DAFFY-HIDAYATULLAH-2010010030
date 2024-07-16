
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
 							<?php include "enter.php"; ?>
 							<a href="index.php?page=<?=$folder;?>&form=Tambah" style="float: right;" class="btn btn-outline-primary btn-sm">
 								<i class="fa fa-plus"></i> Tambah Data
 							</a>
 						</div>
 						<div class="card-body">
 							<div class="table-responsive">
 								<table class="table table-bordered text-nowrap border-bottom" id="responsive-datatable">
 									<thead>
 										<tr>
 											<th>No</th>

    <th>Pangkat</th>

<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php 
$no = 1;
$sql = mysqli_query($koneksi,"SELECT * FROM pangkat

");
while ($data = mysqli_fetch_array($sql)) {
$id = $data['id_pangkat'];
?>
<tr>
<td><?=$no++;?></td>

<td><?=$data['nama_pangkat'];?></td>

<td align="center">
<a href="index.php?page=<?=$folder;?>&form=Ubah&id=<?=$id;?>" class="btn btn-icon btn-primary">
<i class="fe fe-edit"></i>
</a>
<a href="index.php?page=<?=$folder;?>&form=Hapus&id=<?=$id;?>" class="btn btn-icon btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">
<i class="fe fe-trash"></i>
</a>
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
